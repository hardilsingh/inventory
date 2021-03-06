@extends('layouts.admin')
@section('title')
Add GPU
@stop

@section('heading')
Add GPU
@stop

@section('content')



{!! Form::open([

'method'=>'POST',
'action'=>'CategoryGPUController@store'

]) !!}

<div class="row">
    <div class="col-lg-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add new </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input required type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                    </div>

                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>

{!! Form::close() !!}



@stop