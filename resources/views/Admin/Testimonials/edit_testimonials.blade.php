@extends('Admin.Layouts.Master')

@section('title', __('keywords.update_testimonials'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow w-100" style="max-width: 800px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.update_testimonials') }}</h4>

                <form action="{{ route('admin-testimonials-update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-bold">{{ __('keywords.name') }}</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $testimonial->name) }}">
                        @error('name')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">{{ __('keywords.position') }}</label>
                        <input type="text" name="position" class="form-control" value="{{ old('position', $testimonial->position) }}">
                        @error('position')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">{{ __('keywords.image') }}</label><br>
                        <img src="{{ asset('uploads/members/' . $testimonial->image) }}" width="80" height="80" class="mb-2">
                        <input type="file" name="image" class="form-control">
                        @error('image')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="message" class="form-label fw-bold">💬 {{__('keywords.description')}}</label>
                        <textarea class="form-control" name="description" rows="4" >{{$testimonial->description}}</textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5">{{ __('keywords.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
