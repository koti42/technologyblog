<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Games;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Carbon\Exceptions\Exception;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['Game']=Games::paginate(10);
       $data['Game']->withPath(url('Yonetim/haberler/sayfa'));
        return view('Backend.default.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.default.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $da = Carbon::now('Europe/Istanbul')->format('Y-m-d H-i');;;

        if (strlen($request->game_slug)>3)
        {
            $slug=Str::slug($request->game_slug);
        } else {
            $slug=Str::slug($request->game_title);
        }

        if ($request->hasFile('game_file'))
        {
            $request->validate([
                'game_title' => 'required',
                'game_content' => 'required',
                'game_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->game_file->getClientOriginalExtension();
            $request->game_file->move(public_path('images/haberler'),$file_name);
        } else {
            $file_name=null;
        }




        $game=Games::insert(
            [
                "game_title" => $request->game_title,
                "game_slug" => $slug, //işlem
                "game_file" => $file_name,//İşlem
                "game_content" => $request->game_content,
                "game_plartform" => $request->game_plartform,
                "game_type" => $request->game_type,
                "author" => $request->author,
                "short_description"=>$request->short_description,
                "created_at"=>$da,
            ]
        );

        if ($game)
        {
            return redirect(route('haberler.index'))->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game=Games::where('id',$id)->first();
        return view('backend.default.edit')->with('games',$game);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $da = Carbon::now('Europe/Istanbul')->format('Y-m-d H-i');;

        if (strlen($request->game_slug)>3)
        {
            $slug=Str::slug($request->game_slug);
        } else {
            $slug=Str::slug($request->game_title);
        }

        if ($request->hasFile('game_file'))
        {
            $request->validate([
                'game_title' => 'required',
                'game_content' => 'required',
            ]);

            $file_name=uniqid().'.'.$request->game_file->getClientOriginalExtension();
            $request->game_file->move(public_path('images/haberler'),$file_name);
        } else {
            $file_name=null;
        }



        $game=Games::where('id',$id)->update(
            [
                "game_title" => $request->game_title,
                "game_slug" => $slug, //işlem
                "game_content" => $request->game_content,
                "game_plartform" => $request->game_plartform,
                "game_type" => $request->game_type,
                "author" => $request->author,
                "short_description"=>$request->short_description,
                "updated_at"=>$da,
            ]
        );

        if ($game)
        {
            return redirect(route('haberler.index'))->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}
