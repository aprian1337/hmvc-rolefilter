<?php namespace Modules\users\Controllers;

class userController extends \CodeIgniter\Controller
{
	public function index()
	{
		$data = [
            'username' => session()->get('username_log'),
            'nama' => session()->get('nama_log'),
            'role' => session()->get('role_log')
        ];
		echo view('\Modules\layout\Views\header', $data);
		echo view('\Modules\users\Views\index', $data);
	}
}
