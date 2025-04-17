@extends('Theme.Layout.Master')
@section('title','home')
@section('Home-active','active')
@section('learn_more')
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                    <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                    <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{asset('Front')}}/img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{asset('Front')}}/img/about.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                    <h2 class="mb-4">Award Wining Consultancy Agency For Your Business</h2>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod</p>
                    <div class="row g-3 mb-4">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Business Planning</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-chart-line text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Financial Analaysis</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <x-Success_alertcomponent></x-Success_alertcomponent>
    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>

                    <form method="POST" action="{{ route('admin-subscribers-store') }}" class="position-relative w-100 mt-3">
                        @csrf
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input
                            type="text"
                            name="email"
                            class="form-control border-0 rounded-pill w-100 ps-4 pe-5"
                            placeholder="Enter Your Email"
                            required
                            style="height: 48px;"
                        >
                        <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                            <i class="fa fa-paper-plane text-primary fs-4"></i>
                        </button>
                    </form>
                </div>

                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;" src="{{asset('Front')}}/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter End -->


    <!-- Service Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                <h2 class="mb-5">We Provide Solutions On Your Business</h2>
            </div>
            <div class="row g-4">
               <x-Services_compo/>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Features</div>
                    <h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
                    <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                      <x-Features_compo/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Client Start -->
    <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-1.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-2.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-3.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-4.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-5.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-6.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-7.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{asset('Front')}}/img/logo-8.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Client End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
             <x-Testimonial_compo/>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div>
                <h2 class="mb-5">Meet Our Team Members</h2>
            </div>

            <div class="row g-4"> <!-- صف واحد فقط لجميع العناصر -->
              <x-Members_compo/>
            </div>

        </div>
    </div>
    <!-- Team End -->
@endsection
