<?php

namespace App\Http\Controllers;

use App\Models\bookmark;
use App\Models\Category;
use App\Models\comment;
use App\Models\Post;
use App\Models\star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    public function all(){
        $data['all'] = Post::join('users','posts.user_id','=','users.id')->join('categories','posts.category_id','=','categories.category_id')->get();
        $data['stories'] = Post::all()->count();
        $data['modal'] ='1';
        $data['title'] ='All';
        $data['tcat'] = Post::where('category_name', '')->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
        $data['category'] = Category::all();
        $data['target'] ='1';
        return view('all')->with($data);
    }
    public function home(){
            $data['story'] = Post::orderBy('star', 'desc')->join('categories','posts.category_id','=','categories.category_id')->paginate(4);
            $data['target'] ='1';
            $data['modal'] ='1';
            $data['app'] = Post::orderBy('star', 'desc')->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
            $data['news'] = Post::orderBy('post_id','desc')->join('categories','posts.category_id','=','categories.category_id')->paginate(4);
            $data['new'] = Post::orderBy('post_id', 'desc')->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
            $data['free'] = Post::where('status','free')->join('categories','posts.category_id','=','categories.category_id')->orderBy('post_id','desc')->paginate(4);
            $data['onefree'] = Post::where('status','free')->join('categories','posts.category_id','=','categories.category_id')->orderBy('star','desc')->paginate(1);
            $data['premium'] = Post::where('status','premium')->join('categories','posts.category_id','=','categories.category_id')->orderBy('post_id','desc')->paginate(4);
            $data['onepremium'] = Post::where('status','premium')->orderBy('star','desc')->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
        
            return view('home')->with($data);
    }
    public function store(Request $request){
        $data = Post::create([
            'img'=>$request->file('img')->store('post'),
            'title'=>$request->title,
            'isi'=>$request->isi,
            'category_id'=>$request->category_id,
            'user_id'=>$request->Auth::user()->id,
        ]);
        // i love u nabilah hehe,
    }
    public function show(){
        $data['post'] = Post::join('users','posts.user_id','=','users.id')->join('categories','posts.category_id','=','categories.category_id')->get();
        $no=1;
        $title='story';
        return view('admin.story')->with($data)->with('no',$no)->with('title', $title);
    }public function destroy($id){
        Post::where('post_id',$id)->delete();
        return redirect('/stories');

    }public function bookmark($id,$asal){
        $baru = $asal +1;
       $bookmark = Post::where('post_id',$id)->update([
            'bookmark'=>$baru
        ]);
        if($bookmark){
        bookmark::create([
            'user_id'=>Auth::guard('web')->id(),
            'post_id'=>$id,
        ]);
    }
        return back();
    }
    public function hapusbookmark($id,$asal){
       $baru = $asal -1;
       $bookmark = Post::where('post_id',$id)->update([
            'bookmark'=>$baru
        ]);
        if($bookmark){
            bookmark::where('post_id','=',$id,'And','user_id',Auth::guard('web')->id())->delete();
    }
        return back();
    }
    public function stars($id,$asal){
        $baru = $asal +1;
       $star = Post::where('post_id',$id)->update([
            'star'=>$baru
        ]);
        if($star){
        star::create([
            'user_id'=>Auth::guard('web')->id(),
            'post_id'=>$id,
        ]);
    }
        return back();
    }
    public function hapusstars($id,$asal){
        $baru = $asal -1;
        $star = Post::where('post_id',$id)->update([
             'star'=>$baru
         ]);
         if($star){
             star::where('post_id','=',$id,'And','user_id',Auth::guard('web')->id())->delete();
     }
         return back();
     }

    public function cari(Request $request){
        $tcari = $request->cari;
        $cari = '%'.$request->cari.'%';
        $data['title'] =$tcari;
        $data['modal'] ='1';
        $data['target'] ='1';
        $data['category'] = Category::all();
        $data['tcat'] = Post::where('category_name', '')->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
        $data['stories'] = Post::where('title','like',$cari)->orwhere('category_name','like',$cari)->orwhere('user_id','like',$cari)->join('users','posts.user_id','=','users.id')->join('categories','posts.category_id','=','categories.category_id')->count();
        $data['all'] = Post::where('title','like',$cari)->orwhere('category_name','like',$cari)->orwhere('name','like',$cari)->join('users','posts.user_id','=','users.id')->join('categories','posts.category_id','=','categories.category_id')->get();
        return view('/all')->with($data);
    }
    public function star(){
        $data['modal'] ='1';
        $data['title'] ='Hot';
        $data['target'] ='1';
        $data['category'] = Category::all();
        $data['tcat'] = Post::where('category_name', '')->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
        $stories['stories'] = Post::all()->count();
        $data['all'] = Post::orderBy('star','desc')->get();
        return view('/all')->with($data);
    }
    public function new(){
        $data['modal'] ='1';
        $data['target'] ='1';
        $data['title'] ='New';
        $data['category'] = Category::all();
        $stories['stories'] = Post::all()->count();
        $data['tcat'] = Post::where('category_name', '')->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
        $data['all'] = Post::orderBy('post_id','desc')->get();
        return view('/all')->with($data);
    }
    public function detail($id){
        $data['bookmark'] = bookmark::where('post_id','=',$id,'And','user_id','=',Auth::guard('web')->id())->count();
        $data['star'] = star::where('post_id','=',$id,'And','user_id','=',Auth::guard('web')->id())->count();
        $data['story'] = Post::where('post_id','=',$id,'And','status','=','free')->get();
        $data['comment'] = comment::where('post_id',$id)->count();
        $data['comments'] = comment::where('post_id',$id)->join('users','comments.user_id','=','users.id',)->get();
        return view('detail')->with($data);
    }public function allcategory($cat){
        $data['modal'] ='1';
        $data['title'] = $cat;
        $data['target'] ='1';
        $data['all'] = Post::where('category_name',$cat)->join('categories','posts.category_id','=','categories.category_id')->get();
        $data['stories'] = Post::where('category_name',$cat)->join('categories','posts.category_id','=','categories.category_id')->count();
        $data['tcat'] = Post::where('category_name',$cat)->join('categories','posts.category_id','=','categories.category_id')->paginate(1);
        $data['cat'] = Category::where('category_id',$cat)->get();
        $data['category'] = Category::all();
        return view('/all')->with($data);
    }
    public function bookmarks(){
        $data['all'] = bookmark::where('bookmarks.user_id',auth::guard('web')->user()->id)->join('posts','bookmarks.post_id','=','posts.post_id')->join('users','bookmarks.user_id','=','users.id')->join('categories','posts.category_id','=','categories.category_id')->get();
        $data['target'] = 1;
        $data['modal'] = 1;
        return view('bookmark')->with($data);
     }
     public function like(){
        $data['all'] = star::where('stars.user_id',auth::guard('web')->user()->id)->join('posts','stars.post_id','=','posts.post_id')->join('users','stars.user_id','=','users.id')->join('categories','posts.category_id','=','categories.category_id')->get();
        $data['target'] = 1;
        $data['modal'] = 1;
        return view('disukai')->with($data);
     }
        public function destroyuserpost($post_id){
            Post::where('post_id','=',$post_id)->delete();
            return back()->with('hapus','berhasil dihapus');
        }
        public function tampilinput(){
            $data['category'] = Category::all();
            return view('input')->with($data);
        }
        public function inputstory(Request $request){
            Post::create([
                'title' =>$request->title,
                'status'=>'free',
                'bookmark'=>0,
                'look'=>0,
                'star'=>0,
                'user_id'=> Auth::guard('web')->id(),
                'category_id' =>$request->category,
                'isi' =>$request->isi,
                'img'=>$request->file('img')->store('post')
            ]);
            return redirect('/profile/'.Auth::guard('web')->user()->username);
        }
        public function tampilupdatestory($post_id){
            $data['post'] = Post::where('post_id',$post_id)->join('categories','posts.category_id','=','categories.category_id')->get();
            $data['category'] = Category::all();
            return view('edit')->with($data);
        }
        public function updatestory($post_id, Request $request){
            Post::where('post_id',$post_id)->update([
                'title' =>$request->title,
                'category_id' =>$request->category,
                'isi'=>$request->isi,
                'img'=>$request->file('img')->store('post'),
            ]);
            return redirect('/profile/'.Auth::guard('web')->user()->username);
        }

}
