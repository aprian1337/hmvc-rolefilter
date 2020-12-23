<?php

namespace Modules\main\Controllers;
use Modules\main\Models\AuthLoginModel;

class mainController extends \CodeIgniter\Controller
{
    protected $authModel;
	public function __construct(){
		$this->authModel = new AuthLoginModel();
    }
    
    public function index()
    {
        // phpinfo();
        return view('Modules\main\Views\index');
    }

    public function cekLogin()
    {
        if ($this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong!'
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong!'
                ],
            ],
        ])) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $check = $this->authModel->login($username, $password);
            if($check){
                // dd($check['role']);
                session()->set('log', true);
                session()->set('username_log', $check['username']);
                session()->set('nama_log', $check['nama']);
                session()->set('role_log', $check['role']);
                return redirect()->to(base_url('admin'));
            }else{
                session()->setFlashdata('fail', 'Login gagal, username atau password tidak ditemukan');
                return redirect()->to(base_url());
            }
        }else{
            session()->setFlashdata('fail', 'Login gagal, username atau password tidak ditemukan');
            return redirect()->to(base_url());
        }
    }

    public function logout(){
        session()->destroy();
        session()->setFlashdata('success', 'Logout berhasil');
        return redirect()->to(base_url());
    }
}
