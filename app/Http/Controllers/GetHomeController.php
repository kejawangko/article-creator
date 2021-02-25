<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class GetHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        return view('pages.index');
    }
}
