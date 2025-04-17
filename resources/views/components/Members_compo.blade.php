
@php
    $member=\App\Models\Member::latest()->paginate(4);
@endphp
@foreach($member as $members)
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center">
            <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('uploads/members/' . $members->image) }}" alt="">
            <h5>{{ $members->name }}</h5>
            <p class="mb-4">{{ $members->position }}</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-square text-primary bg-white m-1" href="{{ $members->facebook }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square text-primary bg-white m-1" href="{{ $members->twitter }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square text-primary bg-white m-1" href="{{ $members->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
@endforeach

