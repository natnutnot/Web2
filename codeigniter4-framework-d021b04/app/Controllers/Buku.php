<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
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
        return view('buku/create');
    }

    public function store()
    {
        $rules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->save($this->request->getPost());
        return redirect()->to('/buku')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $this->bukuModel->update($id, $this->request->getPost());
        return redirect()->to('/buku')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data berhasil dihapus!');
    }
}
