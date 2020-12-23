<?php

namespace Modules\main\Models;

use CodeIgniter\Model;

class AuthLoginModel extends Model
{
    public function login($username, $password)
    {
        $q = $this->db->table('accounts')->where([
            'username' => $username
        ])->get()->getRowArray();
        if (!$q == null) {
            if (password_verify($password, $q['password'])) {
                return $q;
            } else {
                return null;
            }
        }else{
            return null;
        }
    }
}
