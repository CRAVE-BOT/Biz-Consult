@extends('Admin.Layouts.Master')

@section('title', __('keywords.Show member'))

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow w-100" style="max-width: 800px;">
            <div class="card-body">
                <h4 class="mb-4 text-center fw-bold">{{ __('keywords.Show member') }}</h4>

                <div class="mb-3">
                    <label class="form-label fw-bold">{{ __('keywords.name') }}</label>
                    <p class="form-control">{{ $member->name }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">{{ __('keywords.position') }}</label>
                    <p class="form-control">{{ $member->position }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">{{ __('keywords.image') }}</label><br>
                    <img src="{{ asset('uploads/members/' . $member->image) }}" alt="image" width="100" height="100">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Facebook</label>
                    <p class="form-control">{{ $member->facebook }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Twitter</label>
                    <p class="form-control">{{ $member->twitter }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">LinkedIn</label>
                    <p class="form-control">{{ $member->linkedin }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
