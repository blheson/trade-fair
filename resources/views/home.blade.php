
@include('layouts.app.app')


    <div class="particlehead"></div>
{{--    <div class="container">--}}
    <div class="site-blocks-cover">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10 text-center">
                            <h1>#NBCTRADEFAIR 2023 <span class="typed-words"></span></h1>
                            <p class="lead mb-5">Creating business visibility for MSME & Women in business. <a href="">become a vendor</a></p>
                            <div>
                                <a href="#buyer-section" class="btn btn-primary btn-md">Register As Buyer</a>
                                <a href="#vendor-section" class="btn btn-primary btn-md">Register As Vendor</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->



    <section class="site-section" id="buyer-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="site-section-heading">Register As Buyer</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5">



                    <form method="POST" action="{{route('store-buyer')}}" class="p-5 bg-white">
                        @csrf
                        <h2 class="h4 mb-5">Buyers Registration Form</h2>

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

    <section class="site-section" id="vendor-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="site-section-heading">Register As Vendor</h2>
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



    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col" data-aos="fade-in" data-aos-delay="0">
                    <img src="assets/images/clients-05.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col" data-aos="fade-in" data-aos-delay="100">
                    <img src="assets/images/clients-02.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col" data-aos="fade-in" data-aos-delay="200">
                    <img src="assets/images/clients-03.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col" data-aos="fade-in" data-aos-delay="300">
                    <img src="assets/images/clients-01.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col" data-aos="fade-in" data-aos-delay="400">
                    <img src="assets/images/clients-04.svg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>



    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-lg-0 mb-4">
                    <div class="box-with-humber bg-white p-5">
                        <span class="icon icon-format_paint mr-2 text-primary h3 mb-3 d-block"></span>
                        <h2 class="text-primary">Brand Strategy</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
                        <ul class="list-unstyled ul-check primary">
                            <li>Customer Experience</li>
                            <li>Product Management</li>
                            <li>Proof of Concept</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-lg-0 mb-4" data-jarallax-element="-50">
                    <div class="box-with-humber bg-white p-5">
                        <span class="icon icon-palette mr-2 text-primary h3 mb-3 d-block"></span>

                        <h2 class="text-primary">Visual Identity</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
                        <ul class="list-unstyled ul-check primary">
                            <li>Web Design</li>
                            <li>Branding</li>
                            <li>Web &amp; App Development</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-lg-0 mb-4" data-jarallax-element="20">
                    <div class="box-with-humber bg-white p-5">
                        <span class="icon icon-laptop2 mr-2 text-primary h3 mb-3 d-block"></span>

                        <h2 class="text-primary">Web Design</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
                        <ul class="list-unstyled ul-check primary">
                            <li>Social Media</li>
                            <li>Paid Campaigns</li>
                            <li>Marketing &amp; SEO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-lg-5" data-jarallax-element="-50">
                    <h2 class="text-primary">Web Design</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
                    <ul class="list-unstyled ul-check primary">
                        <li>Social Media</li>
                        <li>Paid Campaigns</li>
                        <li>Marketing &amp; SEO</li>
                    </ul>
                </div>

                <div class="col-lg-6" data-jarallax-element="50">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="work-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="site-section-heading text-center">#NBCTRADEFAIR IN PICTURES</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, itaque neque, delectus odio iure explicabo.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/1.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/1.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/2.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/2.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/3.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/3.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/4.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/4.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/5.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/5.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/6.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/6.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>


                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/7.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/7.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/8.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/8.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/9.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/9.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/10.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/10.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/11.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/11.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="assets/images/12.jpg" class="media-1" data-fancybox="gallery">
                        <img src="assets/images/12.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>


            </div>
        </div>
    </section>

    <section class="section ft-feature-1">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-12 w-100 ft-feature-1-content">
                    <div class="row align-items-center">
                        <div class="col-lg-5"  data-jarallax-element="50">

                            <img src="images/img_13.jpg" alt="Image" class="img-fluid mb-4 mb-lg-0">

                        </div>
                        <div class="col-lg-3 ml-auto" data-jarallax-element="-50">
                            <div class="mb-5">
                                <h3 class="d-flex align-items-center"><span class="icon icon-beach_access mr-2"></span><span>Strategy</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                                <p><a href="#">Read More</a></p>
                            </div>

                            <div>
                                <h3 class="d-flex align-items-center"><span class="icon icon-build mr-2"></span><span>Web Development</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                                <p><a href="#">Read More</a></p>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="mb-5">
                                <h3 class="d-flex align-items-center"><span class="icon icon-format_paint mr-2"></span><span>Art Direction</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                                <p><a href="#">Read More</a></p>
                            </div>

                            <div>
                                <h3 class="d-flex align-items-center"><span class="icon icon-question_answer mr-2"></span><span>Copywriting</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ab nihil quam nesciunt.</p>
                                <p><a href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section testimonial-wrap">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="site-section-heading text-center">Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">
            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-block align-items-center justify-content-center">
                        <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>John Smith</p>
                    </figure>
                </div>
            </div>
            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-block align-items-center justify-content-center">
                        <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>Christine Aguilar</p>
                    </figure>

                </div>
            </div>

            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-block align-items-center justify-content-center">
                        <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>Robert Spears</p>
                    </figure>


                </div>
            </div>

            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-block align-items-center justify-content-center">
                        <div><img src="images/person_5.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>Bruce Rogers</p>
                    </figure>

                </div>
            </div>

        </div>
    </section>

    <section class="site-section border-bottom" id="services-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center" data-aos="fade-up">
                    <h2 class="site-section-heading text-center">Our Services</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
                        <div>
                            <h3>Web Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-shopping_cart"></span></div>
                        <div>
                            <h3>eCommerce</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
                        <div>
                            <h3>Web Applications</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-format_paint"></span></div>
                        <div>
                            <h3>Branding</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-extension"></span></div>
                        <div>
                            <h3>Copy Writing</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
                        <div>
                            <h3>Mobile Applications</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="site-section" id="about-section">
        <div class="container">
            <div class="row mb-5">

                <div class="col-md-5 ml-auto mb-5 order-md-2"  data-jarallax-element="50">
                    <img src="images/img_13.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1"  data-jarallax-element="-50">

                    <div class="row">

                        <div class="col-12">
                            <div class="text-left pb-1">
                                <h2 class="site-section-heading">About Us</h2>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
                        </div>
                        <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                            <div class="unit-4">
                                <div class="unit-4-icon mr-4 mb-3"><span class="text-primary icon-phonelink"></span></div>
                                <div>
                                    <h3>Web &amp; Mobile Specialties</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                                    <p class="mb-0"><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                            <div class="unit-4">
                                <div class="unit-4-icon mr-4 mb-3"><span class="text-primary icon-extension"></span></div>
                                <div>
                                    <h3>Intuitive Thinkers</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                                    <p class="mb-0"><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="site-section border-bottom" id="team-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="site-section-heading">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="person text-center bg-white p-4">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                        <h3>John Rooster</h3>
                        <p class="position text-muted">Co-Founder, President</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                        <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <div class="person text-center bg-white p-4">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                        <h3>Tom Sharp</h3>
                        <p class="position text-muted">Co-Founder, COO</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                        <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                    <div class="person text-center bg-white p-4">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                        <h3>Winston Hodson</h3>
                        <p class="position text-muted">Marketing</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                        <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="site-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="site-section-heading text-center">Blog</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Create Beautiful Website In Less Than An Hour</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        <p><a href="#">Continue Reading...</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Create Beautiful Website In Less Than An Hour</a></h2>
                        <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        <p><a href="#">Continue Reading...</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Create Beautiful Website In Less Than An Hour</a></h2>
                        <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        <p><a href="#">Continue Reading...</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="site-section" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="site-section-heading">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5">



                    <form action="#" class="p-5 bg-white">

                        <h2 class="h4 mb-5">Contact Form</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </section>


    @include('layouts.footer.footer')

</div> <!-- .site-wrap -->

@include('layouts.scripts.scripts')

</body>
</html>