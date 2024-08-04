<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('headerLinks')
  </head>

  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}">Local Council Athority</a>
	      <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="{{route('about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{route('councillors')}}" class="nav-link"> Councillors</a></li>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-7 order-md-last d-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.jpg);"></div>
						<div class="img w-100 img-2 ml-md-2" style="background-image: url(images/about-2.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section pr-md-5">
	            <h2 class="mb-4">Local Council</h2>

	            <p>We are dedicated to serving our community with integrity, transparency, and efficiency. As the governing body for this area, we strive to provide essential services and support that enhance the quality of life for all residents.

					Our mission is to foster a vibrant and inclusive community where every individual feels valued and empowered. We are committed to promoting economic growth, ensuring public safety, property service , preserving our natural environment, and advocating for the needs and interests of our diverse population.
					
					With a team of dedicated professionals and elected officials, we work tirelessly to address the challenges and opportunities facing our community. Through collaboration and engagement with residents, businesses, and stakeholders, we seek to build consensus and implement innovative solutions that make a positive impact.
					</p>
	            <p>	Thank you for visiting our Local Authority Council website. Together, we can build a stronger, more resilient community for generations to come.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row pt-md-5" style="margin-left: 40px;">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="990000">0</strong>
                <span>Area <br>Population</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2500">0</strong>
                <span>Total <br>Properties</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="500">0</strong>
                <span>Average Taxes<br>Recieved</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-5 mb-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Residents</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">I feel proud to be part of a community that is so well-managed and forward-thinking.Iam extreamly satisfy by their services</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Joseph</p>
		                    <span class="position">Politician</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">This council consistently goes above and beyond to make our community a wonderful place to live. </p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Michael</p>
		                    <span class="position">CEO Textile Company</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">The council has been instrumental in helping us settle in, providing valuable information about local schools</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Luke</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">As a small business owner, I've been impressed by the support and resources offered by Local Authority Council.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Mark</p>
		                    <span class="position">Professor</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4"> The council makes it easy to get involved and make a difference. I'm proud to be part of such a caring and engaged community.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Matthew</p>
		                    <span class="position">Vice chancellor</span>
		                  </div>
	                  </div>
                  </div>
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