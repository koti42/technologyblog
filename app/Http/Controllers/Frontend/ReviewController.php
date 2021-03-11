<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index()
    {
        $data['reviews']=Review::paginate(10);
        return view('Frontend.content.category',compact('data'));
    }

    public function detail()
    {


    }

}
