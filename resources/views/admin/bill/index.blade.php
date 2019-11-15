@extends('layouts.admin')
@section('title')
Billing
@stop

@section('heading')
Billing
@stop

@section('content')

<div class="row" style="margin-bottom:30px;">
    <div class="col-lg-12">
        <a href="{{route('billing.create')}}" class="btn btn-lg btn-success">
            <i class="fas fa-plus nav-icon"></i>
            Create Bill</a>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Bill Amount</th>
                    <th>Paid</th>
                    <th>Balance</th>
                    <th>Created On</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($bills as $bill)
                <tr>
                    <td>{{$bill->id}}</td>
                    <td>{{$bill->name}}</td>
                    <td>{{$bill->tel}}</td>
                    <td>{{number_format($bill->total , 2)}}</td>
                    <td>{{number_format($bill->paid , 2)}}</td>
                    <td>
                        <span class="{{$bill->total - $bill->paid == 0 ? 'badge badge-success' : 'badge badge-danger'}}">{{number_format($bill->total - $bill->paid , 2)}}</span>
                    </td>
                    <td>{{$bill->created_at->toDateString()}}</td>
                    <td>
                        <a href="#" class="btn btn-md btn-primary">Print</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop