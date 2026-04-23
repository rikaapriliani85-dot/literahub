<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Tambah Penulis</h2>

<form action="<?= base_url('penulis/store') ?>" method="post">
    <input type="text" name="nama_penulis" placeholder="Nama Penulis"><br><br>
    <button type="submit">Simpan</button>
</form>
<?= $this->endSection() ?>
