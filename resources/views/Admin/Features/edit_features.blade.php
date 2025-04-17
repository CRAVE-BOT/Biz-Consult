@extends('Admin.Layouts.Master')

@section('title', __('keywords.Show features'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg w-100" style="max-width: 600px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.Edit features')}}</h4>

                <form method="Post" action="{{route('admin-features-update',$service->title)}}">
                    @csrf
                     @method('PUT')
                    <div class="form-group mb-3">

                        <label for="email" class="form-label fw-bold">📧 {{__('keywords.title')}}</label>
                        <input type="text" class="form-control" name="title" value="{{$service->title}}">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="message" class="form-label fw-bold">💬 {{__('keywords.description')}}</label>
                        <textarea class="form-control" name="description" rows="4">{{ $service->description }}</textarea>
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
