<?php

namespace App\Controllers;

use App\Models\AnimeModel;

class Anime extends BaseController
{
    protected $AnimeModel;

    public function __construct()
    {
        $this->animeModel = new animeModel();
    }

    public function index()
    {
        $anime = $this->animeModel->findAll();

        $data = [
            'title' => 'Daftar Anime',
            'anime' => $this->animeModel->getAnime()
        ];


        return view('anime/index', $data);
    }

    public function detail($slug)
    {
        $anime = $this->animeModel->getAnime($slug);
        $data = [
            'title' => 'Detail Anime',
            'anime' => $this->animeModel->getAnime($slug)
        ];

        if (empty($data['anime'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Anime ' . $slug . ' Tidak ditemukan.');
        }

        return view('anime/detail', $data);
    }
};
