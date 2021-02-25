<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Models\Article;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostUpdateArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request, $id)
    {
        $item = Article::find($id);
        if(!$item) {
            return redirect(url()->previous())->with('failed', 'Data tidak ditemukan')->withInput();
        }

        $slug = Str::slug(strtolower($request->title));
        try {
            DB::beginTransaction();

            $data = [];
            $data['slug'] = $slug;
            $data['title'] = $request->title;
            $data['content'] = $request->content;
            $data['updated_by'] = Auth::id();
            
            Article::where('id', $id)->update($data);
        } catch (\Exception $e) {
            Log::info($e);
            DB::rollBack();

            return redirect(url()->previous())->with('failed', 'Terjadi error. Silakan coba lagi')->withInput();
        }

        DB::commit();
        return redirect('articles')->with('success', 'Data berhasil diperbaharui');
    }
}
