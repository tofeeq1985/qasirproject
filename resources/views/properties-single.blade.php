<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Property</title>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="properties.html">Properties <i class="fa fa-chevron-right"></i></a></span> <span>Properties Single <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Property Details</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="property-details">
      				<div class="img" style="background-image: url(property-images/{{$property_features->property_image}});">
			          	<span class="fa fa-play"></span>
			          </a>
      				</div>
      				<div class="text">
      					<h2>{{$property_features->name}}</h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="fa fa-check-circle"></span>Lot Area: {{$property_features->lot_area}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Bed Rooms: {{$property_features->bed_rooms}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Bath Rooms: {{$property_features->bath_rooms}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Luggage: {{$property_features->luggage}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Garage: {{$property_features->garage}}</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="fa fa-check-circle"></span>Floor Area: {{$property_features->floor_area}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Year Build: {{$property_features->year_built}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Water: {{$property_features->water}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Stories: {{$property_features->stories}}</li>
						    				<li class="check"><span class="fa fa-check-circle"></span>Roofing: {{$property_features->roofing}}</li>
						    			</ul>
						    		</div>
						    	</div>
								<p style="margin: 30px 0px 0px 0px;"><a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a></p>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p>{{$property_features->description}}</p>
							  <p style="margin: 30px 0px 0px 0px;"><a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a></p>

						    </div>
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