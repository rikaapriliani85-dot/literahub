<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Tambah Penerbit</h2>

<form action="<?= base_url('penerbit/store') ?>" method="post">
    <input type="text" name="nama_penerbit" placeholder="Nama Penerbit"><br><br>
    <input type="text" name="alamat" placeholder="Alamat"><br><br>
    <button type="submit">Simpan</button>
</form>
<?= $this->endSection() ?>
