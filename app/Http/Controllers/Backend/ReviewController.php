<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data['reviews']=Review::paginate(10);
       $data['reviews']->withPath(url('Yonetim/inceleme/sayfa'));
        return view('Backend.review.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {



        if ($_POST){
            foreach ($_POST AS $değer)
            {
                $değer=$_POST['design'];
                $değer1=$_POST['optimization'];
                $değer2=$_POST['game_time'];
                $değer3=$_POST['game_errors'];
                $değer4=$_POST['price'];
                $değer5=$_POST['player_comments'];
                $değer6=$_POST['story'];
            }
            $avg=($değer+$değer1+$değer2+$değer3+$değer4+$değer5+$değer6)/7;
        }



        $da = Carbon::now('Europe/Istanbul')->format('Y-m-d H-i');

        if (strlen($request->review_slug)>3)
        {
            $slug=Str::slug($request->review_slug);
        } else {
            $slug=Str::slug($request->review_title);
        }

        if ($request->hasFile('review_file'))
        {
            $request->validate([
                'review_title' => 'required',
                'review_content' => 'required',
                'review_file' => 'required|image|mimes:jpg,jpeg,png|max:3048'
            ]);

            $file_name=uniqid().'.'.$request->review_file->getClientOriginalExtension();
            $request->review_file->move(public_path('images/inceleme'),$file_name);
        } else {
            $file_name=null;
        }



        $review=Review::insert(
            [
                "review_title" => $request->review_title,
                "review_slug" => $slug, //işlem
                "review_file" => $file_name,//İşlem
                "review_content" => $request->review_content,
                "review_plartform" => $request->review_plartform,
                "review_type" => $request->review_type,
                "author" => $request->author,
                "design" => $request->design,
                "optimization" => $request->optimization,
                "player_comments" => $request->player_comments,
                "story" => $request->story,
                "price" => $request->price,
                "game_time" => $request->game_time,
                "game_errors" => $request->game_errors,
                "short_description" => $request->short_description,
                "ort"=>$avg,
                "created_at"=>$da,
            ]
        );


        if ($review)
        {
            return redirect(route('inceleme.index'))->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review=Review::where('id',$id)->first();
        return view('backend.review.edit')->with('review',$review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($_POST){
            foreach ($_POST AS $değer)
            {
                $değer=$_POST['design'];
                $değer1=$_POST['optimization'];
                $değer2=$_POST['game_time'];
                $değer3=$_POST['game_errors'];
                $değer4=$_POST['price'];
                $değer5=$_POST['player_comments'];
                $değer6=$_POST['story'];
            }
            $avg=($değer+$değer1+$değer2+$değer3+$değer4+$değer5+$değer6)/7;
        }


        $da = Carbon::now('Europe/Istanbul')->format('Y-m-d H-i');;

        if (strlen($request->review_slug)>3)
        {
            $slug=Str::slug($request->review_slug);
        } else {
            $slug=Str::slug($request->review_title);
        }

        if ($request->hasFile('review_file'))
        {
            $request->validate([
                'review_title' => 'required',
                'review_content' => 'required',
            ]);

            $file_name=uniqid().'.'.$request->review_file->getClientOriginalExtension();
            $request->review_file->move(public_path('images/inceleme'),$file_name);
        } else {
            $file_name=null;
        }



        $review=Review::where('id',$id)->update(
            [
                "review_title" => $request->review_title,
                "review_slug" => $slug, //işlem
                "review_content" => $request->review_content,
                "review_plartform" => $request->review_plartform,
                "review_type" => $request->review_type,
                "author" => $request->author,
                "design" => $request->design,
                "optimization" => $request->optimization,
                "player_comments" => $request->player_comments,
                "story" => $request->story,
                "price" => $request->price,
                "game_time" => $request->game_time,
                "game_errors" => $request->game_errors,
                "short_description" => $request->short_description,
                "updated_at"=>$da,
                "ort"=>$avg,
            ]
        );

        if ($review)
        {
            return redirect(route('inceleme.index'))->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
