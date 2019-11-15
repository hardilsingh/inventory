@extends('layouts.admin')
@section('title')
Search By GPU
@stop

@section('heading')
Search By GPU
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <select required class="js-example-basic-single form-control item" autofocus name="product_code" id="product_code">
                <option value="" selected>Select Device Type</option>
                @foreach($cat as $ca)
                <option value="{{$ca->id}}">{{$ca->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<hr class="hr">

<div class="row">
    <div class="col-lg-12">
        <table class="table table-striped" id="pop">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Code</th>
                <th>Sale Price</th>
                <th>Stock</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>





<script type='text/javascript'>
    $(document).ready(function() {

        // Department Change
        $('#product_code').change(function() {

            // Department id
            var id = $(this).val();


            // AJAX request 
            $.ajax({
                url: '/getdevice/' + id,
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
                            var name = response['data'][i].product_name;
                            var code = response['data'][i].product_code;
                            var price = response['data'][i].sale_price;
                            var stock = response['data'][i].current_stock;



                            var table = document.getElementById("pop");
                            // Create an empty <tr> element and add it to the 1st position of the table:
                            var row = table.insertRow();
                            // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
                            var cell1 = row.insertCell();
                            var cell2 = row.insertCell();
                            var cell3 = row.insertCell();
                            var cell4 = row.insertCell();
                            var cell5 = row.insertCell();
                            //Add css
                            // Add some text to the new cells:
                            cell1.innerHTML = id;
                            cell2.innerHTML = name;
                            cell3.innerHTML = code;
                            cell4.innerHTML = price;
                            cell5.innerHTML = stock;

                        }
                    }

                }
            });
        });

    });
</script>
@stop