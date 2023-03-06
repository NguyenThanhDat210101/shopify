<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * View home page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('admins.index');
    }
}
