
@php
$testimonial=\App\Models\Testimonial::latest()->paginate(10);
@endphp
@foreach($testimonial as $testimonials)
    <div class="testimonial-item rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>{{$testimonials->description}}</p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('uploads/members/' . $testimonials->image)}}">
            <div class="ps-3">
                <h6 class="mb-1">Client Name</h6>
                <small>{{$testimonials->name}}</small>
            </div>
        </div>
    </div>
@endforeach


