<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/overview');
    }
    public function about($nama = null)
    {
        echo "Hi, nama saya adalah $nama";
    }
}
