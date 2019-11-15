@extends('layouts.admin')
@section('title')
Inventory
@stop

@section('heading')
Inventory
@stop

@section('content')



<div class="row">
    <div class="col-lg-12">

        <table id="myTable" class="display text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Manufacturer</th>
                    <th>Available Units</th>
                    <th>Barcode</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($inventories as $inventory)

                <tr>
                    <td>
                        @php
                        echo $i++;
                        @endphp
                    </td>
                    <td style="font-weight:bolder">{{$inventory->product_code}}</td>
                    <td>
                        {{$inventory->product_name}}
                    </td>
                    <td>
                        {{$inventory->manufacturer->name}}
                    </td>
                    <td>
                        {{$inventory->current_stock}}
                    </td>
                    <td>
                        <img src="{{asset('storage/'.$inventory->product_code.'.svg')}}" height="130%" alt="" srcset="" />
                    </td>
                    <td style="display:flex">
                        {!! Form::model($inventory , [

                        'method'=>'DELETE',
                        'action'=>['InventoryController@destroy' , $inventory->id]

                        ]) !!}


                        {!! Form::submit('Delete' , ['class'=>'btn btn-md btn-danger']) !!}

                        {!! Form::close() !!}

                        <a style="margin-left:20px;" href="{{route('inventory.edit' , $inventory->id)}}" class="btn btn-md btn-warning">Edit</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@stop