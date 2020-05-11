@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 80px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
    @if(session()->has('success_msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    @if(session()->has('alert_msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('alert_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    @if(count($errors) > 0)
    @foreach($errors0>all() as $error)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endforeach
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <br>
            @if(\Cart::getTotalQuantity()>0)
            <h4>{{ \Cart::getTotalQuantity()}} Product(s) In Your Cart</h4><br>
            @else
            <h4>No Product(s) In Your Cart</h4><br>
            <a href="/" class="btn btn-dark">Continue Shopping</a>
            @endif

            @foreach($cartCollection as $item)
            <div class="row">
                <div class="col-lg-5">
                    <p>
                        <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                        <b>Price: </b>R{{ $item->price }}<br>
                        <b>Sub Total: </b>R{{ \Cart::get($item->id)->getPriceSum() }}<br>
                        {{-- <b>With Discount: </b>R{{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                    </p>
                </div>
            </div>
            <hr>
            @endforeach
            @if(count($cartCollection)>0)
            <form action="{{ route('cart.clear') }}" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-secondary btn-md">Clear Cart</button>
            </form>
            @endif
        </div>
        @if(count($cartCollection)>0)
        <div class="col-lg-5">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Total: </b>R{{ \Cart::getTotal() }}</li>
                </ul>
            </div>
            <br><a href="/" class="btn btn-dark">Continue Shopping</a>
            <a href="/checkout" class="btn btn-success">Proceed To Checkout</a>
        </div>
        @endif
    </div>
    <br><br>
</div>
@endsection