<?php

namespace App\Http\Controllers;
//memanggil model
use App\Comment;
use App\Add_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class komentarController extends Controller
{
    public function index()
    {
		$post = Comment::paginate(10);		
       return view('admin/comment')->with('post',$post);
	   
    }
	
   
    public function destroyall(Request $request)
    {
           if(count(collect($request->checkbox)) > 1){
          $post = Comment::whereIn('id',$request->get('checkbox'));
          $post->delete();
        }else{
          $post = Comment::find($request->get('checkbox'))->first();
          $post->delete();
        }
        return back();
    }
}
