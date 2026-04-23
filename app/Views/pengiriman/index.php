<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>Data Pengiriman</h3>
<a href="<?= base_url('pengiriman/create') ?>">+ Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Anggota</th>
            <th>Buku</th>
            <th>Alamat</th>
            <th>Biaya</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $no = 1; foreach ($pengiriman as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($row['nama_anggota'] ?? '-') ?></td>
            <td><?= esc($row['judul'] ?? '-') ?></td>
            <td><?= esc($row['alamat'] ?? '-') ?></td>
            <td><?= esc($row['biaya'] ?? '-') ?></td>
            <td><?= esc($row['status'] ?? '-') ?></td>
            <td><?= esc($row['tanggal'] ?? '-') ?></td>
            <td>
                <a href="<?= base_url('pengiriman/edit/'.$row['id_pengiriman']) ?>">Edit</a> |
                <a href="<?= base_url('pengiriman/delete/'.$row['id_pengiriman']) ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>