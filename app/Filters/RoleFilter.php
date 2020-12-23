<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('log') != true) {
            return redirect()->to(base_url());
        }
        if (uri_string() != session()->get('role_log') ) {
            return redirect()->to(base_url(session()->get('role_log')));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('log') == true) {
            if (session()->get('role_log') == 'admin') {
                return redirect()->to(base_url('admin'));
            } else {
                return redirect()->to(base_url('users'));
            }
        }
    }
}
