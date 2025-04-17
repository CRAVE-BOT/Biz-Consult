@extends('Admin.Layouts.Master')

@section('title', __('keywords.Add new members'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow w-100" style="max-width: 800px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.Add new members') }}</h4>

                <form action="{{ route('admin-members-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-bold">{{ __('keywords.name') }}</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">{{ __('keywords.position') }}</label>
                        <input type="text" name="position" class="form-control" value="{{ old('position') }}">
                        @error('position')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">{{ __('keywords.image') }}</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Facebook</label>
                        <input type="url" name="facebook" class="form-control" value="{{ old('facebook') }}">
                        @error('facebook')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Twitter</label>
                        <input type="url" name="twitter" class="form-control" value="{{ old('twitter') }}">
                        @error('twitter')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">LinkedIn</label>
                        <input type="url" name="linkedin" class="form-control" value="{{ old('linkedin') }}">
                        @error('linkedin')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success px-5">{{ __('keywords.Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
