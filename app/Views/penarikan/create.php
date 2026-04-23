<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Tambah Penarikan</h3>

<a href="<?= base_url('penarikan') ?>">← Kembali</a>

<form action="<?= base_url('penarikan/store') ?>" method="post">

<label>ID Peminjaman</label><br>
<select name="id_peminjaman">
<?php foreach ($peminjaman as $p): ?>
<option value="<?= $p['id_peminjaman'] ?>">
    <?= $p['id_peminjaman'] ?>
</option>
<?php endforeach; ?>
</select>

<br><br>

<label>Alamat</label><br>
<input type="text" name="alamat">

<br><br>

<label>Biaya</label><br>
<input type="number" name="biaya">

<br><br>

<label>Status</label><br>
<input type="text" name="status">

<br><br>

<label>Tanggal Ambil</label><br>
<input type="date" name="tanggal_ambil">

<br><br>

<label>Petugas</label><br>
<select name="petugas_id">
<?php foreach ($petugas as $pt): ?>
<option value="<?= $pt['id_petugas'] ?>">
    <?= $pt['nama_petugas'] ?>
</option>
<?php endforeach; ?>
</select>

<br><br>

<button type="submit">Simpan</button>

</form>
<?= $this->endSection() ?>
