<?php

namespace App\Controllers;

use App\Models\AkunModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('pages/auth/login');
    }

    public function login_proses()
    {

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $akunModel = new AkunModel();
        $user = $akunModel->where('username', $username)->where('password', $password)->first();

        if ($user != null) {
            // Set session data
            $sessionData = [
                'username' => $user['username'],
                'level' => $user['level'],
                'logged_in' => true
            ];
            session()->set($sessionData);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}
