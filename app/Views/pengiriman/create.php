<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Tambah Data Pengiriman</h3>

<a href="<?= base_url('pengiriman') ?>">← Kembali</a>

<br><br>

<form action="<?= base_url('pengiriman/store') ?>" method="post">

    <label>Anggota</label><br>
    <select name="anggota_id" required>
        <option value="">Pilih Anggota</option>
        <?php foreach ($anggota as $a): ?>
            <option value="<?= $a['id_anggota'] ?>">
                <?= $a['nama_anggota'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <label>Buku</label><br>
    <select name="buku_id" required>
        <option value="">Pilih Buku</option>
        <?php foreach ($buku as $b): ?>
            <option value="<?= $b['id_buku'] ?>">
                <?= $b['judul'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <label>Alamat</label><br>
    <input type="text" name="alamat" required>
    <br><br>

    <label>Biaya</label><br>
    <input type="number" name="biaya" required>
    <br><br>

    <label>Status</label><br>
    <input type="text" name="status" required>
    <br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal" required>
    <br><br>

    <label>Petugas</label><br>
    <select name="petugas_id" required>
        <option value="">Pilih Petugas</option>
        <?php foreach ($petugas as $p): ?>
            <option value="<?= $p['id_petugas'] ?>">
                <?= $p['nama_petugas'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <button type="submit">Simpan</button>
    <a href="<?= base_url('pengiriman') ?>">Batal</a>

</form>
<?= $this->endSection() ?>
