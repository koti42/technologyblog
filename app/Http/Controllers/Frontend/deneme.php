<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\comments_replies;
use Illuminate\Http\Request;
use App\Models\Review;

class deneme extends Controller
{
   public function index($slug)
   {
        $data=Review::where('review_slug',$slug)->first();
        $comments=Comments::where('comment_slug',$slug)->get();
        $repy_comment=comments_replies::all();
        $veri=Comments::where('comment_slug',$slug)->where('approval_status', 1)->count();



       return view('Frontend.content.review',compact('data','comments','veri','repy_comment'));

   }
}
