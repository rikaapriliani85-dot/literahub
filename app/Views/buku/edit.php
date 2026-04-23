<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>Edit Buku</h3>

<form action="<?= base_url('buku/update/' . $buku['id_buku']) ?>" method="post" enctype="multipart/form-data">

    Judul:<br>
    <input type="text" name="judul" value="<?= $buku['judul'] ?>"><br><br>

    Cover:<br>
    <input type="file" name="cover"><br><br>

    <?php if (!empty($buku['cover'])): ?>
        <img src="<?= base_url('uploads/buku/' . $buku['cover']) ?>" width="100"><br><br>
    <?php endif; ?>

    Kategori:<br>
    <select name="id_kategori">
        <?php foreach ($kategori as $k): ?>
            <option value="<?= $k['id_kategori'] ?>">
                <?= $k['nama_kategori'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Update</button>
</form>

<?= $this->endSection() ?>