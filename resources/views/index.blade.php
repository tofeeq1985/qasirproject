<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('headerLinks')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Local Council Athority</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" 
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('councillors') }}" class="nav-link"> Councillors</a></li>
                    <li class="nav-item"><a href="{{ route('pay-taxes') }}" class="nav-link">Pay Taxes</a></li>
                    <li class="nav-item"><a href="{{ route('properties') }}" class="nav-link">Properties</a></li>
                    <li class="nav-item"><a href="{{ route('complaint') }}" class="nav-link">Complaint</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Our Community <br>Connecting Residents to the Resources and Services.</h1>
                        <p style="font-size: 18px;">Empowering, Engaging, and Enriching Lives in Your Area.</p>
                        <p><a href="{{ route('about') }}" class="btn btn-primary py-3 px-4">Know more about us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-business"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Trusted by Thousands</h3>
                            <p>Our mission is to empower and engage residents through our Trusted Resident program.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-home"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Wide Range of Properties</h3>
                            <p>Looking for your dream home, a prime commercial space, or the perfect location for your
                                next investment opportunity? </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-stats"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Serve For Taxes</h3>
                            <p>we are committed to providing residents with clear, tax system that supports our
                                community's needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-quarantine"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Complaint Service</h3>
                            <p>Our Resident Complaint Service is designed to report issues, and seek resolution to
                                problems affecting our community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Featured Properties</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-properties owl-carousel">
                        <div class="item">
                            <div class="property-wrap ftco-animate">
                                <a href="{{ route('properties') }}" class="img"
                                    style="background-image: url(images/work-1.jpg);">
                                    <div class="rent-sale">
                                        <span class="sale">Sale</span>
                                    </div>
                                    <p class="price"><span class="orig-price">£300,000</span></p>
                                </a>
                                <div class="text">
                                    <ul class="property_list">
                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                                    </ul>
                                    <h3><a href="{{ route('properties') }}">Townhouse</a></h3>
                                    <a href="{{ route('properties') }}"
                                        class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                        <div class="d-flex align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-wrap ftco-animate">
                                <a href="{{ route('properties') }}" class="img"
                                    style="background-image: url(images/work-2.jpg);">
                                    <div class="rent-sale">
                                        <span class="rent">Rent</span>
                                    </div>
                                    <p class="price"><span class="old-price">800,000</span><span
                                            class="orig-price">£3,050<small> / mo</small></span></p>
                                </a>
                                <div class="text">
                                    <ul class="property_list">
                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                                    </ul>
                                    <h3><a href="{{ route('properties') }}">Houseboats</a></h3>
                                    <a href="{{ route('properties') }}"
                                        class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                        <div class="d-flex align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-wrap ftco-animate">
                                <a href="{{ route('properties') }}" class="img"
                                    style="background-image: url(images/work-3.jpg);">
                                    <div class="rent-sale">
                                        <span class="rent">Rent</span>
                                    </div>
                                    <p class="price"><span class="orig-price">£300<small> / mo</small></span></p>
                                </a>
                                <div class="text">
                                    <ul class="property_list">
                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                                    </ul>
                                    <h3><a href="{{ route('properties') }}">Triplexes</a></h3>
                                    <a href="{{ route('properties') }}"
                                        class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                        <div class="d-flex align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-wrap ftco-animate">
                                <a href="{{ route('properties') }}" class="img"
                                    style="background-image: url(images/work-4.jpg);">
                                    <div class="rent-sale">
                                        <span class="rent">Rent</span>
                                    </div>
                                    <p class="price"><span class="orig-price">£300<small> / mo</small></span></p>
                                </a>
                                <div class="text">
                                    <ul class="property_list">
                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                                    </ul>
                                    <h3><a href="{{ route('properties') }}">The Blue Sky Home</a></h3>
                                    <a href="{{ route('properties') }}"
                                        class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                        <div class="d-flex align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-wrap ftco-animate">
                                <a href="{{ route('properties') }}" class="img"
                                    style="background-image: url(images/work-5.jpg);">
                                    <div class="rent-sale">
                                        <span class="rent">Rent</span>
                                    </div>
                                    <p class="price"><span class="orig-price">£300<small> / mo</small></span></p>
                                </a>
                                <div class="text">
                                    <ul class="property_list">
                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                                    </ul>
                                    <h3><a href="{{ route('properties') }}">Ali complex</a></h3>
                                    <a href="{{ route('properties') }}"
                                        class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                        <div class="d-flex align-items-center">
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

    <section class="ftco-section services-section bg-darken">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Work flow</span>
                    <h2 class="mb-3">How it works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
                                <img src="images/blob.svg" alt="">
                            </div>
                            <h3>Pay Taxes</h3>
                            <p>Before proceeding, you must fulfill all tax obligations as required by the local
                                authorities</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
                                <img src="images/blob.svg" alt="">
                            </div>
                            <h3>Purchase Property</h3>
                            <p>Once taxes are settled, you can proceed with acquiring property according to your
                                preferences </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
                                <img src="images/blob.svg" alt="">
                            </div>
                            <h3>Objection</h3>
                            <p>You have the right to raise objections within your community, such as damaged
                                streetlights etc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
                                <img src="images/blob.svg" alt="">
                            </div>
                            <h3>Wait for response</h3>
                            <p>After raising your concern, patiently await a response from the relevant authority.</p>
                        </div>
                    </div>
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

                        <p>We are dedicated to serving our community with integrity, transparency, and efficiency. As
                            the governing body for this area, we strive to provide essential services and support that
                            enhance the quality of life for all residents.

                            Our mission is to foster a vibrant and inclusive community where every individual feels
                            valued and empowered. We are committed to promoting economic growth, ensuring public safety,
                            property service , preserving our natural environment, and advocating for the needs and
                            interests of our diverse population.

                            With a team of dedicated professionals and elected officials, we work tirelessly to address
                            the challenges and opportunities facing our community. Through collaboration and engagement
                            with residents, businesses, and stakeholders, we seek to build consensus and implement
                            innovative solutions that make a positive impact.
                        </p>
                        <p> Thank you for visiting our Local Authority Council website. Together, we can build a
                            stronger, more resilient community for generations to come.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter" >
        <div class="container">
            <div class="row pt-md-5" style="margin-left: 40px;">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-5 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="9900">0</strong>
                            <span>Area <br>Population</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-5 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="2500">0</strong>
                            <span>Total <br> Properties</span>
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
                                    <p class="mb-4">I feel proud to be part of a community that is so well-managed
                                        and forward-thinking.Iam extreamly satisfy by their services</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
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
                                    <p class="mb-4">This council consistently goes above and beyond to make our
                                        community a wonderful place to live. </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
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
                                    <p class="mb-4">The council has been instrumental in helping us settle in,
                                        providing valuable information about local schools</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
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
                                    <p class="mb-4">As a small business owner, I've been impressed by the support and
                                        resources offered by Local Authority Council.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
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
                                    <p class="mb-4"> The council makes it easy to get involved and make a difference.
                                        I'm proud to be part of such a caring and engaged community.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
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
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('JSLinks')

</body>

</html>
