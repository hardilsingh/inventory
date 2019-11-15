@extends('layouts.admin')
@section('title')
Edit Supplier
@stop

@section('heading')
Edit Supplier
@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {!! Form::model($supplier , [

            'action'=>['SupplierController@update', $supplier->id],
            'method'=>'PATCH'

            ]) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" value="{{$supplier->name}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone</label>
                            <input type="number" value="{{$supplier->tel}}" name="tel" class="form-control" placeholder="Enter Telephone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" value="{{$supplier->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea name="address" class="form-control" id="" cols="30" rows="5" placeholder="Enter full address">{{$supplier->address}}</textarea>
                        </div>
                    </div>
                </div>




            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>




@stop