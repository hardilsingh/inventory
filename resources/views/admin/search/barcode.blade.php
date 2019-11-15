@extends('layouts.admin')
@section('title')
Scan the barcode
@stop

@section('heading')
Scan the barcode
@stop

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="barcode">Scan Barcode Or Enter Product Code</label>
            <input type="text" min="12" max="12" name="" onkeyup="getProduct()" id="barcode" autofocus class="form-control">
        </div>
    </div>
</div>

<hr class="hr">





<script type='text/javascript'>
    function getProduct() {
        var code = document.getElementById('barcode').value;

        if (code.length == 12) {
            $.ajax({
                url: '/getInventory/' + code,
                type: 'get',
                dataType: 'json',
                success: function(response) {

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;


                            window.location = "/inventory/"+id+"/edit";
                        }
                    }else {
                        alert("No Record Found.")
                    }

                }
            });
        } else {
            console.log("no");
        }

    }
    // AJAX request 
</script>


@stop