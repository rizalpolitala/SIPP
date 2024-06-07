<?php

namespace App\Controllers;

class Perizinan extends BaseController
{

    public function form_perizinan()
    {
        return view('pages/admin/form_perizinan');
    }

    public function tabel_perizinan()
    {
        return view('pages/admin/tabel_perizinan');
    }
    public function edit_perizinan()
    {
        return view('pages/admin/edit_perizinan');
    }
}
