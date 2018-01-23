@extends('layouts.visitor-layout')

@section('content')
<!-- Post Content Column -->
<div class="container">
	<div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8" style="font-size: larger; background:#fff;">
			  <!-- Title -->
			  <h2 class="mt-4">{{$data->title}}</h2>
			  <!-- Author -->
			  <p class="lead">by<a href="#">Admin</a></p>
			  <hr>
			  <!-- Date/Time -->
			  <p>Posted on {{$data->created_at}}</p>
			  <hr>
			  <!-- Preview Image -->
				<img src="{!! asset('asset/images/'.$data->image) !!}" alt="no logo"  width="100%" height="50%" >
			  <hr>
			  <!-- Post Content -->
			  <p class="list">{{$data->desc}}</p>
			  <hr>

			  <!-- Comments Form -->			  
			  <div class="panel panel-default">
					<div class="panel-heading">
						<li class="fa fa-pencil-square-o"></li>
								 Leave a Comment:
					</div>
						<div class="panel-body">
							  <form method="GET" action="{{ url('add_comment/'.$data->id) }}" enctype="multipart/form-data">
								<div class="form-group">
								  <input type="text" class="form-control" name="nama" />
								</div>
								<div class="form-group">
								  <textarea class="form-control" name="isi" rows="3"></textarea>
								</div>
								<button type="button" class="btn btn-danger" onclick="self.history.back();">Back</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						</div>
				</div>

	  <!-- Single Comment -->		  
			<form id="destroy-all" action="{{ url('admin/delete_comment') }}" method="GET">
				<div class="panel panel-default" id="bgcomment">
					<div class="panel-body">
					@foreach($com as $p)
						<div class="panel panel-default">
							<div class="panel-body">
								<h4 class="">{{$p->nama}}</h4>
								<div class="col-md-1">			
								<img class="d-flex mr-3 rounded-circle" src="{!! asset('asset/images/avatar.png')!!}" alt="">
								</div>
								<div class="col-md-10">	
									{{$p->comment}}
									<hr>
								@if (Route::has('login'))
								  @auth
							  <a href="{{ url('admin/delete_vcoment/'.$p->id) }}" class="btn btn-danger"><li class="fa fa-trash"></li> Hapus</a>
								@endauth
								@endif	
								</div>
							</div>
						</div>
							  
					@endforeach	
					</div>
				</div>
			</form>		  
		</div>
			
			<div class="col-md-4"><br>
            <legend>Random Post</legend>
           	<div class="list-group">	
			@foreach($semua as $r)			
			  <a href="{{ url('post/'.$r->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between"></div>
				{{$r->title}}
				</a>
				@endforeach
			</div>
          </div>
	</div>
</div>
 @stop 
<div class="clearfix"></div>
