@extends('layouts.master')
@section('content')
 <p class="h3 text-center bg-info pt-1 pb-1 mb-2 text-white">New General Users </p>  
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
            <th>Current Role</th>
            <th>Action</th>
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
            <td>
                @if($user['role_as']==2)
                    <p class="btn btn-success btn-sm">Affiliation User</p>
                @else
                    <p class="btn btn-warning btn-sm">General User</p> 
                @endif
            </td>
            <td>
                @if($user['role_as']==2)
                    <p class="btn btn-warning btn-sm">General User</p>
                @else
                    <a class="btn btn-success btn-sm" href="{{ route('user', $user['id']) }}">Affiliation User</a> 
                @endif
            </td>

        </tr>
 @endforeach
        
    </tbody>
</table> 
 
@endsection