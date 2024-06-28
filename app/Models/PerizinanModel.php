<?php

namespace App\Models;

use CodeIgniter\Model;

class PerizinanModel extends Model
{
    protected $table = 'perizinan';
    protected $primaryKey = 'id_perizinan';
    protected $allowedFields = [
        'nama_usaha', 'nama_pemilik', 'jabatan', 'jenis_usaha', 'alamat',
        'kecamatan', 'hasil_pemeriksaan', 'izin_dimiliki', 'masa_berlaku',
        'izin_belumdimiliki', 'keterangan'
    ];

    //public function getAllPerizinan()
    // {
    //     return $this->findAll();
    // }
}
