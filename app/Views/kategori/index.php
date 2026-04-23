<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<nav style="background: #333; padding: 10px; margin-bottom: 20px;">
    <a href="<?= base_url('/') ?>" style="color: white; margin-right: 15px; text-decoration: none;">Home</a>
    <a href="<?= base_url('peminjaman') ?>" style="color: white; margin-right: 15px; text-decoration: none;">Peminjaman</a>
    <a href="<?= base_url('kategori') ?>" style="color: white; font-weight: bold; text-decoration: none;">Data Kategori</a>
</nav>

<h2>Data Kategori</h2>

<div style="margin-bottom: 15px;">
    <a href="<?= base_url('/') ?>" style="
        display: inline-block;
        text-decoration: none; 
        padding: 8px 15px; 
        background-color: #e7e7e7; 
        color: black; 
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        font-family: Arial, sans-serif;
    ">
        &larr; Kembali ke Dashboard
    </a>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
    <tr style="background-color: #f2f2f2;">
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($kategori as $k): ?>
    <tr>
        <td align="center"><?= $k['id_kategori'] ?></td>
        <td><?= $k['nama_kategori'] ?></td>
        <td align="center">
            <a href="<?= base_url('kategori/delete/'.$k['id_kategori']) ?>" 
               onclick="return confirm('Yakin mau hapus?')"
               style="color: red; text-decoration: none;">
               Hapus
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>