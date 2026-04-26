<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>➕ Tambah Users</h3>

<form action="<?= base_url('users/store') ?>" method="post" enctype="multipart/form-data">
    
    <label>Nama</label><br>
    <input type="text" name="nama" required>
    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" required>
    <br><br>

    <label>Username</label><br>
    <input type="text" name="username" required>
    <br><br>

    <label>Password</label><br>
    <input type="password" name="password" required>
    <br><br>

    <label>Role</label><br>
    <select name="role" required>
        <option value="anggota">Anggota</option>
        <option value="petugas">Petugas</option>
        <option value="admin">Admin</option>
    </select>
    <br><br>

    <label>Foto</label><br>
    <input type="file" name="foto">
    <br><br>

    <button type="submit">Simpan</button>
    <a href="<?= base_url('users') ?>">Kembali</a>

</form>

<?= $this->endSection() ?>