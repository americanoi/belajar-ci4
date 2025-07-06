<?php

namespace App\Controllers;

use App\Models\DiskonModel;

class DiskonController extends BaseController
{
    public function index()
    {
        if (session()->get('role') != 'admin') {
        return redirect()->to('/')->with('error', 'Anda tidak memiliki akses');
        }
        $model = new DiskonModel();
        $data['diskon'] = $model->findAll();
        return view('v_diskon', $data);
    }

    public function create()
    {
        $tanggal = $this->request->getPost('tanggal');
        $nominal = $this->request->getPost('nominal');

        $model = new \App\Models\DiskonModel();

        $sudahAda = $model->where('tanggal', $tanggal)->first();
        if ($sudahAda) {
            return redirect()->back()->withInput()->with('error', 'Diskon untuk tanggal ini sudah ada.');
        }

        $model->insert([
            'tanggal' => $this->request->getPost('tanggal'),
            'nominal' => $this->request->getPost('nominal')
        ]);
        return redirect()->to('/diskon')->with('success', 'Diskon berhasil ditambahkan');
    }

    public function edit($id)
    {
        $model = new DiskonModel();
        $model->update($id, [
            'tanggal' => $this->request->getPost('tanggal'),
            'nominal' => $this->request->getPost('nominal')
        ]);
        return redirect()->to('/diskon')->with('success', 'Diskon diubah');
    }

    public function delete($id)
    {
        $model = new DiskonModel();
        $model->delete($id);
        return redirect()->to('/diskon')->with('success', 'Diskon dihapus');
    }
}
