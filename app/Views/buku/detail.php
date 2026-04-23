<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>Detail Buku</h3>

<table border="1">
    <tr>
        <td>ID</td>
        <td><?= $buku['id_buku'] ?></td>
    </tr>
    <tr>
        <td>Judul</td>
        <td><?= $buku['judul'] ?></td>
    </tr>
    <tr>
      <h2><?= $buku['judul'] ?></h2>

<img src="<?= base_url('uploads/buku/' . $buku['cover']) ?>" width="100">
<p>Penulis: <?= $buku['nama_penulis'] ?></p>
<p>Penerbit: <?= $buku['nama_penerbit'] ?></p>
    </tr>
    <tr>
        <td>Kategori</td>
        <td><?= $buku['nama_kategori'] ?></td>
    </tr>
    <tr>
        <td>Penulis</td>
        <td><?= $buku['nama_penulis'] ?></td>
    </tr>
    <tr>
        <td>Penerbit</td>
        <td><?= $buku['nama_penerbit'] ?></td>
    </tr>
    <tr>
        <td>Rak</td>
        <td><?= $buku['nama_rak'] ?> - <?= $buku['lokasi'] ?></td>
    </tr>
    <tr>
        <td>Tahun</td>
        <td><?= $buku['tahun_terbit'] ?></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td><?= $buku['jumlah'] ?></td>
    </tr>
    <tr>
        <td>Tersedia</td>
        <td><?= $buku['tersedia'] ?></td>
    </tr>
    <tr>
    <td>Deskripsi</td>
    <td><?= $buku['deskripsi'] ?? '-' ?></td>
</tr>
</table>

<br>

<a href="<?= base_url('buku') ?>">Kembali</a>
<a href="<?= base_url('buku/wa/' . $buku['id_buku']) ?>" target="_blank">Kirim WA</a>
<a href="<?= base_url('buku/detail/1') ?>">

<?= $this->endSection() ?>