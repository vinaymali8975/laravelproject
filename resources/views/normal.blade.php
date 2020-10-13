@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Normal User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as normal user.
            <head>
            <title>View cars Records</title>
            </head>
            <body>
            <table border = "1">
            <tr>
            <td>id</td>
            <td>manufacture</td>
            <td>name</td>
            <td>model</td>
            <td>manufacturing_year</td>
            <td>seating_capacity</td>
            </tr>
            @foreach ($cars as $car)
            <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->manufacture }}</td>
            <td>{{ $car->name }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->manufacturing_year }}</td>
            <td>{{ $car->seating_capacity}}</td>
            </tr>
            @endforeach
            </table>
            </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
