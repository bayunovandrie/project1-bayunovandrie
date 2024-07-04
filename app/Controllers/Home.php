<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $config = config('MySite');
        echo "Selamat datang di {$config->siteName}. Kirim Saran dan Kritik ke email {$config->siteEmail}";
    }
}