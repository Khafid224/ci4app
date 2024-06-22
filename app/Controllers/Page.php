<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function fags()
    {
        echo "fags page";
    }


    public function tos()
    {
        echo "Halaman Terms of Service";
    }

    public function biodata()
    {
        echo "Nama : Abdul Hafid<br>";
        echo "Umur : 19 tahun<br>";
        echo "Alamat : Rejoso<br>";
    }
}
