@extends('admin.layouts.master')
@section('content')
<section class="content-header">
    <h1>
        INFOMATION ORDERS
        <small>Order</small>
    </h1>
</section>
<section class="content">
    <div class="row">
                <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3></h3>
                    <p>Pending {{ $numberOfPendingOrders }}</p>
                </div>
                <a href="?status=pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3></h3>
                    <p>Approved {{ $numberOfApprovedOrders }}</p>
                </div>
                <a href="?status=approved" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3></h3>
                    <p>Complete : {{ $numberOfCompleteOrders }}</p>
                </div>
                <a href="?status=complete" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3></h3>
                    <p>Cancelled {{ $numberOfCancelledOrders }}</p>
                </div>
                <a href="?status=cancelled" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
