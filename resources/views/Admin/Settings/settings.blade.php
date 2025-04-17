
@extends('Admin.Layouts.Master')

@section('title', __('keywords.subscribers'))

@section('content')

    <div class="container-fluid mt-4">
        <x-Success_alertcomponent />

        <div class="table-responsive"> <!-- يخلي الجدول متجاوب -->
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('keywords.address') }}</th>
                    <th scope="col">{{ __('keywords.phone') }}</th>
                    <th scope="col">{{ __('keywords.email') }}</th>
                    <th scope="col">{{ __('keywords.facebook') }}</th>
                    <th scope="col">{{ __('keywords.twitter') }}</th>
                    <th scope="col">{{ __('keywords.youtube') }}</th>
                    <th scope="col">{{ __('keywords.instagram') }}</th>
                    <th scope="col">{{ __('keywords.linkedin') }}</th>
                    <th scope="col">{{ __('keywords.Actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @if($settings->count() > 0)
                    @foreach($settings as $key => $x)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="max-width: 150px; word-wrap: break-word;">{{ $x->address }}</td>
                            <td>{{ $x->phone }}</td>
                            <td style="max-width: 150px; word-break: break-word;">{{ $x->email }}</td>
                            <td><a href="{{ $x->facebook }}" target="_blank" class="text-primary text-decoration-underline">Facebook</a></td>
                            <td><a href="{{ $x->twitter }}" target="_blank" class="text-info text-decoration-underline">Twitter</a></td>
                            <td><a href="{{ $x->youtube }}" target="_blank" class="text-danger text-decoration-underline">YouTube</a></td>
                            <td><a href="{{ $x->instagram }}" target="_blank" class="text-warning text-decoration-underline">Instagram</a></td>
                            <td><a href="{{ $x->linkedin }}" target="_blank" class="text-primary text-decoration-underline">LinkedIn</a></td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin-settings-edit', $x) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit"></i> {{ __('keywords.update') }}
                                </a>
                                <form action="{{ route('admin-settings-destroy', $x) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i> {{ __('keywords.delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <x-Empty_alertcomponent />
                @endif
                </tbody>
            </table>
        </div>

        <div class="mt-3 d-flex justify-content-center">
            {{ $settings->render('pagination::bootstrap-4') }}
        </div>
    </div>

@endsection

