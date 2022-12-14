@extends('layouts.master')
@section('content')
 <p class="h3 text-center bg-info pt-1 pb-1 mb-2 text-white">Affiliation Users </p>  
 <table class="table table-bordered table-hover table-striped">
    @if (session('message'))
    <span class="text-center bg-warning">{{ session('message') }}</span>        
    @endif
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>References</th>
            <th>Point</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['point']/22 }}</td>
            <td>{{ $user['point'] }}</td>

        </tr>
 @endforeach
        
    </tbody>
</table> 
 
@endsection