
@php
$services=\App\Models\Service::latest()->paginate(6);
@endphp
@foreach($services as $services)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded h-100">
            <div class="d-flex justify-content-between">
                <div class="service-icon">
                    <i class="fa fa-user-tie fa-2x"></i>
                </div>
                <a class="service-btn" href="#">
                    <i class="fa fa-link fa-2x"></i>
                </a>
            </div>
            <div class="p-5">
                <h5 class="mb-3">{{$services->title}}</h5>
                <span>{{$services->description}}</span>
            </div>
        </div>
    </div>
@endforeach


