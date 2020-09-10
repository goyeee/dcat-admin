<?php


namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        $data = DB::table('article')->select(['articleid'])->where('articleid','=', '1')->get();
        return response()->json($data);
    }

    public function model(){
        $data = Article::all();
        return response()->json($data);
    }
}
