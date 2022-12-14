@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
               <div class="card-body">
                <img src="{{ asset('assets/images/wait.svg') }}" width="100%" alt="">
                <p class="text-center w-100"> Please Waiting for Admin side Activation !!!!!!!! </p>
               </div>

            </div>
            
        </div>
        <div class="col-md-6">
            <div class="card">
               <div class="card-body">
                <img src="{{ asset('assets/images/happy.svg') }}" width="100%" alt="">
                <p class="text-center w-100">Add your friend for make your network and earn 22 point for each user.</p>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
