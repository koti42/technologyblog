<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller
{
    public function index()
    {
        $game=DB::table('games')->count();
        $comments=DB::table('Comments')->count();
        $reply_comments=DB::table('comments_replies')->count();

        return view('Backend.index',compact('game','comments','reply_comments'));
    }

    public function create()
    {
        return view('Backend.blogs.create');
    }

    public function destroy($id)
    {

    }
}
