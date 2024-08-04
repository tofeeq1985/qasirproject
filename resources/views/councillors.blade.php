<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Councillors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	@include('headerLinks')
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			<a class="navbar-brand" href="{{route('home')}}">Local Council Athority</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
				<li class="nav-item active"><a class="nav-link"> Councillors</a></li>
				<li class="nav-item"><a href="{{route('pay-taxes')}}" class="nav-link">Pay Taxes</a></li>
				<li class="nav-item"><a href="{{route('properties')}}" class="nav-link">Properties</a></li>
				<li class="nav-item"><a href="{{route('complaint')}}" class="nav-link">Complaint</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-0 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Councillors <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Councillors</h1>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-agent">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Councellors</span>
            <h2 class="mb-4">Our Councellors</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
		    				<div class="desc">
		    					<h3><a>Carlos Henderson</a></h3>
		    				</div>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a>Mike Bochs</a></h3>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a>Jessica Moore</a></h3>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a>Sarah Geronimo</a></h3>
	    				</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>


    @include('footer')
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  @include('JSLinks')    

  </body>
</html>