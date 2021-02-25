<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Models\Article;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostStoreArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        $slug = Str::slug(strtolower($request->title));
        try {
            DB::beginTransaction();

            $data = new Article();
            $data->slug = $slug;
            $data->title = $request->title;
            $data->content = $request->content;
            $data->created_by = Auth::id();
            $data->save();
        } catch (\Exception $e) {
            Log::info($e);
            DB::rollBack();

            return redirect(url()->previous())->with('failed', 'Terjadi error. Silakan coba lagi')->withInput();
        }

        DB::commit();
        return redirect('articles')->with('success', 'Data berhasil disimpan');
    }
}
