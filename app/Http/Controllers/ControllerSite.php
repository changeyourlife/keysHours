<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSite extends Controller
{
    public function index() {
        return view('front_office.site.index', [
            'lastAchievements' => 'lastAchievements',
        ]);
    }

    public function catalog() {
        return view('front_office.site.catalog', [
           'gameList' => 'gameList',
        ]);
    }
}
