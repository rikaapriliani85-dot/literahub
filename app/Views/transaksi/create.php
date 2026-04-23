<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Tambah Transaksi</h3>

<a href="<?= base_url('transaksi') ?>">← Kembali</a>

<form action="<?= base_url('transaksi/store') ?>" method="post">

<label>ID Peminjaman</label><br>
<select name="id_peminjaman">
<?php foreach ($peminjaman as $p): ?>
<option value="<?= $p['id_peminjaman'] ?>">
    <?= $p['id_peminjaman'] ?>
</option>
<?php endforeach; ?>
</select>

<br><br>

<label>Jenis</label><br>
<input type="text" name="jenis">

<br><br>

<label>Jumlah</label><br>
<input type="number" name="jumlah">

<br><br>

<label>Status</label><br>
<input type="text" name="status">

<br><br>

<label>Tanggal</label><br>
<input type="date" name="tanggal">

<br><br>

<button type="submit">Simpan</button>

</form>
<?= $this->endSection() ?>