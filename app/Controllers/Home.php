<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('pages/admin/dashboard');
    }

    public function dashboard()
    {
        echo "dashboard";
    }

    public function form_pelanggaran()
    {
        return view('pages/admin/form_pelanggaran');
    }

    public function tabel_pelanggaran()
    {
        return view('pages/admin/tabel_pelanggaran');
    }

    public function detail_pelanggaran()
    {
        return view('pages/admin/detail_pelanggaran');
    }

    public function edit_pelanggaran()
    {
        return view('pages/admin/edit_pelanggaran');
    }
}
