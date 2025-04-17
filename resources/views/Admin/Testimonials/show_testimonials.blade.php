@extends('Admin.Layouts.Master')

@section('title', __('keywords.Show testimonials'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow w-100" style="max-width: 800px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.Show testimonials') }}</h4>

                <div class="mb-3">
                    <label class="form-label fw-bold">{{ __('keywords.name') }}</label>
                    <p class="form-control">{{ $testimonial->name }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">{{ __('keywords.position') }}</label>
                    <p class="form-control">{{ $testimonial->position }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">{{ __('keywords.image') }}</label><br>
                    <img src="{{ asset('uploads/members/' . $testimonial->image) }}" alt="image" width="100" height="100">
                </div>
                <div class="form-group mb-3">
                    <label for="message" class="form-label fw-bold">💬 {{ __('keywords.message') }}</label>
                    <textarea class="form-control" rows="4" readonly style="resize: none;">{{$testimonial->description}}</textarea>
                </div>

            </div>
        </div>
    </div>
@endsection
