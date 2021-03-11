<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Games;
use App\Models\Review;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SettingsController extends Controller
{
    public function index()
    {


    }


    //destroy metodu buraya gelen $id kısmında olan veriyi veri tabanından silmesi için kullanıyoruz
    public function destroy($id)
    {
        $settings = Games::find($id);
        $settings->delete();

        return back();

    }

    public function destroy2($id)
    {
        $settings = Review::find($id);
        $settings->delete();

        return back();

    }
    public function destroy3($id)
    {
        $settings = Comments::find($id);
        $settings->delete();
        return back();

    }

    public function approve($id)
    {
        $settings = DB::table('comments')->where('id', $id)->update(
            [
                'approval_status'=>1,
            ]
        );
        return back();

    }


}
