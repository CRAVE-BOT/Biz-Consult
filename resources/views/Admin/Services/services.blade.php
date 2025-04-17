@php
$x=1;
 @endphp
@extends('Admin.Layouts.Master')

@section('title', __('keywords.services'))

@section('content')
    <br>
    <a href="{{route('admin-services-create')}}" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
        {{__('keywords.Add new services')}}
    </a>
    <br>
    <div class="container mt-4">
    <x-Success_alertcomponent></x-Success_alertcomponent>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">{{__('keywords.no')}}</th>
                <th scope="col">{{__('keywords.title')}}</th>
                <th scope="col">{{__('keywords.description')}}</th>
                <th scope="col">{{__('keywords.Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($services)>0)
          @foreach($services as $row)
            <tr>
                <td>{{$x++}}</td>
                <td>{{$row->title}}</td>
                <td>{{ \Illuminate\Support\Str::limit($row->description, 50) }}</td>
                <td class="text-nowrap">
                    <a href="{{route('admin-services-show',$row->title)}}" class="btn btn-sm btn-primary me-1">{{__('keywords.Show')}}</a>
                    <a href="{{route('admin-services-edit',$row->title)}}" class="btn btn-sm btn-warning me-1">{{__('keywords.update')}}</a>
                    <form action="{{route('admin-services-destroy',$row->title)}}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">{{__('keywords.delete')}}</button>
                    </form>
                </td>
            </tr>
          @endforeach
            @else
               <x-Empty_alertcomponent></x-Empty_alertcomponent>
            </tbody>
            @endif
        </table>
        <div class="container mt-3">
            <div class="d-flex justify-content-center">
{{--                {!!$services->links('pagination::bootstrap-4') !!}--}}
                     {{$services->render('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>

@endsection
