<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home &mdash; Trade Fair</title>

    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="top-bar py-2" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-right order-lg-2">
                    <ul class="social-media m-0 p-0">
                        <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
                        <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
                        <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
                        <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-center text-lg-left order-lg-1">
                    <p class="mb-0 d-inline-flex">
                        <span class="mr-3"><a href="tel://#" class="d-flex align-items-center"><span class="icon-phone mr-2"></span><span>+1 234 5678 9101</span></a></span>
                        <span><a href="tel://#" class="d-flex align-items-center"><span class="icon-envelope mr-2"></span><span>info@domain.com</span></a></span>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-11 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="index-2.html" class="mb-0">Trade Fair<span class="text-primary">.</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                            <li><a href="{{route('home')}}" class="nav-link">Apply To Exhibit</a></li>
                            <li><a href="{{route('home')}}" class="nav-link">Sponsors</a></li>
                            <li>
                                <a href="{{route('home')}}" class="nav-link">Vendors</a>
                            </li>
                            <li><a href="{{route('home')}}" class="nav-link">Gallery</a></li>
                            <li><a href="{{route('home')}}" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>

    <div class="particlehead"></div>


    <section class="site-section" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="site-section-heading"></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5">



                    <form method="POST" action="{{route('store-vendor')}}" class="p-5 bg-white">
                    @csrf
                        <h2 class="h4 mb-5">Vendor Registration Form</h2>

                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                <p>{{ Session::get('error') }}</p>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" name="first_name" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" name="last_name" id="lname" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-6">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="text-black" for="subject">Phone</label>
                                <input type="subject" name="phone" id="subject" class="form-control">
                            </div>
                        </div>


                        <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                        <input type="hidden" name="orderID" value="345">
                        <input type="hidden" name="amount" value="1000"> {{-- required in kobo --}}
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="currency" value="NGN">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

                        <input type="hidden" name="split_code" value="SPL_EgunGUnBeCareful"> {{-- to support transaction split. more details https://paystack.com/docs/payments/multi-split-payments/#using-transaction-splits-with-payments --}}
{{--                        <input type="hidden" name="split" value="{{ json_encode($split) }}">--}}


                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Register" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                             class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                             alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form class="px-md-2">

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Name</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline datepicker">
                                            <input type="text" class="form-control" id="exampleDatepicker1" />
                                            <label for="exampleDatepicker1" class="form-label">Select a date</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <select class="select">
                                            <option value="1" disabled>Gender</option>
                                            <option value="2">Female</option>
                                            <option value="3">Male</option>
                                            <option value="4">Other</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="mb-4">

                                    <select class="select">
                                        <option value="1" disabled>Class</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 2</option>
                                        <option value="4">Class 3</option>
                                    </select>

                                </div>

                                <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                    <div class="col-md-6">

                                        <div class="form-outline">
                                            <input type="text" id="form3Example1w" class="form-control" />
                                            <label class="form-label" for="form3Example1w">Registration code</label>
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer.footer')

</div> <!-- .site-wrap -->

@include('layouts.scripts.scripts')



</body>

<!-- Mirrored from themewagon.github.io/strategy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 08:57:12 GMT -->
</html>
