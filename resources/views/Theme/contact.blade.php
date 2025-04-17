@extends('Theme.Layout.Master')
@section('title','contact')
@section('contact','active')
@section('learn_more')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" {{route('home')}}>Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" {{route('home')}}>Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
                <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <x-Success_alertcomponent></x-Success_alertcomponent>

                    <form method="Post" action="{{route('admin-message-store')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                @error('subject')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
