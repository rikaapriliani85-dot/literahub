<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<form action="<?= base_url('rak/store') ?>" method="post">
    <input type="text" name="nama_rak" placeholder="Nama Rak"><br><br>
    <input type="text" name="lokasi" placeholder="Lokasi"><br><br>
    <button type="submit">Simpan</button>
</form>
<?= $this->endSection() ?>
