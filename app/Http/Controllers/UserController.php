<?php

namespace App\Http\Controllers;

use App\Models\bookmark;
use App\Models\Follow;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function profile($username){
    $data['target'] ='1';
    $data['modal'] ='1';
    $data['sudahfollow'] = Follow::where('followed',Auth::guard('web')->user()->username)->where('to',$username)->count();
    $data['story'] = Post::where('username',$username)->join('users','posts.user_id','=','users.id')->get();
    $data['data'] = User::where('username',$username)->get();
    $data['following'] = Follow::where('followed',Auth::guard('web')->user()->username)->count();
    $data['follower'] = Follow::where('to',Auth::guard('web')->user()->username)->count();
    $data['followingnonauth'] = Follow::where('followed',$username)->count();
    $data['followernonauth'] = Follow::where('to',$username)->count();
    $data['followings'] = Follow::where('followed',$username)->join('users','follows.to','=','users.username')->get();
    $data['followers'] = Follow::where('to',$username)->join('users','follows.followed','=','users.username')->get();
    $data['followingsauth'] = Follow::where('followed',Auth::guard('web')->user()->username)->join('users','follows.to','=','users.username')->get();
    $data['followersauth'] = Follow::where('to',Auth::guard('web')->user()->username)->join('users','follows.followed','=','users.username')->get();
    return view('profile')->with($data);
   }
   public function update(Request $request){
      $data['user'] = User::where('id',Auth::guard('web')->id())->update([
         'name' =>$request->name,
         'email' =>$request->email,
         'bio' =>$request->bio,
         'image' =>$request->file('image')->store('post'),
      ]);
   }
}
