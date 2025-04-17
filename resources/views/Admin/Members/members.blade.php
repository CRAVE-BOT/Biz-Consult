@php
$x=1;
 @endphp
@extends('Admin.Layouts.Master')

@section('title', __('keywords.members'))

@section('content')
    <br>
    <a href="{{route('admin-members-create')}}" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
        {{__('keywords.Add new members')}}
    </a>
    <br>
    <div class="container mt-4">
    <x-Success_alertcomponent></x-Success_alertcomponent>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">{{__('keywords.no')}}</th>
                <th scope="col">{{__('keywords.name')}}</th>
                <th scope="col">{{__('keywords.position')}}</th>
                <th scope="col">{{__('keywords.image')}}</th>
                <th scope="col">{{__('keywords.facebook')}}</th>
                <th scope="col">{{__('keywords.twitter')}}</th>
                <th scope="col">{{__('keywords.linkedin')}}</th>
                <th scope="col">{{__('keywords.Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($members)>0)
          @foreach($members as $row)
            <tr>
                <td>{{$x++}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->position}}</td>
                <td>
                @if($row->image)
                        <img src="{{ asset('uploads/members/' . $row->image) }}" alt="image" width="80" height="80">
                @else
                    <span class="text-muted">No Image</span>
                @endif
                </td>
                <td><a href="{{$row->facebook }}" target="_blank" class="text-primary text-decoration-underline">Facebook</a></td>
                <td><a href="{{$row->twitter }}" target="_blank" class="text-info text-decoration-underline">Twitter</a></td>
                <td><a href="{{$row->linkedin }}" target="_blank" class="text-primary text-decoration-underline">LinkedIn</a></td>
                <td class="text-nowrap">
                    <a href="{{route('admin-members-show',$row)}}" class="btn btn-sm btn-primary me-1">{{__('keywords.Show')}}</a>
                    <a href="{{route('admin-members-edit',$row)}}" class="btn btn-sm btn-warning me-1">{{__('keywords.update')}}</a>
                    <form action="{{route('admin-members-destroy',$row)}}" method="POST" style="display:inline-block;">
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
                     {{$members->render('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>

@endsection
