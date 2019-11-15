@extends('layouts.admin')
@section('title')
Dashboard
@stop

@section('heading')
Dashboard
@stop

@section('content')

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Collection</span>
                <span class="info-box-number">
                    {{number_format($total , 2)}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Today's Collection {{now()->toDateString()}}</span>
                <span class="info-box-number">{{number_format($collection , 2)}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Due</span>
                <span class="info-box-number">{{number_format($balance , 2)}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Items</span>
                <span class="info-box-number">{{number_format($inventory , 2)}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Latest Sales</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Buyer</th>
                                <th>Telephone</th>
                                <th>Total Bill</th>
                                <th>Paid</th>
                                <th>Balance</th>
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

                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
                {{ $bills->links() }}
                <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="{{route('billing.create')}}" class="btn btn-sm btn-info float-left">Generate Bill</a>
                <a href="{{route('billing.index')}}" class="btn btn-sm btn-secondary float-right">View All Bills</a>
            </div>
            <!-- /.card-footer -->
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Recently Added Inventory</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                    @foreach($inventories as $inventory)

                    <li class="item">
                        <div class="product-img">
                            <img src="/images/logo.jpg" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                            <a href="{{route('inventory.edit' , $inventory->id)}}" class="product-title">{{$inventory->product_name}} | {{$inventory->product_code}}
                                <span class="badge badge-warning float-right">₹{{number_format($inventory->sale_price , 2)}}</span></a>
                            <span class="product-description">
                                Current Stock: <span class="badge badge-success">{{$inventory->current_stock}}</span>
                            </span>
                        </div>
                    </li>

                    @endforeach
                    <!-- /.item -->
                </ul>

                {{ $inventories->links() }}
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View Inventory</a>
            </div>
            <!-- /.card-footer -->
        </div>
    </div>
</div>

</div>



@stop