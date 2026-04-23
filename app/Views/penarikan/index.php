<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Data Penarikan</h3>

<a href="<?= base_url('penarikan/create') ?>">+ Tambah Penarikan</a>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>ID Peminjaman</th>
    <th>Alamat</th>
    <th>Biaya</th>
    <th>Status</th>
    <th>Tanggal Ambil</th>
    <th>Petugas</th>
    <th>Aksi</th>
</tr>

<?php $no = 1; foreach ($penarikan as $p): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $p['id_peminjaman'] ?></td>
    <td><?= $p['alamat'] ?></td>
    <td><?= $p['biaya'] ?></td>
    <td><?= $p['status'] ?></td>
    <td><?= $p['tanggal_ambil'] ?></td>
    <td><?= $p['petugas_id'] ?></td>
    <td>
        <a href="<?= base_url('penarikan/edit/'.$p['id_penarikan']) ?>">Edit</a> |
        <a href="<?= base_url('penarikan/delete/'.$p['id_penarikan']) ?>">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?= $this->endSection() ?>