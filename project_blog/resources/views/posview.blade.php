@extends('layouts.visitor-layout')

@section('content')
<!-- Post Content Column -->
<div class="container">
	<div class="row">
	<h2 class="mt-4">Preview posting</h2>
          <div class="col-md-8 col-sm-8 col-xs-8" style="font-size: larger; background:#fff;">

  <!-- Title -->
  <h2 class="mt-4">{{$post->title}}</h2>

  <!-- Author -->
  <p class="lead">
    by
    <a href="#">Admin</a>
  </p>

  <hr>
  <!-- Date/Time -->
  <p>Posted on {{$post->created_at}}</p>

  <hr>
  <!-- Preview Image -->
	<img src="{!! asset('asset/images/'.$post->image) !!}" alt="no logo"  width="100%" height="50%" >
  <hr>

  <!-- Post Content -->
  <p class="list">{{$post->desc}}</p>
  <hr>

  <!-- Comments Form -->
  
  <div class="panel panel-default">
        <div class="panel-heading">
            <li class="fa fa-pencil-square-o"></li>
                     Leave a Comment Not funcintion in preview:
        </div>
            <div class="panel-body">
				  <form method="GET" action="#" enctype="multipart/form-data">
					<div class="form-group">
					  <input type="text" class="form-control" name="nama" />
					</div>
					<div class="form-group">
					  <textarea class="form-control" name="isi" rows="3"></textarea>
					</div>
					<button type="button" class="btn btn-danger" >Back</button>
					<button  class="btn btn-primary">Submit</button>
				  </form>
            </div>
    </div>

	  <!-- Single Comment -->	 
	  
    <form id="destroy-all" action="{{ url('admin/delete_comment') }}" method="GET">
		<div class="panel panel-default" id="bgcomment">
			<div class="panel-body">
			
				<div class="panel panel-default">
					<div class="panel-body">
						<h4 class="">User name</h4>
						<div class="col-md-1">			
						<img class="d-flex mr-3 rounded-circle" src="{!! asset('asset/images/avatar.png')!!}" alt="">
						</div>
						<div class="col-md-10">	
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
  @stop  
	
    </div>
</div>

<div class="clearfix"></div>
