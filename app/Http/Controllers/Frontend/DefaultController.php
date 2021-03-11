<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\SocialMedias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;

class DefaultController extends Controller
{

    public function index()
    {

        return view('Frontend.default.index');
    }

    public function contact()
    {
        return view('Frontend.default.contact');
    }

    public function categories()
    {


    }

    public function sendmail()
    {
        //
    }
    public function comments()
    {


    }
}

