<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\comments_replies;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comments_reply = $request['ID'];
        $cevap=$request['reply_comment'];

        if ($comments_reply == "") {
            $ip = $request->ip();
            $da = Carbon::now('Europe/Istanbul')->format('Y-m-d H-i');;;
            $review = Comments::insert(
                [
                    "Ad" => $request->Name,
                    "email" => $request->Email, //işlem
                    "content" => $request->Message,//İşlem
                    "comment_slug" => $request->comment_slug,
                    "created_at" => $da,
                    "ip_address" => $ip,

                ]);
            if ($review) {
                return back()->with('success', 'Yorumuz Başarıyla Gönderildi, Yönetici Onayı Sonra Aktif Olacaktır');
            }
            return back()->with('error', 'İşlem Başarısız');
        }
        else {
            $ip = $request->ip();
            $da = Carbon::now('Europe/Istanbul')->format('Y-m-d H-i');;;
            $review = comments_replies::insert(
                [
                    "Ad" => $request->Name,
                    "email" => $request->Email, //işlem
                    "content" => $request->Message,//İşlem
                    "comment_slug" => $request->comment_slug,
                    "created_at" => $da,
                    "ip_address" => $ip,
                    "id_reply"=>$comments_reply,

                ]);
            if ($review) {
                return back()->with('success','Cevabınız Başarıyla Gönderildi, Yönetici Onayı Sonra Aktif Olacaktır');
            }
            return back()->with('error', 'İşlem Başarısız');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
