@extends('layouts.master')
@section('content')
 <p class="bg-info text-center text-white pt-1 pb-1 mb-3">Affiliate Interface</p> 
 @php
$unique_id=Auth::user()->unique_id;
$referURL=$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/register/'.$unique_id ;
@endphp
<div class="form-group">
    <label for="exampleInputEmail1">Referance URL</label>
    <input  type="text" readonly value="{{ $referURL }}" id="referId" class="form-control" >
  </div>
<button class="btn btn-success" onclick="copyReferCode()">Copy text</button>
  <div class="row mt-5">
    @foreach ($user as $data)
    <div class="col-md-6 btn-danger pt-5 pb-5">
      <p class="text-center h4 text-white">Total Point</p>
      <p class="text-center h4 text-white">{{ $data['point']}}</p>
    </div>
    <div class="col-md-6 btn-primary pt-5 pb-5">
      <p class="text-center h4 text-white">Total Refer</p>
      <p class="text-center h4 text-white">{{$data['point']/22}}</p>
    </div>
    @endforeach
    
  </div>
<script>
    function copyReferCode() {
      var copyText = document.getElementById("referId");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      navigator.clipboard.writeText(copyText.value);
    }
    </script>
@endsection