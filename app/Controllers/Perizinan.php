<?php

namespace App\Controllers;

use App\Models\PerizinanModel;
use Dompdf\Dompdf; //Dompdf adalah pustaka PHP yang memungkinkan Anda untuk mengonversi HTML dan CSS menjadi file PDF. 

class Perizinan extends BaseController
{
    //PERIZINAN
    public function form_perizinan()
    {
        return view('pages/admin/form_perizinan');
    }

    public function tabel_perizinan()
    {
        $model = new PerizinanModel();
        $data['perizinan'] = $model->findAll();
        // var_dump($data['perizinan']);
        // exit;
        return view('pages/admin/tabel_perizinan', $data);
    }
    public function tambah_perizinan()
    {
        $model = new PerizinanModel();

        $data = [
            'nama_usaha' => $this->request->getPost('nama_usaha'),
            'nama_pemilik' => $this->request->getPost('nama_pemilik'),
            'jabatan' => $this->request->getPost('jabatan'),
            'jenis_usaha' => $this->request->getPost('jenis_usaha'),
            'alamat' => $this->request->getPost('alamat'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'hasil_pemeriksaan' => $this->request->getPost('hasil_pemeriksaan'),
            'izin_dimiliki' => $this->request->getPost('izin_dimiliki'),
            'izin_belumdimiliki' => $this->request->getPost('izin_belumdimiliki'),
            'masa_berlaku' => $this->request->getPost('masa_berlaku'),
            'keterangan' => $this->request->getPost('keterangan'),
            // 'id_akun' => '0' // Assuming there's a field to capture the account ID
        ];
        $model->insert($data);
        return redirect()->to('/tabel_perizinan')->with('message', 'Data perizinan berhasil ditambahkan');


        // if () {
        //     exit;
        //     return redirect()->to('/tabel_perizinan')->with('message', 'Data perizinan berhasil ditambahkan');
        // } else {
        //     exit; 
        //     return redirect()->back()->with('errors', $model->errors());
        // }
    }
    public function edit_perizinan($id)
    {
        $model = new PerizinanModel();
        $data['perizinan'] = $model->find($id);
        // var_dump($data['perizinan']);
        // exit;
        if (!$data['perizinan']) {
            return redirect()->to('/tabel_perizinan')->with('error', 'Data perizinan tidak ditemukan');
        }
        return view('pages/admin/edit_perizinan', $data);
    }

    public function update_perizinan()
    {
        $model = new PerizinanModel();
        $id = $this->request->getPost('id');
        $data = [
            'nama_usaha' => $this->request->getPost('nama_usaha'),
            'nama_pemilik' => $this->request->getPost('nama_pemilik'),
            'jabatan' => $this->request->getPost('jabatan'),
            'jenis_usaha' => $this->request->getPost('jenis_usaha'),
            'alamat' => $this->request->getPost('alamat'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'hasil_pemeriksaan' => $this->request->getPost('hasil_pemeriksaan'),
            'izin_dimiliki' => $this->request->getPost('izin_dimiliki'),
            'izin_belumdimiliki' => $this->request->getPost('izin_belumdimiliki'),
            'masa_berlaku' => $this->request->getPost('masa_berlaku'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
        // var_dump($data);exit;
        $model->update($id, $data);
        return redirect()->to('/tabel_perizinan')->with('message', 'Data perizinan berhasil diubah');
    }

    public function delete_perizinan($id)
    {
        $model = new PerizinanModel();
        $model->delete($id);
        return redirect()->to('/tabel_perizinan')->with('message', 'Data perizinan berhasil dihapus');
    }

    public function cetak_perizinan_pdf()
    {
        $model = new PerizinanModel();
        $data['perizinan'] = $model->findAll();
        $dompdf = new \Dompdf\Dompdf();
        // var_dump($data);
        // exit;
        $dompdf->loadHtml(view('pages/admin/cetak_perizinan', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("perizinan.pdf", array("Attachment" => false));
    }
}
