@extends('layouts.admin')
@section('title')
Add Inventory
@stop

@section('heading')
Add Inventory
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
            {!! Form::open([
                
                'action'=>'InventoryController@store',
                'method'=>'POST'

            ]) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" required placeholder="Enter product name">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Sale Price</label>
                            <input type="number" required name="sale_price" class="form-control" placeholder="Enter product price">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>Device Type</label>
                            {!! Form::select('device_id' , $devices , 0 , ['class'=>'form-control' , 'placeholder'=>'Select Device Types' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>CPU <span class="badge badge-warning">Optional</span></label>
                            {!! Form::select('cpu_id' , $cpu , 0 , ['class'=>'form-control' , 'placeholder'=>'Select CPU' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>GPU <span class="badge badge-warning">Optional</span></label>
                            {!! Form::select('gpu_id' , $gpu , 0 , ['class'=>'form-control' , 'placeholder'=>'Select GPU' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>RAM</label>
                            {!! Form::select('ram_id' , $ram , 0 , ['class'=>'form-control' , 'placeholder'=>'Select RAM' , 'required' ]) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group" data-select2-id="29">
                            <label>Screen Size</label>
                            {!! Form::select('screen_id' , $screen , 0 , ['class'=>'form-control' , 'placeholder'=>'Select Screen Width' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group" data-select2-id="29">
                            <label>Manufacturer</label>
                            {!! Form::select('manufacturer_id' , $manufacturer , 0 , ['class'=>'form-control' , 'placeholder'=>'Select Manufacturer' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group" data-select2-id="29">
                            <label>Storage Space</label>
                            {!! Form::select('storage_id' , $storage , 0 , ['class'=>'form-control' , 'placeholder'=>'Select Storage Space'  ]) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>Used Or Brand New</label>
                            {!! Form::select('usage_id' , $usage , 0 , ['class'=>'form-control' , 'placeholder'=>'Select usage type' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>Supplier <span class="badge badge-warning">Optional</span></label>
                            {!! Form::select('supplier_id' , $suppliers , 0 , ['class'=>'form-control' , 'placeholder'=>'Select Supplier' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. of Units</label>
                            <input type="number" required name="current_stock" class="form-control" placeholder="Enter Units">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Code</label>
                            <input type="number" readonly name="product_code" class="form-control" placeholder="Product code will be generated automatically.">
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