<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use CodeIgniter\HTTP\IncomingRequest;


class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $db = \Config\Database::connect();

        if (!session('username')) // saya hanya membuat sederhana saja. silahkan kembangkan di kemudian hari
        {
            return redirect()->to('/auth');
        } else {

            //$role_id = session()->get('role_id');

            //$menu = $request->uri->getSegment(1);
            // dd($menu);
            // die;

            // $queryMenu = $db->query("SELECT * FROM user_menu WHERE menu= '$menu'");
            // $hasil = $queryMenu->getRowArray();
            // dd($hasil);
            // die;
            //$queryMenu = $db->table('user_menu')->getWhere(['menu' => $menu])->getRowArray();
            // $menu_id = $hasil['id'];
            // dd($menu_id);
            // die;
            $userAccess = $db->query("SELECT * FROM tbl_siswa");
            //$access = $userAccess->getRowArray();
            // $role = $access['role_id'];
            // dd($role);
            // die;

            if ($userAccess->getRowArray() < 1) {
                return redirect()->to('/auth/blocked');
            }
        }
        // Do something here
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
