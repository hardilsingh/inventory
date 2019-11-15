@extends('layouts.admin')
@section('title')
Edit Inventory
@stop

@section('heading')
Edit Inventory
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
            {!! Form::model($inventory , [

            'action'=>['InventoryController@update' , $inventory->id],
            'method'=>'PATCH'

            ]) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input required type="text" value="{{$inventory->product_name}}" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Sale Price</label>
                            <input required type="number" value="{{$inventory->sale_price}}" name="sale_price" class="form-control" placeholder="Enter product price">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>Device Type</label>
                            {!! Form::select('device_id' , $devices , $inventory->device_id , ['class'=>'form-control' , 'placeholder'=>'Select Device Types' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>CPU <span class="badge badge-warning">Optional</span></label>
                            {!! Form::select('cpu_id' , $cpu , $inventory->cpu_id , ['class'=>'form-control' , 'placeholder'=>'Select CPU' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>GPU <span class="badge badge-warning">Optional</span></label>
                            {!! Form::select('gpu_id' , $gpu , $inventory->gpu_id , ['class'=>'form-control' , 'placeholder'=>'Select GPU' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>RAM</label>
                            {!! Form::select('ram_id' , $ram , $inventory->ram_id , ['class'=>'form-control' , 'placeholder'=>'Select RAM' , 'required' ]) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group" data-select2-id="29">
                            <label>Screen Size</label>
                            {!! Form::select('screen_id' , $screen , $inventory->screen_id , ['class'=>'form-control' , 'placeholder'=>'Select Screen Width' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group" data-select2-id="29">
                            <label>Manufacturer</label>
                            {!! Form::select('manufacturer_id' , $manufacturer , $inventory->manufacturer_id , ['class'=>'form-control' , 'placeholder'=>'Select Manufacturer' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group" data-select2-id="29">
                            <label>Storage Space</label>
                            {!! Form::select('storage_id' , $storage , $inventory->storage_id , ['class'=>'form-control' , 'placeholder'=>'Select Storage Space' , 'required' ]) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>Used Or Brand New</label>
                            {!! Form::select('usage_id' , $usage , $inventory->usage_id , ['class'=>'form-control' , 'placeholder'=>'Select usage type' , 'required' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group" data-select2-id="29">
                            <label>Supplier <span class="badge badge-warning">Optional</span></label>
                            {!! Form::select('supplier_id' , $suppliers , $inventory->supplier_id , ['class'=>'form-control' , 'placeholder'=>'Select Supplier' ]) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Current Stock</label>
                            <input type="number" value="{{$inventory->current_stock}}" name="current_stock" readonly required class="form-control" placeholder="Enter Units">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Add Stock <span class="badge badge-warning">Optional</span></label>
                            <input type="number" name="add_stock" class="form-control" placeholder="Enter Units">
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12 text-center">

                        <img src="{{asset('storage/'.$inventory->product_code.'.svg')}}" height="50px" alt="" srcset="" style="margin-top:30px">

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