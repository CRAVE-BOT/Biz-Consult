
@extends('Admin.Layouts.Master')

@section('title', __('keywords.message'))

@section('content')

    <div class="container mt-4">
        <x-Success_alertcomponent></x-Success_alertcomponent>

        <table class="table table-bordered ">
            <thead>
            <tr>
                <th scope="col">{{__('keywords.no')}}</th>
                <th scope="col">{{__('keywords.name')}}</th>
                <th scope="col">{{__('keywords.email')}}</th>
                <th scope="col">{{__('keywords.subject')}}</th>
                <th scope="col">{{__('keywords.message')}}</th>
                <th scope="col">{{__('keywords.Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($messages)>0)
                    <?php $counter=1 ?>
                @foreach($messages as $x)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $x->name }}</td>
                        <td>{{ $x->email }}</td>
                        <td>{{ $x->subject }}</td>
                        <td>{{\Illuminate\Support\Str::limit ($x->message) }}</td>
                        <td class="text-nowrap">
                            <a href="{{route('admin-message-show',$x)}}" class="btn btn-sm btn-primary me-1">{{__('keywords.Show')}}</a>
                            <form action="{{route('admin-message-destroy',$x)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">{{__('keywords.delete')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            @else
                <x-Empty_alertcomponent></x-Empty_alertcomponent>
            @endif
        </table>
        <div class="container mt-3">
            <div class="d-flex justify-content-center">
                     {{$messages->render('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>

@endsection

