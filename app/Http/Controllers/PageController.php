<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //
    public function getPage($slug)
    {
        //$page = DB::table('pages')->where('slug', $slug)->firstOrFail();
//        $page = DB::select('select * from pages')->where('slug', $slug)->firstOrFail();
        //$page = \TCG\Voyager\Models\Page::table('pages')->where('slug', $slug)->firstOrFail();
//        dd($slug);
        $page = json_encode(DB::select('select excerpt from pages where slug = ?', [$slug]));

//        dd($page);
        return view('show-page')->with('page', $page);
    }
}
