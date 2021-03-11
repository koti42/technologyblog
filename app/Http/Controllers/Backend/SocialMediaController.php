<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialMedias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social['social_medias']=SocialMedias::all();
        return view('Backend.SocialMedia.index',compact('social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social=SocialMedias::where('id',$id)->first();
        return view('Backend.SocialMedia.edit')->with('social',$social);
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
        $review=SocialMedias::where('id',$id)->update(
            [
                "Facebook" => $request->Facebook,
                "Instagram" => $request->Instagram,
                "Youtube" => $request->Youtube,
                "Twitter" => $request->Twitter,
                "Mail" => $request->Mail,
            ]
        );

        if ($review)
        {
            return redirect(route('Sosyal-medya.index'))->with('success','İşlem Başarılı');
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
