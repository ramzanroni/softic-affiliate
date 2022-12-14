
@extends('layouts.master')
@section('content')
<p class="text-center text-white bg-info pt-1 pb-1 mb-3">Refers User</p>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Refer</th>
            <th>Point</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($referUsers as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['point']/22 }}</td>
                <td>{{ $user['point'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection