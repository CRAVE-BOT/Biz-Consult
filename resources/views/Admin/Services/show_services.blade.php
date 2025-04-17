@extends('Admin.Layouts.Master')

@section('title', __('keywords.Show services'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg w-100" style="max-width: 600px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.Show services')}}</h4>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label fw-bold">📧 {{__('keywords.title')}}</label>
                        <p class="form-control"> {{$service->title}}</p>
                    </div>

                    <div class="form-group mb-3">
                        <label for="message" class="form-label fw-bold">💬 {{__('keywords.description')}}</label>
                        <textarea class="form-control" name="description" rows="4">{{$service->description}}"</textarea>
                    </div>
            </div>
        </div>
    </div>


@endsection
