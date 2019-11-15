@extends('layouts.admin')
@section('title')
Suppliers
@stop

@section('heading')
Suppliers
@stop

@section('content')



<div class="row" style="margin-bottom:30px;">
    <div class="col-lg-12">
        <a href="{{route('supplier.create')}}" class="btn btn-lg btn-success">
            <i class="fas fa-plus nav-icon"></i>
            Add New</a>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">

        <table id="myTable" class="display text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Tel</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($suppliers as $supplier)

                <tr>
                    <td>
                        @php
                        echo $i++;
                        @endphp
                    </td>
                    <td class="badge badge-success" style="font-size:18px;">{{$supplier->name}}</td>
                    <td>
                        {{$supplier->tel}}
                    </td>
                    <td>
                        {{$supplier->address}}
                    </td>
                    <td>
                        {{$supplier->email}}
                    </td>
                    <td style="display:flex">
                        {!! Form::model($supplier , [

                        'method'=>'DELETE',
                        'action'=>['SupplierController@destroy' , $supplier->id]

                        ]) !!}


                        {!! Form::submit('Delete' , ['class'=>'btn btn-md btn-danger']) !!}

                        {!! Form::close() !!}

                        <a style="margin-left:20px;" href="{{route('supplier.edit' , $supplier->id)}}" class="btn btn-md btn-warning">Edit</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@stop