<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>Data Pengembalian</h3>

<!-- TOMBOL TAMBAH DATA -->
<a href="<?= base_url('pengembalian/create') ?>" class="btn btn-primary mb-3">
    + Tambah Data Pengembalian
</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>ID Peminjaman</th>
        <th>Tanggal Kembali</th>
        <th>Denda</th>
    </tr>

    <?php if (!empty($pengembalian)) : ?>
        <?php foreach ($pengembalian as $p) : ?>
            <tr>
                <td><?= $p['id_pengembalian'] ?></td>
                <td><?= $p['id_peminjaman'] ?></td>
                <td><?= $p['tanggal_kembali'] ?? '-' ?></td>
                <td><?= $p['denda'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="4">Tidak ada data</td>
        </tr>
    <?php endif; ?>
</table>

<?= $this->endSection() ?>