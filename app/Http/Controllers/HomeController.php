<?php

namespace App\Http\Controllers;

use App\Data\CbiteMenuData;
use App\Data\DrinkMenuData;
use App\Data\MamaMenuData;
use App\Data\SooChickenMenuData;
use App\Data\ToriLabMenuData;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index', [
            'cbite' => CbiteMenuData::get(),
            'mama'  => MamaMenuData::get(),
            'soo'   => SooChickenMenuData::get(),
            'tori'  => ToriLabMenuData::get(),
            'drink' => DrinkMenuData::get(),
        ]);
    }

    public function qr(): View
    {
        return view('home.qr');
    }

    public function privacy(): View
    {
        return view('home.privacy');
    }
}
