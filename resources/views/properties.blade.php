<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Properties</title>
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
				<li class="nav-item"><a href="{{route('councillors')}}" class="nav-link"> Councillors</a></li>
				<li class="nav-item"><a href="{{route('pay-taxes')}}" class="nav-link">Pay Taxes</a></li>
				<li class="nav-item active"><a href="{{route('properties')}}" class="nav-link">Properties</a></li>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Properties <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Properties</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section goto-here">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Properties</h2>
          </div>
        </div>
        <div class="row">
			@foreach ($properties as $key=>$values )
        	<div class="col-md-4">
        		<div class="property-wrap ftco-animate">
        			<a href="{{route('property' ,$values->encrypted_id)}}" class="img" style="background-image: url(property-images/{{$values->property_image}});">
        				<div class="rent-sale">
        					<span class="{{$values->status}}">{{$values->status}}</span>
        				</div>
        				<p class="price"><span class="orig-price">{{$values->price}}</span></p>
        			</a>
        			<div class="text">
        				<ul class="property_list">
        					<li><span class="flaticon-floor-plan"></span>{{$values->area}} sqft</li>
        				</ul>
        				<h3><a href="">{{$values->name}}</a></h3>
        				<a href="{{route('property' , $values->encrypted_id)}})}}" class="d-flex align-items-center justify-content-center btn-custom">
        					<span class="fa fa-link"></span>
        				</a>
        				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
        					<div class="d-flex align-items-center">
	        					<div class="img" style="background-image: url(property-owner-images/{{$values->owner_image}});"></div>
	        					<h3 class="ml-2">{{$values->owner}}</h3>
	        				</div>
        				</div>
						<p style="margin:30px 0px 0px 0px;"><a href="{{ route('property' , $values->encrypted_id)}}) }}" class="btn btn-primary">See Details</a></p>
        			</div>
        		</div>
        	</div>
			@endforeach
        </div>
    	</div>
    </section>

	@include('footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @include('JSLinks')    
    
  </body>
</html>