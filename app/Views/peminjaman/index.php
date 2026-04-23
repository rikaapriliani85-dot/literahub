<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div style="margin-bottom: 20px; font-family: Arial, sans-serif;">
    
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
        <div>
            <h2 style="margin: 0; display: inline-block; margin-right: 15px;">Data Peminjaman</h2>
            
            <a href="<?= base_url('peminjaman/create') ?>" 
               style="text-decoration: none; padding: 8px 15px; background-color: #eea265; color: white; border-radius: 4px;">
                + Tambah Peminjaman
            </a>
        </div>

        <a href="<?= base_url('/') ?>" 
           style="text-decoration: none; padding: 8px 15px; background-color: #6c757d; color: white; border-radius: 4px;">
            ← Kembali ke Dashboard
        </a>
    </div>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th>No</th>
                <th>Anggota</th>
                <th>Buku</th>
                <th>Sampul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data_peminjaman)): ?>
                
                <?php $no = 1; foreach ($data_peminjaman as $row): ?>
                <tr>
                    <td align="center"><?= $no++; ?></td>
                    <td><?= $row['nama_anggota'] ?? '-' ?></td>
                    <td><?= $row['judul'] ?? '-' ?></td>

                    <td>
                        <?php if (!empty($row['cover'])): ?>
                            <img src="<?= base_url('uploads/buku/' . $row['cover']) ?>" width="70">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>

                    <td align="center">
                        <span style="
                            padding: 3px 8px; 
                            border-radius: 10px; 
                            font-size: 12px; 
                            color: white; 
                            background-color: <?= ($row['status'] ?? '') == 'dipinjam' ? '#ffc107' : '#28a745' ?>;">
                            <?= $row['status'] ?? '-' ?>
                        </span>
                    </td>

                    <td align="center">
                        <a href="<?= base_url('peminjaman/delete/' . $row['id_peminjaman']) ?>" 
                           onclick="return confirm('Yakin ingin menghapus data ini?')" 
                           style="color: red;">
                           Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="6" align="center">Data belum ada</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>

<?= $this->endSection() ?>