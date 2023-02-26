<?php

namespace App\Http\Controllers;

use App\Repositories\ThemesRepository;

class HomeController extends Controller
{
    private ThemesRepository $themesRepository;

    public function __construct(
        ThemesRepository $themesRepository,
    ) {
        $this->themesRepository = $themesRepository;
    }

    public function viewHome()
    {
        $themes = $this->themesRepository->getListThemes();

        return view('page.home', compact('themes'));
    }
}
