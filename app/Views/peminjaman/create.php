<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Tambah Peminjaman</h5>
        </div>

        <div class="card-body">
            <form action="<?= base_url('peminjaman/store') ?>" method="POST" enctype="multipart/form-data">

                <!-- Anggota -->
                <div class="mb-3">
                    <label class="form-label">Anggota</label>
                    <select name="id_anggota" class="form-select" required>
                        <option value="">-- Pilih Anggota --</option>
                        <?php foreach ($anggota as $a): ?>
                            <option value="<?= $a['id_anggota'] ?>">
                                <?= $a['nama_anggota'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Petugas -->
                <div class="mb-3">
                    <label class="form-label">Petugas</label>
                    <select name="id_petugas" class="form-select" required>
                        <option value="">-- Pilih Petugas --</option>
                        <?php foreach ($petugas as $p): ?>
                            <option value="<?= $p['id_petugas'] ?>">
                                <?= $p['nama_petugas'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Buku -->
                <div class="mb-3">
                    <label class="form-label">Buku</label>
                    <select name="id_buku[]" id="pilihBuku" class="form-select" onchange="tampilkanGambar()" required>
                        <option value="">-- Pilih Buku --</option>
                        <?php foreach ($buku as $b): ?>
                            <option value="<?= $b['id_buku']; ?>" data-gambar="<?= $b['cover']; ?>">
                                <?= $b['judul']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Jumlah -->
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" name="jumlah[]" class="form-control" required>
                </div>

                <!-- Upload -->
                <div class="mb-3">
                    <label class="form-label">Upload Bukti (Opsional)</label>
                    <input type="file" name="sampul" class="form-control" accept="image/*">
                </div>

                <!-- Tanggal -->
                <div class="row">
                    <div class="col-md-6">
                        <label>Tanggal Pinjam</label>
                        <input type="date" name="tanggal_pinjam" class="form-control" value="<?= date('Y-m-d') ?>">
                    </div>

                    <div class="col-md-6">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>
                </div>

                <!-- Preview -->
                <div class="mt-3 text-center">
                    <label>Preview Buku</label><br>
                    <img id="gambarBuku" 
                         src="<?= base_url('uploads/buku/no-image.png'); ?>" 
                         width="120">
                </div>

                <hr>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?= base_url('peminjaman') ?>" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>

<script>
function tampilkanGambar() {
    const select = document.getElementById('pilihBuku');
    const img = document.getElementById('gambarBuku');

    const selected = select.options[select.selectedIndex];
    const gambar = selected.getAttribute('data-gambar');

    const path = "<?= base_url('uploads/buku'); ?>/";

    if (gambar) {
        img.src = path + gambar;
    } else {
        img.src = path + "no-image.png";
    }
}
</script>

<?= $this->endSection() ?>