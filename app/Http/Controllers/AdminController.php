<?php

namespace App\Http\Controllers;

use App\Models\bookmark;
use App\Models\comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $title='home';
        $data = User::all()->count();
        $uv = User::where('status','premium')->count();
        $stories = Post::all()->count();
        $star = Post::all()->sum('star');
        $look = Post::all()->sum('look');
        $bookmark = bookmark::all()->count();
        $comment = comment::all()->count();
        return view('admin.dashboard')->with('bookmark',$bookmark)->with('comment',$comment)->with('look',$look)->with('star',$star)->with('uv',$uv)->with('count',$data)->with('title',$title)->with('stories',$stories);
    }
}
