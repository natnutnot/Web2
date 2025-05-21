<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'logged_in' => true,
                'user_id' => $user['id'],
                'username' => $user['username']
            ]);
            return redirect()->to('/buku'); 
        }

        return redirect()->back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}