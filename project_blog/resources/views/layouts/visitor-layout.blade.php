<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arial:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('asset/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('asset/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('asset/css/menu.css') !!}" rel="stylesheet">	
      <script src="{!! asset('asset/js/jquery.js') !!}"></script>
	
	
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
$(document).ready(function() {

	/* MAIN MENU */
	$('#main-menu > li:has(ul.sub-menu)').addClass('parent');
	$('ul.sub-menu > li:has(ul.sub-menu) > a').addClass('parent');

	$('#menu-toggle').click(function() {
		$('#main-menu').slideToggle(300);
		return false;
	});

	$(window).resize(function() {
		if ($(window).width() > 700) {
			$('#main-menu').removeAttr('style');
		}
	});

});
// function back to top
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$('#tombolScrollTop').fadeIn();
		} else {
			$('#tombolScrollTop').fadeOut();
		}
	});
});

function scrolltotop()
{
	$('html, body').animate({scrollTop : 0},500);
}
</script>
  </head>
  <body>
<div class="menu-wrapper">
<a id="menu-toggle" title="Menu"><i class="fa fa-th"></i></a>
	<div class="container">	
		<div class="row">	
			<nav id="navigation">
				<ul id="main-menu">
					<li><a href="{{ url('home')}}">HOME</a></li>		
				</ul>
			</nav>
		</div>
	</div>
</div>	
	

    <section id="menukedua">
      <nav class="navbar-inverse" role="navigation" id="navbar">
          <div class="container">
              <h1 style="color:#fff;">Testing Framework Laravel</h1>
           
          </div>
          <!-- /.container -->
    </nav>
    </section>
	
   <br>

    <section id="mainpertama">
     
@yield('content')

    </section>


    <section id="mainkedua">
      <div class="container">
        <div class="row">  
		
		 <div class="col-md-4"><br>
            <legend>About Us</legend>
           	<div class="list-group">
			  <button type="button" class="list-group-item list-group-item-action active">
				PT Ednovate Indonesia
			  </button>
			  <a class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
				  <h5 class="mb-1">Description</h5>
				</div>
				<p class="mb-1">{{$pt}}</a>
			</div>
          </div>
		  
		  <div class="col-md-4"><br>
            <legend>Laravel FrameWork</legend>
           	<div class="list-group">
			  <button type="button" class="list-group-item list-group-item-action active">
				Laravel FrameWork
			  </button>
			  <a class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
				  <h5 class="mb-1">Description</h5>
				</div>
				<p class="mb-1">{{$laravel}}</a>
			</div>
          </div>
		  
		  <div class="col-md-4"><br>
            <legend>Testing</legend>
			 <button type="button" class="list-group-item list-group-item-action active">
				Bug Fixed
			  </button>
           	<ul class="list-group">			
			<li class="list-group-item list-group-item-primary">Admin</li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				+ Lihat Semua Komentar
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			   <li class="list-group-item d-flex justify-content-between align-items-center">
				+ Delete Komentar
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				+ Delete Komentar di positngan hanya bisa di lihat admin saja
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			  <li class="list-group-item list-group-item-primary">Page</li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				+ add Komentar
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			   <li class="list-group-item d-flex justify-content-between align-items-center">
				+ Delete Komentar
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			    <li class="list-group-item list-group-item-primary">Visitor</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				+ view image artikel
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
				+ Remove Nav Bar Login dan Register
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			   <li class="list-group-item d-flex justify-content-between align-items-center">
				+ Add pagenation visitor page
				<span class="badge"><i class="fa fa-check"></i></span>
			  </li>
			  
			</ul>
        </div>
		  
        </div>		 
      </div>
    </section>

    <footer>
      <div class="copyright">
        <div class="container">
          <div class="col-md-6">
            <p>© 2018 - All Rights</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
  </html>
