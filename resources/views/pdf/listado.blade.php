@extends('layouts.pdfinicio')
@section('content')
<table class="table table-hover table-striped">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <thead>
        <tr>
            <th>Name</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Nacionalidad</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($trainers as $trainer)
        <tr>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->apellido }}</td>
            <td>{{ $trainer->edad }}</td>
            <td>{{ $trainer->email }}</td>
            <td>{{ $trainer->nacionalidad }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
