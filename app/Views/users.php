<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<p></p>
<div class="container">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <center>
                <h3>Halaman Contoh CRUD</h3>
            </center>
        </div>
        <br>
        <!-- penampil error -->
        <?= $validation->listErrors(); ?>
        <div class="container">
            <div class="col-md3">
                <button id="tambahdata" class="btn btn-primary">Tambah Data</button>
            </div>
            <p></p>
            <div id="formtambahdata" class="card">
                <div class="card-body">
                    <center>
                        <h4>Form Tambah Data Users</h4>
                    </center>
                    <form action="/users/save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <label for="foto">Foto</label>
                        <div class="custom-file">
                            <di class="col">
                                <div class="col-md-3">
                                    <center>
                                        <img src="images/default.png" alt="" class="fotopreview">
                                        <p>Preview</p>
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewimage();">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
                                </div>
                            </di>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No HP</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nohp')) ? 'is-invalid' : ''; ?>" id="nohp" name="nohp" value="<?= old('nohp'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nohp'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <p></p>
        </div>
        <!-- bagian search -->
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data..." name="keyword">
                    <button class="btn btn-outline-dark" type="submit" id="submit">Cari</button>
                </div>
            </form>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table id="tabelhdata" class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Photos</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $usr) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/images/<?= $usr['foto']; ?>" class="foto" alt=""></td>
                                <td><?= $usr['nama']; ?></td>
                                <td><?= $usr['alamat']; ?></td>
                                <td><?= $usr['nohp']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning" id="editdatabtn" data-toggle="modal" data-editid="<?= $usr['id']; ?>" data-editfotolama="<?= $usr['foto']; ?>" data-editfoto="/images/<?= $usr['foto']; ?>" data-editnama="<?= $usr['nama']; ?>" data-editalamat="<?= $usr['alamat']; ?>" data-editnohp="<?= $usr['nohp']; ?>" data-target="#editdata">
                                        Edit
                                    </button>
                                    <!-- menyamarkan url users/delete/id menjadi users/id -->
                                    <form action="/users/<?= $usr['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <!-- membuat method spufing sehingga methode nya seolah-olah bukan post tapi delete -->
                                        <input type="text" name="_method" value="DELETE" hidden>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- cara banyanya yaitu variable pertama nama tabel,pager custom yg dibuat(bisa di cek di app/Config/Pager.php) -->
                <?= $pager->links('users', 'default_pageinationtemplate') ?>
            </div>
        </div>
    </div>
</div>

<!-- modal edit -->
<!-- Modal -->
<div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/users/editsave" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" class="form-control " id="editid" name="id" hidden>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " id="editfotolama" name="editfotolama" hidden>
                    </div>
                    <center>
                        <img src="" id="my_image" class="editfotopreview" alt="">
                        <br>
                        <label for="foto">Foto Sebelumnya/Preview</label>
                    </center>
                    <label for="foto">Foto</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="editfoto" name="editfoto" onchange="previeweditimage();">
                        <label class="custom-file-label" id="editlabel" for="validatedCustomFile">Choose file...</label>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control " id="editnama" name="editnama" required>

                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control " id="editalamat" name="editalamat" required>
                    </div>
                    <div class="form-group">
                        <label for="nohp">No HP</label>
                        <input type="text" class="form-control " id="editnohp" name="editnohp" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal edit -->

<!-- script untuk hide and show form tambah -->
<script>
    const targetDiv = document.getElementById("formtambahdata");
    const btn = document.getElementById("tambahdata");
    targetDiv.style.display = 'none';
    btn.onclick = function() {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };
</script>
<!-- script untuk preview image yg di puload (insert data) -->
<script>
    function previewimage() {
        const foto = document.querySelector('#foto');
        const fotolabel = document.querySelector('.custom-file-label');
        const fotopreview = document.querySelector('.fotopreview');
        // menganti tulisan chose file manjadi nama file
        fotolabel.textContent = foto.files[0].name;

        const filefoto = new FileReader();
        filefoto.readAsDataURL(foto.files[0]);
        filefoto.onload = function(e) {
            fotopreview.src = e.target.result;
        }

    };
</script>
<!-- script untuk preview image yg di puload (update data) -->
<script>
    function previeweditimage() {
        const editfoto = document.querySelector('#editfoto');
        const editfotolabel = document.querySelector('#editlabel');
        const editfotopreview = document.querySelector('.editfotopreview');
        // menganti tulisan chose file manjadi nama file
        editfotolabel.textContent = editfoto.files[0].name;

        const fileeditfoto = new FileReader();
        fileeditfoto.readAsDataURL(editfoto.files[0]);
        fileeditfoto.onload = function(e) {
            editfotopreview.src = e.target.result;
        }

    };
</script>
<!-- script untuk menampilkan data yg di klik ke modal -->
<script>
    $(document).on('click', '#editdatabtn', function() {
        $('#editid').val($(this).data('editid'));
        $('#editnama').val($(this).data('editnama'));
        $('#editalamat').val($(this).data('editalamat'));
        $('#editnohp').val($(this).data('editnohp'));
        $('#editfotolama').val($(this).data('editfotolama'));
        // pasing data gambar
        $('#my_image').attr('src', $(this).data('editfoto'));
    });
</script>

<?= $this->endSection(); ?>