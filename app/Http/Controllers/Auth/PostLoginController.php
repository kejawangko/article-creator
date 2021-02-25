<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PostLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function __invoke(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if(!$user) {
            return redirect('login')->with('failed', 'Credential not found');
        }

        $checkPassword = Hash::check($request->password, $user->password);
        if (!$checkPassword) {
            return redirect('login')->with('failed', 'Email or password not match');
        }

        Auth::login($user);
        return redirect('/');
    }
}
