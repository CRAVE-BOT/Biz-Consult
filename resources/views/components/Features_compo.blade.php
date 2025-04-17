
@php
$features=\App\Models\Feature::latest()->paginate(6);
@endphp
@foreach($features as $features)
    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                <i class="fa fa-cubes text-white"></i>
            </div>
            <h6 class="mb-0">{{$features->title}}</h6>
        </div>
        <span>{{$features->description}}</span>
    </div>
@endforeach

