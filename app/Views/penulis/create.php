<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
.container-box {
    max-width: 600px;
    margin: 30px auto;
    font-family: Arial;
}

.card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #2c3e50;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
    font-size: 14px;
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
}

input:focus {
    border-color: #3498db;
    outline: none;
}

.btn {
    padding: 10px 15px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-size: 14px;
}

.btn-save {
    background: #27ae60;
    color: white;
}

.btn-save:hover {
    background: #219150;
}

.btn-back {
    background: #95a5a6;
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 6px;
    margin-left: 10px;
}

.btn-back:hover {
    background: #7f8c8d;
}
</style>

<div class="container-box">
    <div class="card">

        <div class="title">➕ Tambah Penulis</div>

        <form action="<?= base_url('penulis/store') ?>" method="post">

            <div class="form-group">
                <label>Nama Penulis</label>
                <input type="text" name="nama_penulis" placeholder="Masukkan nama penulis" required>
            </div>

            <button type="submit" class="btn btn-save">💾 Simpan</button>
            <a href="<?= base_url('penulis') ?>" class="btn-back">⬅ Kembali</a>

        </form>

    </div>
</div>

<?= $this->endSection() ?>