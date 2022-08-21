<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // <-- 🖖 Importa la classe Controller
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home'); # <-- volendo si puo mettere la view sotto admin/ quindi diventa admin.home
    }
}
