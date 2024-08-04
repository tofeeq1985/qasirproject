<!DOCTYPE html>
<html lang="en">

<head>
    <title>Complaint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('headerLinks')
    <style>
        .alert-danger {
            display: none;
        }
        .spinner-border {
            display: none;
            margin-left: 20px;
        }
    </style>
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
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('councillors') }}" class="nav-link"> Councillors</a></li>
                    <li class="nav-item"><a href="{{ route('pay-taxes') }}" class="nav-link">Pay Taxes</a></li>
                    <li class="nav-item"><a href="{{ route('properties') }}" class="nav-link">Properties</a></li>
                    <li class="nav-item active"><a href="{{ route('complaint') }}" class="nav-link">Complaint</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Complaint <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Complaint</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">If you got any complaint <br>please do not hesitate to send us a message
                    </h2>
                    <div class="alert alert-danger" role="alert">
                    </div>
                    <form method="POST" id="complaint-form" class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" class="form-control" name="complaint" placeholder="Complaint"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send complaint" class="btn btn-primary py-3 px-5">
                            <div class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="fa fa-map"></span>
                            </div>
                            <p><span>Address:</span> 2 Summer Row, Birmingham B3 1JB</p>
                        </div>
                        <div class="col-md-4 text-center border-height py-4">
                            <div class="icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="tel://1234567920">+44 121 604 1000</a></p>
                        </div>
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@UniversityCollegeBirmingham.com</a></p>
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
    <script>
        $(document).ready(function() {
            $('#complaint-form').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: "{{ route('send-complaint') }}",
                    type: "POST",
                    data: formData,
                    beforeSend: function() {
                        $('.alert-danger').css('display', 'none')
                        $('.progress').css('display', 'block')
                        $('.spinner-border').css('display','inline-block');
                    },
                    success: function(response) {
                        if (response.errors) {
                            $('.spinner-border').css('display', 'none')
                            $('.progress').css('display', 'none')
                            var errorHtml = '<ul>';
                            $.each(response.errors, function(key, value) {
                                errorHtml += '<li>' + value + '</li>';
                            });
                            errorHtml += '</ul>';
                            $('.alert-danger').html(errorHtml).show();
                            $('html, body').animate({
                                scrollTop: $('.alert-danger').offset().top - 90 // Adjusted offset by subtracting 50 pixels
                            }, 1000); // Animation duration set to 1000 milliseconds (1 second)

                        } else if (response.success) {
                            $('.spinner-border').css('display', 'none')
                            $('.progress').css('display', 'none')
                            Swal.fire({
                                title: "Thankyou for complaint",
                                text: "Your Complaint has been succesfully sent to our authority",
                                icon: "success"
                            });
                            $('#complaint-form')[0].reset();
                        }
                    },
                });
            });
        });
    </script>

</body>

</html>
