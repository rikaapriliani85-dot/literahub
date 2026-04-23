<?php

namespace App\Controllers;

class Rak extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data['rak'] = $this->db->table('rak')->get()->getResultArray();
        return view('rak/index', $data);
    }

    public function delete($id)
    {
        $this->db->table('rak')
            ->where('id_rak', $id)
            ->delete();

        return redirect()->to('/rak');
    }
   public function hapus($id)
{
    $db = \Config\Database::connect();
    $db->table('rak')->delete(['id_rak' => $id]);

    return redirect()->to('/rak');
}
}