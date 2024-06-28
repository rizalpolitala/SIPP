<?php

namespace App\Controllers;

use App\Models\M_pendaftaran;
use App\Models\M_akun;
use App\Models\ModelPendaftaran;

class Pendaftaran extends BaseController
{

    protected $pendaftaran;
    protected $akun;
    public $ModelPendaftaran;

    public function __construct()
    {
        $this->pendaftaran = new ModelPendaftaran();
        $this->ModelPendaftaran = new \App\Models\ModelPendaftaran();
        $this->akun = new M_akun();
    }

    public function index()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->findAll(),
            'judul' => 'Data Pendaftaran'
        ];

        return view('admin/pendaftaran/pendaftaran', $data);
    }

    public function tambah()
    {

        $data = [
            // 'akun' => $this->akun->getAkun(),
            'pendaftaran' => $this->pendaftaran->findAll(),
            'judul' => 'Data Tambah Pendaftaran'
        ];

        return view('admin/pendaftaran/form_pendaftaran', $data);
    }

    public function simpan()
    {
        $data = [
            'id_akun' => session('id_akun'),
            'status' => $this->request->getPost('status'),
            'tahun'      => $this->request->getPost('tahun'),
            'nama_calon_peserta_didik'  => $this->request->getPost('nama_calon_peserta_didik'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'alamat'  => $this->request->getPost('alamat'),
            'nama_ayah'  => $this->request->getPost('nama_ayah'),
            'nama_ibu'  => $this->request->getPost('nama_ibu'),
            'pekerjaan_ayah'  => $this->request->getPost('pekerjaan_ayah'),
            'pekerjaan_ibu'  => $this->request->getPost('pekerjaan_ibu'),
            'no_telepon_ayah'  => $this->request->getPost('telepon_ayah'),
            'no_telepon_ibu'  => $this->request->getPost('telepon_ibu'),
            'agama'  => $this->request->getPost('agama'),

        ];
        $this->ModelPendaftaran->query("SET foreign_key_checks = 0");
        $this->ModelPendaftaran->insert($data);
        $this->ModelPendaftaran->query("SET foreign_key_checks = 1");
        return redirect()->to(base_url('pendaftaran'))->with('pesan', 'Data Berhasil Ditambah !');
        die;
        $validate = $this->validate([
            'nama_calon_peserta_didik' => [
                'label' => 'Nama Calon Peserta Didik',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'tanggal_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],

            'jenis_kelamin' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'nama_ayah' => [
                'label' => 'Nama Ayah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'nama_ibu' => [
                'label' => 'Nama Ibu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'pekerjaan_ayah' => [
                'label' => 'Pekerjaan Ayah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'pekerjaan_ibu' => [
                'label' => 'Pekerjaan Ibu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'no_telepon_ayah' => [
                'label' => 'No Telepon Ayah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'no_telepon_ibu' => [
                'label' => 'Pekerjaan Ibu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            'agama' => [
                'label' => 'Agama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ]);


        if ($validate) {
            return redirect()->to('tambah_pendaftaran')->with('pesan', 'Data Berhasil Ditambah !');
        } else {
            return redirect()->to('tambah_pendaftaran')->with('error', 'Data Gagal Ditambah !');
        }
    }
    public function edit(int $id)
    {
        $pendaftaran = $this->ModelPendaftaran->find($id);
        $data = [
            'id_akun' => $pendaftaran['id_akun'],
            'status'  => $pendaftaran['status'],
            'tahun'  => $pendaftaran['tahun'],
            'nama_calon_peserta_didik'  => $pendaftaran['nama_calon_peserta_didik'],
            'tempat_lahir'  => $pendaftaran['tempat_lahir'],
            'tanggal_lahir'  => $pendaftaran['tanggal_lahir'],
            'jenis_kelamin'  => $pendaftaran['jenis_kelamin'],
            'alamat'  => $pendaftaran['alamat'],
            'nama_ayah'  => $pendaftaran['nama_ayah'],
            'nama_ibu'  => $pendaftaran['nama_ibu'],
            'pekerjaan_ayah'  => $pendaftaran['pekerjaan_ayah'],
            'pekerjaan_ibu'  => $pendaftaran['pekerjaan_ibu'],
            'no_telepon_ayah'  => $pendaftaran['no_telepon_ayah'],
            'no_telepon_ibu'  => $pendaftaran['no_telepon_ibu'],
            'agama'  => $pendaftaran['agama'],
        ];
        $data = [
            //'akun' => $this->akun->findAll(),
            'pendaftaran' => $this->pendaftaran->find($id),
            'judul' => 'Data Edit Pendaftaran',
            'data' => $data
        ];
        return view('admin/pendaftaran/form_edit_pendaftaran', $data);
    }

    public function simpanedit($id)
    {
        $data = [
            'id_akun' => $this->request->getPost('id_akun'),
            'status' => $this->request->getPost('status'),
            'tahun'      => $this->request->getPost('tahun'),
            'nama_calon_peserta_didik'  => $this->request->getPost('nama_calon_peserta_didik'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'alamat'  => $this->request->getPost('alamat'),
            'nama_ayah'  => $this->request->getPost('nama_ayah'),
            'nama_ibu'  => $this->request->getPost('nama_ibu'),
            'pekerjaan_ayah'  => $this->request->getPost('pekerjaan_ayah'),
            'pekerjaan_ibu'  => $this->request->getPost('pekerjaan_ibu'),
            'no_telepon_ayah'  => $this->request->getPost('no_telepon_ayah'),
            'no_telepon_ibu'  => $this->request->getPost('no_telepon_ibu'),
            'agama'  => $this->request->getPost('agama'),

        ];
        $this->ModelPendaftaran->where('id_pendaftaran', $id)->set($data)->update();
        return redirect()->to(base_url('pendaftaran'))->with('pesan', 'Data Berhasil Diedit !');
        die;
    }

    public function detail($id)
    {
        $pendaftaran = $this->ModelPendaftaran->find($id);
        $detailData = [
            'id_akun' => $pendaftaran['id_akun'],
            'status'  => $pendaftaran['status'],
            'tahun'  => $pendaftaran['tahun'],
            'nama_calon_peserta_didik'  => $pendaftaran['nama_calon_peserta_didik'],
            'tempat_lahir'  => $pendaftaran['tempat_lahir'],
            'tanggal_lahir'  => $pendaftaran['tanggal_lahir'],
            'jenis_kelamin'  => $pendaftaran['jenis_kelamin'],
            'alamat'  => $pendaftaran['alamat'],
            'nama_ayah'  => $pendaftaran['nama_ayah'],
            'nama_ibu'  => $pendaftaran['nama_ibu'],
            'pekerjaan_ayah'  => $pendaftaran['pekerjaan_ayah'],
            'pekerjaan_ibu'  => $pendaftaran['pekerjaan_ibu'],
            'no_telepon_ayah'  => $pendaftaran['no_telepon_ayah'],
            'no_telepon_ibu'  => $pendaftaran['no_telepon_ibu'],
            'agama'  => $pendaftaran['agama'],
        ];
        $data = [
            'akun' => $this->akun->findAll(),
            'pendaftaran' => $this->pendaftaran->findAll(),
            'judul' => 'Data Edit Pendaftaran',
            'data' => $detailData
        ];
        return view('admin/pendaftaran/detail_pendaftaran', $data);
    }

    public function hapus($id)
    {
        $this->ModelPendaftaran->where('id_pendaftaran', $id)->delete();
        return redirect()->to(base_url('pendaftaran'))->with('pesan', 'Data Berhasil Dihapus !');
    }
}
