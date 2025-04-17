@extends('Admin.Layouts.Master')

@section('title', __('keywords.update_settings'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow w-100" style="max-width: 800px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.update_settings') }}</h4>

                <form action="{{ route('admin-settings-update', $setting) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">
                        {{-- Address --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.address') }}</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address', $setting->address) }}">
                            @error('address')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Phone --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.phone') }}</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone', $setting->phone) }}">
                            @error('phone')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.email') }}</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $setting->email) }}">
                            @error('email')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Facebook --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.facebook') }}</label>
                            <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $setting->facebook) }}">
                            @error('facebook')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Twitter --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.twitter') }}</label>
                            <input type="text" name="twitter" class="form-control" value="{{ old('twitter', $setting->twitter) }}">
                            @error('twitter')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- YouTube --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.youtube') }}</label>
                            <input type="text" name="youtube" class="form-control" value="{{ old('youtube', $setting->youtube) }}">
                            @error('youtube')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Instagram --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.instagram') }}</label>
                            <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $setting->instagram) }}">
                            @error('instagram')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- LinkedIn --}}
                        <div class="col-md-6">
                            <label class="form-label fw-bold">{{ __('keywords.linkedin') }}</label>
                            <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin', $setting->linkedin) }}">
                            @error('linkedin')
                            <div class="alert alert-danger mt-1 p-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-4">{{ __('keywords.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
