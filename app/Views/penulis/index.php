<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
.container-box {
    max-width: 800px;
    margin: 30px auto;
    font-family: Arial;
}

.card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.title {
    font-size: 20px;
    font-weight: bold;
    color: #2c3e50;
}

.btn {
    padding: 8px 14px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    color: white;
}

.btn-add {
    background: #3498db;
}

.btn-add:hover {
    background: #2980b9;
}

table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
    border-radius: 8px;
}

th {
    background: #3498db;
    color: white;
    padding: 10px;
    text-align: left;
}

td {
    padding: 10px;
    border-bottom: 1px solid #eee;
}

tr:hover {
    background: #f9f9f9;
}

.empty {
    text-align: center;
    padding: 15px;
    color: #888;
}
</style>

<div class="container-box">
    <div class="card">

        <div class="header">
            <div class="title">✍️ Data Penulis</div>
            <a href="<?= base_url('penulis/create') ?>" class="btn btn-add">+ Tambah</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th width="60">No</th>
                    <th>Nama Penulis</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($penulis)): ?>
                    <?php $no=1; foreach($penulis as $p): ?>
                    <tr>
                        <td style="text-align:center;"><?= $no++ ?></td>
                        <td><?= esc($p['nama_penulis']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="empty">Data penulis belum ada</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>

<?= $this->endSection() ?>