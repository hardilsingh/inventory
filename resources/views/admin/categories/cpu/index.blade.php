@extends('layouts.admin')
@section('title')
CPU
@stop

@section('heading')
CPU
@stop

@section('content')


<div class="row" style="margin-bottom:30px;">
    <div class="col-lg-12">
        <a href="{{route('cpu.create')}}" class="btn btn-lg btn-success">
            <i class="fas fa-plus nav-icon"></i>
            Add New</a>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{$category->id}}
                    </td>
                    <td>
                        {{$category->name}}
                    </td>
                    <td style="display:flex"> 
                        {!! Form::model($category , [

                        'method'=>'DELETE',
                        'action'=>['CategoryCPUController@destroy' , $category->id]

                        ]) !!}


                        {!! Form::submit('Delete' , ['class'=>'btn btn-lg btn-danger']) !!}

                        {!! Form::close() !!}

                        <a style="margin-left:20px;" href="{{route('cpu.edit' , $category->id)}}" class="btn btn-lg btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




@stop