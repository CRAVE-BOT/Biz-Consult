
@extends('Admin.Layouts.Master')

@section('title', __('keywords.subscribers'))

@section('content')

    <div class="container mt-4">
        <x-Success_alertcomponent></x-Success_alertcomponent>

        <table class="table table-bordered ">
            <thead>
            <tr>
                <th scope="col">{{__('keywords.no')}}</th>
                <th scope="col">{{__('keywords.email')}}</th>
                <th scope="col">{{__('keywords.Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($subscribers)>0)
                    <?php $counter=1 ?>
                @foreach($subscribers as $x)
                    <tr>
                        <td>{{ $counter++ }}</td>

                        <td>{{ $x->email }}</td>
                        <td class="text-nowrap">
                            <form action="{{route('admin-subscribers-destroy',$x)}}" method="POST" style="display:inline-block;">
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
                     {{$subscribers->render('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>

@endsection

