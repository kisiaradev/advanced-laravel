@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Users</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($users) > 0)
                            @foreach($users as $user)
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="3">
                                        <div class="jumbotron">
                                            <h1 class="text-center" style="font-size: 22px;">You are the only user :(</h1>
                                        </div>
                                    </td>

                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
