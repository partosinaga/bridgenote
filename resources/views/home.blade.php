@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        in order to add/edit/delete data, please add via API, please clik <a href="https://documenter.getpostman.com/view/7090108/TW6zJ8Ce" target="_blank">here</a> to API documents.
                    </p>
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th>user id</th>
                                <th>name</th>
                                <th>position</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->position }}</td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
