<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function login()
    {
        helper(['form']);
        $data = [];

        // If already logged in, redirect to dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }

        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[50]',
                'password' => 'required|min_length[4]|max_length[255]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Username or Password don\'t match'
                ]
            ];

            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new AdminModel();
                $admin = $model->where('username', $this->request->getVar('username'))
                    ->first();

                if ($admin && password_verify($this->request->getVar('password'), $admin['password_hash'])) {
                    $this->setUserSession($admin);
                    return redirect()->to('/admin/dashboard');
                } else {
                    $data['error'] = 'Invalid username or password';
                }
            }
        }

        return view('admin/login', $data);
    }

    private function setUserSession($admin)
    {
        $data = [
            'id' => $admin['id'],
            'username' => $admin['username'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    public function dashboard()
    {
        $subscriberModel = new \App\Models\SubscriberModel();
        $contactModel = new \App\Models\ContactModel();

        $data = [
            'title' => 'Dashboard',
            'subscriberCount' => $subscriberModel->countAllResults(),
            'contactCount' => $contactModel->countAllResults()
        ];
        return view('admin/dashboard', $data);
    }
}
