<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Models\Article;
use Auth;
use Illuminate\Http\Request;

class GetEditArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke($id)
    {
        $item = Article::find($id);

        $arrView = [
            'item' => $item
        ];

        return view('pages.articles.edit', $arrView);
    }
}
