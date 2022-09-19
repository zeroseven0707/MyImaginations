<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow($username){
           Follow::create([
            'followed'=>Auth::guard('web')->user()->username,
            'to'=>$username,
        ]);
        $data['sudahfollow'] = Follow::where('followed',Auth::guard('web')->id())->where('to',$username)->count();
        return back()->with($data);
    }
    public function hapusfollow($username){
        Follow::where('followed',Auth::guard('web')->user()->username)->where('to',$username)->delete();
        return back();
    }
}
