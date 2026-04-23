<?php

namespace App\Controllers;

use Config\Database;

class Pengiriman extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

   public function index()
{
    $data['pengiriman'] = $this->db->table('pengiriman')
        ->get()
        ->getResultArray();

    return view('pengiriman/index', $data);
}

    public function create()
{
    $data['anggota'] = $this->db->table('anggota')->get()->getResultArray();
    $data['buku'] = $this->db->table('buku')->get()->getResultArray();
    $data['petugas'] = $this->db->table('petugas')->get()->getResultArray();

    return view('pengiriman/create', $data);
}

public function store()
{
    $this->db->table('pengiriman')->insert([
        'anggota_id' => $this->request->getPost('anggota_id'),
        'buku_id'    => $this->request->getPost('buku_id'),
        'alamat'     => $this->request->getPost('alamat'),
        'biaya'      => $this->request->getPost('biaya'),
        'status'     => $this->request->getPost('status'),
        'tanggal'    => $this->request->getPost('tanggal'),
        'petugas_id' => $this->request->getPost('petugas_id'),
    ]);

    // 🔥 kembali ke halaman list
    return redirect()->to('/pengiriman');
}
    public function edit($id)
    {
        $data['pengiriman'] = $this->db->table('pengiriman')
            ->where('id', $id)
            ->get()
            ->getRowArray();

        return view('pengiriman/edit', $data);
    }

    public function update($id)
    {
        $this->db->table('pengiriman')
            ->where('id', $id)
            ->update([
                'anggota_id' => $this->request->getPost('anggota_id'),
                'buku_id'    => $this->request->getPost('buku_id'),
                'alamat'     => $this->request->getPost('alamat'),
                'biaya'      => $this->request->getPost('biaya'),
                'status'     => $this->request->getPost('status'),
                'tanggal'    => $this->request->getPost('tanggal'),
                'petugas_id' => $this->request->getPost('petugas_id'),
            ]);

        return redirect()->to('/pengiriman');
    }

    public function delete($id)
    {
        $this->db->table('pengiriman')
            ->where('id', $id)
            ->delete();

        return redirect()->to('/pengiriman');
    }
}