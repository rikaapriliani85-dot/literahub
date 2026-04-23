<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use App\Models\DetailPeminjamanModel;

class Peminjaman extends BaseController
{
   public function index()
{
    $db = db_connect();

    $data['data_peminjaman'] = $db->table('peminjaman')
        ->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota', 'left')
        ->join('detail_peminjaman', 'detail_peminjaman.id_peminjaman = peminjaman.id_peminjaman', 'left')
        ->join('buku', 'buku.id_buku = detail_peminjaman.id_buku', 'left')
        ->select('peminjaman.*, anggota.nama_anggota, buku.judul, buku.cover')
        ->get()
        ->getResultArray();

    return view('peminjaman/index', $data);
}
    public function create()
    {
        $db = db_connect();

        $data['buku'] = $db->table('buku')->get()->getResultArray();
        $data['anggota'] = $db->table('anggota')->get()->getResultArray();
        $data['petugas'] = $db->table('petugas')->get()->getResultArray();

        return view('peminjaman/create', $data);
    }

 public function store()
{
    $db = db_connect();

    $peminjamanModel = new \App\Models\PeminjamanModel();
    $detailModel = new \App\Models\DetailPeminjamanModel();

    // 1. simpan peminjaman
    $peminjamanModel->insert([
        'id_anggota' => $this->request->getPost('id_anggota'),
        'tanggal_pinjam' => date('Y-m-d'),
        'status' => 'dipinjam'
    ]);

    $id_peminjaman = $peminjamanModel->insertID();

    // 2. ambil data form
    $id_buku = $this->request->getPost('id_buku');
    $jumlah  = $this->request->getPost('jumlah');

    // 🔥 FIX penting
    if (!is_array($id_buku)) {
        $id_buku = [$id_buku];
    }

    if (!is_array($jumlah)) {
        $jumlah = [$jumlah];
    }

    // 3. simpan detail
    foreach ($id_buku as $i => $buku) {
        $detailModel->insert([
            'id_peminjaman' => $id_peminjaman,
            'id_buku' => $buku,
            'jumlah' => $jumlah[$i] ?? 1
        ]);
    }

    return redirect()->to('/peminjaman');
}
public function delete($id)
{
    $db = db_connect();

    // hapus detail dulu (penting)
    $db->table('detail_peminjaman')
        ->where('id_peminjaman', $id)
        ->delete();

    // hapus peminjaman
    $db->table('peminjaman')
        ->where('id_peminjaman', $id)
        ->delete();

    return redirect()->to('/peminjaman')->with('success', 'Data berhasil dihapus');
}
}