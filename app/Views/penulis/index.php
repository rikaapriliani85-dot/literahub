<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Data Penulis</h2>

<div style="margin-bottom: 15px;">
    <a href="<?= base_url('penulis/create') ?>" style="text-decoration: none; padding: 5px 10px; background-color: #28a745; color: white; border-radius: 3px;">+ Tambah</a>
    
    <a href="<?= base_url('/') ?>" style="text-decoration: none; padding: 5px 10px; background-color: #6c757d; color: white; border-radius: 3px; margin-left: 10px;">
        &larr; Kembali
    </a>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 50%;">
    <tr style="background-color: #f2f2f2;">
        <th>No</th>
        <th>Nama Penulis</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($penulis as $p): ?>
    <tr>
        <td align="center"><?= $no++ ?></td>
        <td><?= $p['nama_penulis'] ?></td>
        <td align="center">
            <a href="<?= base_url('penulis/delete/'.$p['id_penulis']) ?>"
               onclick="return confirm('Yakin mau hapus?')"
               style="color: red; text-decoration: none;">
               Hapus
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>