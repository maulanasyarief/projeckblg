<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Add_comment;
use App\Comments;
use App\Comment;//add_comment modul
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
       // $post = Post::all();
	   $post = Post::paginate(5);		
	   $pt   = 'PT Ednovate Indonesia adalah startup yang 
				fokus di bidang marketing dan telah memiliki
				berbagai pengalaman dalam menangani banyak klien
				mulai dari UKM hingga corporate dari berbagai bidang.';
				
	   $laravel= 'Laravel adalah sebuah framework 
			   PHP yang dirilis dibawah lisensi MIT, dibangun
			   dengan konsep MVC (model view controller). Laravel
			   adalah pengembangan website berbasis MVP yang ditulis 
			   dalam PHP yang dirancang untuk meningkatkan kualitas perangkat 
			   lunak dengan mengurangi biaya pengembangan awal dan biaya
			   pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan
			   aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan
			   menghemat waktu.';
       // return view('welcome')->with('post', $post);
        return view('welcome',compact('post','pt','laravel'));
    }

    public function showPage($id)
    {
       $data = Post::find($id);
       $semua = Post::Where('id', '<>',$id)->get();
		$com = Comments::Where('post_id',$id)->get();
		$pt   = 'PT Ednovate Indonesia adalah startup yang 
				fokus di bidang marketing dan telah memiliki
				berbagai pengalaman dalam menangani banyak klien
				mulai dari UKM hingga corporate dari berbagai bidang.';
				
	   $laravel= 'Laravel adalah sebuah framework 
			   PHP yang dirilis dibawah lisensi MIT, dibangun
			   dengan konsep MVC (model view controller). Laravel
			   adalah pengembangan website berbasis MVP yang ditulis 
			   dalam PHP yang dirancang untuk meningkatkan kualitas perangkat 
			   lunak dengan mengurangi biaya pengembangan awal dan biaya
			   pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan
			   aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan
			   menghemat waktu.';
        //return view('single')->with('data', $data);
        return view('single', compact ('data','com','pt','laravel','semua'));        
    }
	
	public function add_comment(Request $request, $id)
    {
		$koment = New Comment();
		$koment->nama = $request->nama;
		$koment->comment = $request->isi;
		$koment->post_id = $id;
		$koment->save();
	 //   return view('single');			
       return redirect('post/'.$id);		
    }
	
	// dell comment in visitor wid admin
	public function del_comment(Request $request, $id)
    {
		$data = Post::find($id);
		$com = Comments::find($id);
		$com->delete();		
        return back()->with('success','berhasil di hapus');		
    }
	

}
