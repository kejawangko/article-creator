<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Models\Article;
use Auth;

class GetArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        $items = Article::get();

        $arrView = [
            'items' => $items
        ];

        return view('pages.articles.index', $arrView);
    }
}
