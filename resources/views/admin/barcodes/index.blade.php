@extends('layouts.admin')
@section('title')
Barcodes
@stop

@section('heading')
Barcodes
@stop

@section('content')

<div class="row">
    <div class="col-lg-12 text-center">
        <h3 class="display-4">List of all the barcodes.</h3>
    </div>
</div>

<div class="row" style="margin-top:80px;">
    @foreach($codes as $code)
    <div class="col-lg-4 text-center"  style="margin-bottom:80px;" >
        <img src="{{asset('storage/'.$code->product_code.'.svg')}}" height="40%" alt="" srcset="" />
        <div class="" style="margin-top:12px; font-weight:bolder">
            <a href="{{route('inventory.edit' , $code->id)}}" class="nav-link">{{$code->product_name}}</a>
        </div>
        <div class="" style=" font-weight:bolder; color:green; display:flex; justify-content:center">
            <a href="/download/{{$code->product_code}}" class="nav-link text-success">Download Now &rarr;</a>
            <a href="{{route('barcodes.show' , $code->id)}}" class="nav-link text-success">Print &rarr;</a>
        </div>
    </div>
    @endforeach
</div>


@stop