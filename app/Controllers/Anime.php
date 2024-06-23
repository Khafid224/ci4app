<?php

namespace App\Controllers;

use App\Models\AnimeModel;

class Anime extends BaseController
{
    protected $AnimeModel;

    public function __construct()
    {
        $this->AnimeModel = new AnimeModel();
    }

    public function index()
    {
        $anime = $this->AnimeModel->findAll();

        $data = [
            'title' => 'Daftar Anime',
            'anime' => $anime
        ];


        return view('anime/index', $data);
    }
};
