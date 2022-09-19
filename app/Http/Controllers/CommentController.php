<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment($post_id,Request $request){
        comment::create([
            'user_id'=>Auth::guard('web')->id(),
            'post_id'=>$post_id,
            'isi_comment'=>$request->comment
        ]);
        return redirect('story/detail/'.$post_id);
    }
}
