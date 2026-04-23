<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Data Transaksi</h3>

<a href="<?= base_url('transaksi/create') ?>">+ Tambah Transaksi</a>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>ID Peminjaman</th>
    <th>Jenis</th>
    <th>Jumlah</th>
    <th>Status</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php $no = 1; foreach ($transaksi as $t): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $t['id_peminjaman'] ?></td>
    <td><?= $t['jenis'] ?></td>
    <td><?= $t['jumlah'] ?></td>
    <td><?= $t['status'] ?></td>
    <td><?= $t['tanggal'] ?></td>
    <td>
        <a href="<?= base_url('transaksi/edit/'.$t['id_transaksi']) ?>">Edit</a> |
        <a href="<?= base_url('transaksi/delete/'.$t['id_transaksi']) ?>">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<?= $this->endSection() ?>