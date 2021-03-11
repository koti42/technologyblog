<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Games;


class DetailController extends Controller
{
    public function index($slug)
    {

        $data=Games::where('game_slug',$slug)->first();
        return view('Frontend.content.detail-default',compact('data'));
    }
    public function index1()
    {
        $news['Games']=Games::paginate(10);
        return view('Frontend.content.category-list',compact('news'));
    }

}
