@extends('layouts.admin')
@section('title')
Print Barcodes
@stop

@section('heading')
Print Barcodes
@stop

@section('content')


<style>
    .col-lg-3 {
        padding: 30px;
    }
</style>


<div class="row" style="margin-bottom:30px;">


    <div class="col-lg-12 text-center">
        <img src="{{asset('/storage/'.$barcode->product_code.'.svg')}}" height="70%" alt="" srcset="" />
        <div class="div">
            <span>{{$barcode->product_name}}</span>
        </div>
        <input type="hidden" value="{{$barcode->product_code}}" name="" id="product_code">
    </div>
</div>

<hr class="hr">


<div class="row" style="display:flex" id="barcodes">

</div>

<script>
    var nos = prompt("Enter the number of prints required");
    var row = document.getElementById('barcodes');


    if (nos == null || nos == 0) {
        window.location = "/barcodes";

    } else {
        var image = "<img src='{{asset('storage/'.$barcode->product_code.'.svg')}}' height='120%' alt='' srcset='' />"

        console.log(image)

        for (var i = 0; i < nos; i++) {
            $('#barcodes').append("<div class='col-lg-3' id='barcodeImages'>" + image + "</div>")
        }
    }
</script>





@stop