@extends('Admin.Layouts.Master')

@section('title', __('keywords.Show message'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg w-100" style="max-width: 600px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.Show message') }}</h4>

                <div class="form-group mb-3">
                    <label for="email" class="form-label fw-bold">📧 {{__('keywords.name')}}</label>
                    <p class="form-control"> {{$message->name}}</p>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label fw-bold">📧 {{__('keywords.email')}}</label>
                    <p class="form-control"> {{$message->email}}</p>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label fw-bold">📧 {{__('keywords.subject')}}</label>
                    <p class="form-control"> {{$message->subject}}</p>
                </div>

                <div class="form-group mb-3">
                    <label for="message" class="form-label fw-bold">💬 {{ __('keywords.message') }}</label>
                    <textarea class="form-control" rows="4" readonly style="resize: none;">{{$message->message}}</textarea>
                </div>


            </div>
        </div>
    </div>
@endsection
