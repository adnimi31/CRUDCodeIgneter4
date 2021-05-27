<?php

namespace App\Controllers;

use App\Models\NegaraModel;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\Validation\Rules;

class Negara extends BaseController
{
    protected $negaramodel;
    public function __construct()
    {
        $this->negaramodel = new NegaraModel();
    }
    public function index()
    {
        // session wajib untuk alert
        session();
        // $datanegara = $this->negaramodel->findAll();
        // membuat curent page agar nantinya nomonya tidak terulang 1-10 lagi, dengan ternary
        $curentpage = $this->request->getVar('page_negara') ? $this->request->getVar('page_negara') : 1;
        // bagian cari data
        $keyword = $this->request->getVar('keyword');
        // jika da yg di search, kirimkan value keyword ke method search di model negara
        if ($keyword) {
            $negara = $this->negaramodel->search($keyword);
        } else {
            $negara = $this->negaramodel;
        }
        $data = [
            'title' => 'Halaman Negara',
            'validation' => \Config\Services::validation(),
            // menyeting data yg tapil berapa, lalu parameter keduanya yaitu nama tabel
            // hati-hati dengan pageinate mau dikasih berapa, kalau disini diganti di viewnya jangan lupa diganti juga perulangan i nya
            'negaradata' => $negara->paginate(10, 'negara'),
            // pager untuk page inationya
            'pager' => $this->negaramodel->pager,
            'curentpage' => $curentpage
        ];
        return view('negara', $data);
    }
}
