@extends('Theme.Layout.Master')
@section('title','services')
@section('services-active','active')
@section('learn_more')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white"  href="{{route('home')}}">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')

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
@endsection
