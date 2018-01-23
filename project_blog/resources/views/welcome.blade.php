@extends('layouts.visitor-layout')

@section('content')
<!-- Blog Entries Column -->
 <div class="container">
    <div class="row">
	 <div class="col-md-12">
            <legend><i class="fa fa-bulhorn"></i>Berita Terbaru</legend>
			@foreach($post as $data)
            <div class="col-md-4 col-xs-12">
              <div class="card white">
				<img class="thumbnail img-responsive"  src="{!! asset('asset/images/'.$data->image) !!}" alt="no logo" width="100%">	
                  <div class="card-block">
                    <div class="news-title">                   
                         <h2 class="title-small"><a href="{{ url('post/'.$data->id)}}">{{$data->title}}</a></h2> 
					</div>
                    <p class="card-text"><small class="text-time"><em>Posted on {{$data->created_at}}</em></small>  <small class="pull-right"> News</small> </p>
                  </div>
                </div>
            </div>
			@endforeach	
          </div>	  
        </div>
		
				<!-- perppage-->
				<?php echo str_replace('/?','?',$post->render());?>
      </div>
			 
@stop

 

