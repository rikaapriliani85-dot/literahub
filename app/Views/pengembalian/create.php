<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>Form Pengembalian</h3>

<form action="<?= base_url('pengembalian/store') ?>" method="post">

    <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?? '' ?>">

    <p><b>Anggota:</b> <?= $peminjaman['id_anggota'] ?? '-' ?></p>
    <p><b>Buku:</b> <?= $peminjaman['id_buku'] ?? '-' ?></p>

    <!-- DATA TAMBAHAN -->
    <label>Tanggal Kembali</label><br>
    <input type="date" name="tanggal_kembali" required><br><br>

    <label>Lama Telat (hari)</label><br>
    <input type="number" name="lama_telat" value="0"><br><br>

    <button type="submit">Simpan Pengembalian</button>

</form>

<?= $this->endSection() ?>