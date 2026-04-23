<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Data Reservasi</h3>

<a href="<?= base_url('reservasi/create') ?>">+ Tambah Reservasi</a>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>Anggota</th>
    <th>Buku</th>
    <th>Tanggal Reservasi</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php $no = 1; foreach ($reservasi as $r): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $r['nama_anggota'] ?></td>
    <td><?= $r['judul'] ?></td>
    <td><?= $r['tanggal_reservasi'] ?></td>
    <td><?= $r['status'] ?></td>
    <td>
        <a href="<?= base_url('reservasi/edit/'.$r['id_reservasi']) ?>">Edit</a> |
        <a href="<?= base_url('reservasi/delete/'.$r['id_reservasi']) ?>">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<?= $this->endSection() ?>