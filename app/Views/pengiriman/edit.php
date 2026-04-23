<h3>Edit Pengiriman</h3>

<form action="<?= base_url('pengiriman/update/'.$pengiriman['id_pengiriman']) ?>" method="post">

    <input type="text" name="alamat" value="<?= $pengiriman['alamat'] ?>"><br><br>

    <input type="number" name="biaya" value="<?= $pengiriman['biaya'] ?>"><br><br>

    <select name="status">
        <option value="dikirim" <?= $pengiriman['status']=='dikirim'?'selected':'' ?>>Dikirim</option>
        <option value="sampai" <?= $pengiriman['status']=='sampai'?'selected':'' ?>>Sampai</option>
    </select><br><br>

    <input type="date" name="tanggal_kirim" value="<?= $pengiriman['tanggal_kirim'] ?>"><br><br>

    <input type="text" name="petugas" value="<?= $pengiriman['petugas'] ?>"><br><br>

    <button type="submit">Update</button>

</form>