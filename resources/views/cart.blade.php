@extends('layouts.app')
@section('content')
<div class="cart_page_bg">
    <div class="container">
        <div class="shopping_cart_area">
            <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                <thead>
                                    <tr>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                        <th class="product_remove">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($cart_contents as $cart)
                                    <tr>
                                        <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a></td>
                                        <td class="product_name"><a href="#">{{ $cart->name }}</a></td>
                                        <td class="product-price">£ {{ $cart->price }}</td>
                                        <td class="product_quantity"><input min="1" max="100" value="{{ $cart->quantity }}" type="number"></td>
                                        <td class="product_total">£ {{ number_format($cart->price * $cart->quantity) }} </td>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                                </div>
                                <div class="cart_submit">
                                <a class="btn btn-xs btn-warning pull-right" href="{{ route('cart.checkout') }}">Tiến hành thanh toán</a>
                                </div>
                            </div>
                         </div>
                     </div>
                </form>
        </div>
    </div>
</div>
@endsection
