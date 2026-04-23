   <a href="#">
        <b>  PERPUS</b>
    </a><br>

    <a href="<?= base_url('/') ?>">
       RIKA
    </a><br>
        <?php if (session()->get('role') == 'admin' || session()->get('role') == 'petugas') : ?>
       <a href="<?= base_url('users') ?>">👤 Users</a><br>
        </a><br>
        <?php if (session()->get('role') == 'admin') : ?>
<a href="<?= base_url('/backup') ?>" class="btn btn-success">Backup Database</a>
<?php endif; ?>
<a href="<?= base_url('peminjaman') ?>">📖 Peminjaman</a><br>
<a href="<?= base_url('buku') ?>">📚 Buku</a><br>
<a href="<?= base_url('kategori') ?>">📂 Kategori</a><br>
<a href="<?= base_url('penerbit') ?>">🏢 Penerbit</a><br>
<a href="<?= base_url('penulis') ?>">✍️ Penulis</a><br>
<a href="<?= base_url('rak') ?>">📦 Rak Buku</a><br>
<a href="<?= base_url('penulis') ?>">✍️ Penulis</a><br>
<a href="<?= base_url('pengiriman') ?>">🚚 Pengiriman</a><br>
<a href="<?= base_url('ulasan') ?>"> Ulasan</a><br>
<a href="<?= base_url('transaksi') ?>"> Transaksi</a><br>
<a href="<?= base_url('penarikan') ?>"> Penarikan</a><br>
<a href="<?= base_url('reservasi') ?>"> Reservasi</a><br>
<a href="<?= base_url('pengaturan') ?>">Pengaturan</a><br>
<a href="<?= base_url('pengembalian') ?>">Pengembalian</a><br>
    <?php endif; ?>
        <?php $idu = session('id'); ?>
    <a href="<?= base_url('users/edit/' . session()->get('id')) ?>">⚙️ Setting</a><br>
    </a><br>
        <li>
   <a href="<?= base_url('/logout') ?>">🚪 Log Out</a><br>
    </li>
    <br>
<a href="<?= base_url('login') ?>">🔑 Masuk sebagai</a><br>
<br>
<img src="<?= base_url('uploads/users/' . session()->get('foto')) ?>" height="80" />