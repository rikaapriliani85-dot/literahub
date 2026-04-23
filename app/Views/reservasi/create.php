<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Tambah Reservasi</h3>

<a href="<?= base_url('reservasi') ?>">← Kembali</a>

<form action="<?= base_url('reservasi/store') ?>" method="post">

<label>Anggota</label><br>
<select name="id_anggota">
<?php foreach ($anggota as $a): ?>
<option value="<?= $a['id_anggota'] ?>"><?= $a['nama_anggota'] ?></option>
<?php endforeach; ?>
</select>

<br><br>

<label>Buku</label><br>
<select name="id_buku">
<?php foreach ($buku as $b): ?>
<option value="<?= $b['id_buku'] ?>"><?= $b['judul'] ?></option>
<?php endforeach; ?>
</select>

<br><br>

<label>Tanggal Reservasi</label><br>
<input type="date" name="tanggal_reservasi">

<br><br>

<label>Status</label><br>
<input type="text" name="status">

<br><br>

<button type="submit">Simpan</button>

</form>
<?= $this->endSection() ?>
