<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<p></p>
<div class="container">
    <div class="card">
        <div class="card-header">
            Contoh Negara
        </div>
        <br>
        <!-- bagian search -->
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data..." name="keyword">
                    <button class="btn btn-outline-primary" type="submit" id="submit">Cari</button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Negara</th>
                        <th scope="col">Nama Kota</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cara baca : i ditambah 10 halamnan dikali halaman sekarang -1, dengan catatan (halaman sekarang - 1, dikerjaka dahulu), angka 10 di dapat dari pagination yg ada di kontroler(jadi hati-hati jika mengubah pageination di controler jgn lupa diubah disini juga) -->
                    <?php $i = 1 + (10 * ($curentpage - 1)); ?>
                    <?php foreach ($negaradata as $ngr) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $ngr['namanegara']; ?></td>
                            <td><?= $ngr['kota']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- cara banyanya yaitu variable pertama nama tabel,pager custom yg dibuat(bisa di cek di app/Config/Pager.php) -->
            <?= $pager->links('negara', 'default_pageinationtemplate') ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>