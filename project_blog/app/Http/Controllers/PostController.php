<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\File;
use App\Category;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(10);
        return view('admin/posting')->with('post',$post);

    }

    public function create()
    {
        return view('admin/posting-new');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->get('title');
        $post->desc = $request->get('content');
       if($request->hasFile('image')){
         $post->image = $request->file('image')->getClientOriginalName();

         $imageName = $request->image->getClientOriginalName();         
        $request->file('image')->move('asset/images', $imageName);
        }else{
         $post->image = ('images/default.jpg');
        }
        $post->save();
        return redirect('admin/post');
    }

    	
	public function poslihat($id)
    {
		$post = post::find($id);
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
        return view('posview',compact('post','pt','laravel'));
        
    }
    //view update cal update
    public function edit($id)
    {
        $post = post::find($id);
        return view('admin/posting-edit')->with('post',$post);
    }
	// updatae post
    public function update(Request $request, $id)
    {
       $post = Post::find($id);
       $post->title = $request->get('title');
       $post->desc = $request->get('content');
       if($request->hasFile('image')){		 			
         $post->image = $request->file('image')->getClientOriginalName();         
         $imageName = $request->image->getClientOriginalName();   
        $request->file('image')->move('asset/images', $imageName);
        }
       $post->save();
        return redirect('admin/post');
    }

	//hapus post
    public function destroyall(Request $request)
    {
		
        if(count(collect($request->checkbox)) > 1){
          $post = Post::whereIn('id',$request->get('checkbox'));	
			
		  $post->delete();
        }else{
          $post = post::find($request->get('checkbox'))->first();
		
          $post->delete();
        }
        return back()->with('success','berhasil di hapus');
    }
}
