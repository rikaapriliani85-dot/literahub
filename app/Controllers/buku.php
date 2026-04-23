<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

   public function create()
{
    $db = db_connect();

    $data['kategori'] = $db->table('kategori')->get()->getResultArray();
    $data['penulis']  = $db->table('penulis')->get()->getResultArray();
    $data['penerbit'] = $db->table('penerbit')->get()->getResultArray();
    $data['rak']      = $db->table('rak_buku')->get()->getResultArray(); // INI WAJIB

    return view('buku/create', $data);
}

    public function store()
    {
        $cover = $this->request->getFile('cover');
        $namaCover = null;

        if ($cover && $cover->isValid() && !$cover->hasMoved()) {
            $namaCover = $cover->getRandomName();
            $cover->move('uploads/buku', $namaCover);
        }

        $this->bukuModel->save([
            'judul' => $this->request->getPost('judul'),
            'cover' => $namaCover
        ]);

        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data berhasil dihapus');
    }
    public function edit($id)
{
    $db = db_connect();

    $data['buku'] = $this->bukuModel->find($id);

    if (!$data['buku']) {
        return redirect()->to('/buku');
    }

    // ambil data tambahan untuk dropdown
    $data['kategori'] = $db->table('kategori')->get()->getResultArray();
    $data['penulis'] = $db->table('penulis')->get()->getResultArray();
    $data['penerbit'] = $db->table('penerbit')->get()->getResultArray();

    return view('buku/edit', $data);
}
public function update($id)
{
    $this->bukuModel->update($id, [
        'judul' => $this->request->getPost('judul'),
        'id_kategori' => $this->request->getPost('id_kategori'),
        'id_penulis' => $this->request->getPost('id_penulis'),
        'id_penerbit' => $this->request->getPost('id_penerbit'),
        'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        'jumlah' => $this->request->getPost('jumlah'),
        'tersedia' => $this->request->getPost('tersedia'),
        'deskripsi' => $this->request->getPost('deskripsi')
    ]);

    return redirect()->to('/buku')->with('success', 'Data berhasil diupdate');
}
}