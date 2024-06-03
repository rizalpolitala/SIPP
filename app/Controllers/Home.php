<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('pages/dashboard');
    }

    public function dashboard()
    {
        echo "dashboard";
    }

    public function form_pelanggaran()
    {
        return view('pages/form_pelanggaran');
    }

    public function tabel_pelanggaran()
    {
        return view('pages/tabel_pelanggaran');
    }
}
