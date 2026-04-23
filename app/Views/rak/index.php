<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Data Rak</h2>

<div style="margin-bottom: 15px;">
    <a href="<?= base_url('rak/create') ?>" style="text-decoration: none; padding: 6px 12px; background-color: #007bff; color: white; border-radius: 4px;">+ Tambah</a>

    <a href="<?= base_url('/') ?>" style="text-decoration: none; padding: 6px 12px; background-color: #6c757d; color: white; border-radius: 4px; margin-left: 10px;">
        &larr; Kembali
    </a>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 60%;">
    <tr style="background-color: #f2f2f2;">
        <th>No</th>
        <th>Nama Rak</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($rak as $r): ?>
    <tr>
        <td align="center"><?= $no++ ?></td>
        <td><?= $r['nama_rak'] ?></td>
        <td><?= $r['lokasi'] ?></td>
        <td align="center">
            <a href="<?= base_url('rak/delete/'.$r['id_rak']) ?>"
               onclick="return confirm('Yakin mau hapus?')"
               style="color: #d9534f; text-decoration: none;">
               Hapus
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>