<?php namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;

class AccountSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
            $data = [
                [
                    'nama' => 'Safitri',
                    'username'    => 'safitri',
                    'password' => password_hash('123', PASSWORD_DEFAULT),
                    'role' => 'admin',
                    'created_at' => Time::now(),
                    'updated_at' => Time::now()
                ],
                [
                    'nama' => 'Norma',
                    'username'    => 'norma',
                    'password' => password_hash('123', PASSWORD_DEFAULT),
                    'role' => 'admin',
                    'created_at' => Time::now(),
                    'updated_at' => Time::now()
                ],
                [
                    'nama' => 'Normaliana Safitri',
                    'username'    => 'normasafitri',
                    'password' => password_hash('123', PASSWORD_DEFAULT),
                    'role' => 'users',
                    'created_at' => Time::now(),
                    'updated_at' => Time::now()
                ],
            ];
            foreach($data as $datas){
                $this->db->table('accounts')->insert($datas);
            }
    }
}