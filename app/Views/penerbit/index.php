<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>


<h2>📚 Data Penerbit</h2>

<div style="margin-bottom: 15px;">
    <a href="<?= base_url('penerbit/create') ?>" style="text-decoration: none; padding: 7px 15px; background-color: #007bff; color: white; border-radius: 4px; font-family: Arial, sans-serif;">
        + Tambah
    </a>

    <a href="<?= base_url('/') ?>" style="text-decoration: none; padding: 7px 15px; background-color: #6c757d; color: white; border-radius: 4px; margin-left: 10px; font-family: Arial, sans-serif;">
        &larr; Kembali
    </a>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
    <tr style="background-color: #f2f2f2;">
        <th>No</th>
        <th>Nama Penerbit</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($penerbit as $p): ?>
    <tr>
        <td align="center"><?= $no++ ?></td>
        <td><?= $p['nama_penerbit'] ?></td>
        <td><?= $p['alamat'] ?></td>
        <td align="center">

            <form action="<?= base_url('penerbit/delete/' . $p['id_penerbit']) ?>" method="post" style="display:inline;">
                <button type="submit"
                    onclick="return confirm('Yakin mau hapus?')"
                    style="background:none; border:none; color:#d9534f; font-weight:bold; cursor:pointer;">
                    Hapus
                </button>
            </form>

        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>