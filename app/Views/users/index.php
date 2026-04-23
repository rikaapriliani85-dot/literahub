<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div style="font-family: Arial;">

    <h3>Data Users</h3>

    <!-- FORM PENCARIAN & FILTER -->
    <form method="get" action="" style="margin-bottom: 10px;">

        <input type="text" name="keyword"
               placeholder="Cari nama..."
               value="<?= $_GET['keyword'] ?? '' ?>">

        <select name="role">
            <option value="">-- Semua Role --</option>
            <option value="admin" <?= (($_GET['role'] ?? '') == 'admin') ? 'selected' : '' ?>>Admin</option>
            <option value="petugas" <?= (($_GET['role'] ?? '') == 'petugas') ? 'selected' : '' ?>>Petugas</option>
            <option value="anggota" <?= (($_GET['role'] ?? '') == 'anggota') ? 'selected' : '' ?>>Anggota</option>
        </select>

        <button type="submit">Cari</button>

        <a href="<?= base_url('users') ?>">Reset</a>

        <a href="<?= base_url('users/print?' . http_build_query($_GET)) ?>" target="_blank">
            Print
        </a>

    </form>

    <table border="1" cellpadding="8" cellspacing="0"
           style="width:100%; border-collapse: collapse;">

        <thead style="background:#f2f2f2;">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php if (!empty($users)): ?>

            <?php $no = 1; ?>

            <?php foreach ($users as $u): ?>

                <?php
                    // AMANKAN ID (biar tidak error lagi)
                    $id = $u['id_user'] ?? $u['id'];
                ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $u['nama'] ?></td>
                    <td><?= $u['email'] ?></td>
                    <td><?= $u['username'] ?></td>
                    <td><?= ucfirst($u['role']) ?></td>

                    <td>
                        <?php if (!empty($u['foto'])): ?>
                            <img src="<?= base_url('uploads/users/' . $u['foto']) ?>" width="50">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>

                    <td>
                        <a href="<?= base_url('users/detail/' . $id) ?>">Detail</a> |
                        <a href="<?= base_url('users/edit/' . $id) ?>">Edit</a> |
                        <a href="<?= base_url('users/wa/' . $id) ?>">Kirim WA</a> |
                        <a href="<?= base_url('users/delete/' . $id) ?>"
                           onclick="return confirm('Hapus user ini?')">
                           Hapus
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        <?php else: ?>
            <tr>
                <td colspan="7" style="text-align:center;">
                    Belum ada data user
                </td>
            </tr>
        <?php endif; ?>
        </tbody>

    </table>

</div>

<?= $this->endSection() ?>