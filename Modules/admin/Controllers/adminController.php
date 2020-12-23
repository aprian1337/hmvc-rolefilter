<?php namespace Modules\admin\Controllers;

use Modules\admin\Models\AccountsModel;

class adminController extends \CodeIgniter\Controller
{
	protected $accountsModel;
	public function __construct(){
		$this->accountsModel = new AccountsModel();
	}
	public function index()
	{
		$accounts = $this->accountsModel->findAll();
		$data = [
			'accounts' => $accounts,
			'username' => session()->get('username_log'),
            'nama' => session()->get('nama_log'),
            'role' => session()->get('role_log')
		];
		echo view('\Modules\layout\Views\header', $data);
		echo view('\Modules\admin\Views\index', $data);
	}
}
