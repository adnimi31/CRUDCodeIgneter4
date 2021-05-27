<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\Validation\Rules;

class Users extends BaseController
{
    protected $usersmodel;
    public function __construct()
    {
        $this->usersmodel = new UsersModel();
    }
    public function index()
    {
        // session wajib untuk alert
        session();
        // $datausers = $this->usersmodel->findAll();
        // membuat curent page agar nantinya nomonya tidak terulang 1-10 lagi, dengan ternary
        $curentpage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;
        // bagian cari data
        $keyword = $this->request->getVar('keyword');
        // jika da yg di search, kirimkan value keyword ke method search di model negara
        if ($keyword) {
            $users = $this->usersmodel->search($keyword);
        } else {
            $users = $this->usersmodel;
        }
        $data = [
            'title' => 'Halaman CRUD',
            'validation' => \Config\Services::validation(),
            // menyeting data yg tapil berapa, lalu parameter keduanya yaitu nama tabel
            // hati-hati dengan pageinate mau dikasih berapa, kalau disini diganti di viewnya jangan lupa diganti juga perulangan i nya
            'users' => $users->paginate(10, 'users'),
            // pager untuk page inationya
            'pager' => $this->usersmodel->pager,
            'curentpage' => $curentpage
        ];
        return view('users', $data);
    }

    public function save()
    {
        // validasi setiap inputan
        if (!$this->validate([
            'foto' => 'max_size[foto,500]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric'
        ])) {

            return redirect()->to('/users')->withInput();
        };
        // mengolah gambar dan memindahkan filenya
        $filefoto = $this->request->getFile('foto');
        // cek apakah ada file foto yg diupload atau tidak
        // error 4 memandakan tidak ada file foto yg diupload
        if ($filefoto->getError() == 4) {
            // jika kosong maka isikan dengan nama default
            $namafoto = 'default.png';
        } else {
            // jika tidak kosong maka acak namanya dengan methode getRandomName bawaan CI dan pindahkan filenya
            $namafoto = $filefoto->getRandomName();
            $filefoto->move('images', $namafoto);
        }

        // menyimpan data dari form ke database
        $this->usersmodel->save([
            'foto' => $namafoto,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'nohp' => $this->request->getVar('nohp')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil disimpan!');
        return redirect()->to('/users');
        // dd($this->request->getVar());
    }

    public function delete($id)
    {
        // delete gambar dari server
        $carinamafoto = $this->usersmodel->find($id);
        // tambahkan kondisi jika fotonya default file fotonya jgn dihapus
        if ($carinamafoto['foto'] != 'default.png') {
            unlink('images/' . $carinamafoto['foto']);
        }

        $this->usersmodel->delete($id);
        return redirect()->to('/users');
    }

    public function editsave()
    {
        // validasi setiap inputan
        if (!$this->validate([
            'editfoto' => 'max_size[editfoto,500]|is_image[editfoto]|mime_in[editfoto,image/jpg,image/jpeg,image/png]',
            'editnama' => 'required',
            'editalamat' => 'required',
            'editnohp' => 'required|numeric'
        ])) {
            return redirect()->to('/users')->withInput();
        };

        // menanggkap id secara manual
        $id = $this->request->getVar('id');

        // mengolah gambar dan memindahkan filenya
        $editfilefoto = $this->request->getFile('editfoto');
        // cek apakah ada file foto yg diupload atau tidak
        // error 4 memandakan tidak ada file foto yg diupload
        if ($editfilefoto->getError() == 4) {
            // jika kosong maka isikan dengan nama default
            $editnamafoto = $this->request->getVar('editfotolama');
        } else {
            // jika tidak kosong maka acak namanya dengan methode getRandomName bawaan CI dan pindahkan filenya
            $editnamafoto = $editfilefoto->getRandomName();
            $editfilefoto->move('images', $editnamafoto);
            // buat kondisi jika nama fotonya default maka jangan dihapus file defaultnya
            $carinamafotoedit = $this->usersmodel->find($id);
            // tambahkan kondisi jika fotonya default file fotonya jgn dihapus
            if ($carinamafotoedit['foto'] != 'default.png') {
                unlink('images/' . $this->request->getVar('editfotolama'));
            }
        }

        // menyimpan data dari form ke database
        $this->usersmodel->update($id, [
            'foto' => $editnamafoto,
            'nama' => $this->request->getVar('editnama'),
            'alamat' => $this->request->getVar('editalamat'),
            'nohp' => $this->request->getVar('editnohp')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah!');
        return redirect()->to('/users');
        // dd($this->request->getVar());
    }
}
