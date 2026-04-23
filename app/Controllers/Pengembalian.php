<?php

namespace App\Controllers;

use App\Models\PengembalianModel;
use App\Models\PeminjamanModel;

class Pengembalian extends BaseController
{
    public function index()
{
    $pengembalianModel = new \App\Models\PengembalianModel();

    $data['pengembalian'] = $pengembalianModel
        ->findAll();

    return view('pengembalian/index', $data);
}
    public function create($id_peminjaman = null)
{
    $model = new \App\Models\PeminjamanModel();

    $data['peminjaman'] = null;

    if ($id_peminjaman) {
        $data['peminjaman'] = $model->find($id_peminjaman);
    }

    return view('pengembalian/create', $data);
}
    public function store()
    {
        $pengembalianModel = new PengembalianModel();
        $peminjamanModel = new PeminjamanModel();

        $id_peminjaman = $this->request->getPost('id_peminjaman');

        // tanggal sekarang
        $tanggal_kembali = date('Y-m-d');

        // hitung denda (contoh sederhana)
        $lama_telat = $this->request->getPost('lama_telat'); // hari telat dari form
        $denda = $lama_telat * 1000; // contoh 1000 per hari

        $pengembalianModel->insert([
            'id_peminjaman' => $id_peminjaman,
            'tanggal_kembalian' => $tanggal_kembali,
            'denda' => $denda
        ]);

        // update status peminjaman
        $peminjamanModel->update($id_peminjaman, [
            'status' => 'dikembalikan'
        ]);

        return redirect()->to('/peminjaman');
    }
}