<?php

namespace App\Controllers;

class Kategori extends BaseController
{
   public function index()
{
    $db = \Config\Database::connect();

    $data['kategori'] = $db->table('kategori')->get()->getResultArray();

    return view('kategori/index', $data);
}

public function create()
{
    return view('kategori/create');
}
public function store()
{
    $db = \Config\Database::connect();

    $db->table('kategori')->insert([
        'nama_kategori' => $this->request->getPost('nama_kategori')
    ]);

    return redirect()->to('/kategori');
}
public function delete($id)
{
    $db = \Config\Database::connect();

    $db->table('kategori')->delete([
        'id_kategori' => $id
    ]);

    return redirect()->to('/kategori');
}
}