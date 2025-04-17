@extends('Admin.Layouts.Master')

@section('title', __('keywords.Add new services'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg w-100" style="max-width: 600px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.Add new services')}}</h4>

                <form method="Post" action="{{route('admin-services-store')}}">
                    @csrf

                    <div class="form-group mb-3">

                        <label for="email" class="form-label fw-bold">📧 {{__('keywords.title')}}</label>
                        <input type="text" class="form-control" name="title">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="message" class="form-label fw-bold">💬 {{__('keywords.description')}}</label>
                        <textarea class="form-control" name="description" rows="4" ></textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4">{{__('Submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
