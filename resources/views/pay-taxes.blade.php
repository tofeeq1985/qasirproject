<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pay Taxes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('headerLinks')
    <link rel="stylesheet" href="css/pay-taxes.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Local Council Athority</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('councillors') }}" class="nav-link"> Councillors</a></li>
                    <li class="nav-item active"><a href="{{ route('pay-taxes') }}" class="nav-link">Pay Taxes</a></li>
                    <li class="nav-item"><a href="{{ route('properties') }}" class="nav-link">Properties</a></li>
                    <li class="nav-item"><a href="{{ route('complaint') }}" class="nav-link">Complaint</a></li>
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
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Pay Taxes <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Pay Taxes</h1>
                    <h2 class="text-center" style="color: white;margin-top:50px;">Have you cleared your taxes?<br> If
                        you have not, please clear your taxes before accessing our services.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section" style="padding-top: 3%;">
        <div class="container">
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h3 style="color: green">Guidance</h3>
                    <div style="margin-bottom: 40px;">To access the personal information of the guardian of your home, please enter your family code, provided by your local authority council. Then, select the tax you wish to pay and choose the number of persons for whom you're paying taxes. After obtaining the total amount of tax, click on the "Pay Taxes" button, then collect the challan from the council office.
                    </div>
                    <h2>Please complete the form below to submit your tax payment.</h2>
                    <div class="progress" >
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Loading....</div>
                      </div>
                    <!-- Search Bar  -->
                    <form class="bg-light" id="resident-form" method="POST">
                        @csrf
                        <div class="form-group" id="search-resident-form">
                            <input type="text" class="form-control" name="family_code"
                                placeholder=" 4 Digit Family Code">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Search" id="search-resident-button"
                                class="btn btn-primary  px-5">
                        </div>
                    </form>
                    <!--End of Search Bar  -->
                    <div class="alert alert-danger" role="alert">
                    </div>
                    <div class="alert alert-success alert-dismissible">
                    </div>
                    <!-- Tax Form  -->

                    <form class="bg-light" id="tax-form" method="POST">
                        @csrf
                        <div class="form-group" id="name">
                            <input type="text" class="form-control" name="name" readonly placeholder="Name">
                        </div>
                        <div class="form-group" id="phone">
                            <input type="text" class="form-control" name="phone" readonly placeholder="Phone number">
                        </div>
                        <div class="form-group" id="address">
                            <input type="text" class="form-control" name="address" readonly placeholder="Address">
                        </div>
                        <select class="custom-select form-group" id="tax" name="tax">
                            <option selected>Select Tax</option>
                            @foreach ($taxes as $key => $values)
                                <option value="{{ $values->tax_name }}">{{ $values->tax_name }}</option>
                            @endforeach
                        </select>
                        <div class="form-group" id="dollar">
                            <input type="text" class="form-control" name="dollars" readonly
                                placeholder="Tax/person">
                        </div>
                        <select class="custom-select form-group" id="persons" name="persons">
                            <option selected>Select Person</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <div class="form-group" id="total_tax">
                            <input type="text" class="form-control" readonly name="total_tax"
                                placeholder="Total Tax">
                        </div>
                        <div class="form-group" id="message">
                            <textarea cols="30" rows="7" class="form-control" name="message" placeholder="Any message?"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Pay taxes" class="btn btn-primary py-3 px-5">
                            <div class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                              </div>
                        </div>
                    </form>
                    <!-- End of tax form  -->

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
            $('#tax-form').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: "{{ route('send-tax') }}",
                    type: "POST",
                    data: formData,
                    beforeSend: function() {
                        $('.alert-danger').css('display', 'none')
                        $('.alert-success').css('display', 'none')
                        $('.spinner-border').css('display','inline-block');
                    },
                    success: function(response) {
                        $('.spinner-border').css('display', 'none')
                        if (response.errors) {
                            var errorHtml = '<ul>';
                            $.each(response.errors, function(key, value) {
                                errorHtml += '<li>' + value + '</li>';
                            });
                            errorHtml += '</ul>';
                            $('.alert-danger').html(errorHtml).show();

                            $('html, body').animate({
                                scrollTop: $('.alert-danger').offset().top -
                                    90 // Adjusted offset by subtracting 50 pixels
                            }, 1000); // Animation duration set to 1000 milliseconds (1 second)

                        } else if (response.success) {
                            $('.spinner-border').css('display', 'none')
                            Swal.fire({
                                title: "Thank you for filling out the form",
                                text: "Your data has been successfully sent to our authority. Please collect your challan copy from the council office to submit the challan on time.",
                                icon: "success"
                            });
                            $('#tax-form')[0].reset();
                            $('#resident-form')[0].reset();
                        }
                    }
                });
            });
            $('#resident-form').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: "{{ route('search-resident') }}",
                    type: "POST",
                    data: formData,
                    beforeSend: function() {
                        $('.alert-danger').css('display', 'none')
                        $('.alert-success').css('display', 'none')
                        $('.progress').css('display', 'block')
                    },
                    success: function(response) {
                        if (response.errors) {
                            $('.progress').css('display', 'none')
                            var errorHtml = '<ul>';
                            $.each(response.errors, function(key, value) {
                                errorHtml += '<li>' + value + '</li>';
                            });
                            errorHtml += '</ul>';
                            $('.alert-danger').html(errorHtml).show();
                        } else if (response.status === 'failed') {
                            $('.progress').css('display', 'none')
                            $('.alert-danger').css('display', 'block');
                            $('.alert-danger').html(
                                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                                response.message);
                        } else {
                            $('.progress').css('display', 'none')
                            $('.alert-success').css('display', 'block');
                            $('.alert-success').html(
                                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                                'Your credentials have been matched with our authority. Please fill out the complete form below.'
                            );
                            var residentData = response.resident_data;
                            var resident_record = residentData[0];
                            $('#name input').val(resident_record.name);
                            $('#phone input').val(resident_record.phone_number);
                            $('#address input').val(resident_record.address);
                        } 
                    }

                });
            });
            $("#tax").change(function() {
                $('#tax').css('border', 'none');
                var selectedValue = $(this).val();
                $.ajax({
                    url: "{{ route('show-tax') }}",
                    type: "GET",
                    data: {
                        selected_value_key: selectedValue
                    },
                    success: function(response) {
                        var single_tax_row = response.taxes_row_key;
                        var tax_data = single_tax_row[0];
                        $('#dollar input').val("$" + tax_data.tax_amount);
                    }
                });
            });

            $("#persons").change(function() {
                var taxValue = $('#dollar input').val();
                if (taxValue.trim() !== '') {
                    calculateTotalTax();
                } else {
                    $('#tax').css('border-color', 'red');
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Please select the tax first!",
                    });
                    $("#persons").val('');
                }
            });

            function calculateTotalTax() {
                var dollarInput = $('#dollar input').val();
                var numericalPart = parseInt(dollarInput.substring(1));
                var personSelect = parseInt($('#persons').val());
                var totalTax = numericalPart * personSelect;
                $('#total_tax input').val("$" + totalTax);
            }
        });
    </script>

</body>

</html>
