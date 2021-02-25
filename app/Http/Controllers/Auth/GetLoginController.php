<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class GetLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function __invoke()
    {
        return view('pages.auth.login');
    }
}
