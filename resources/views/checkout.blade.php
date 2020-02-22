@extends('layouts.app')
@section('content')
<div class="checkout_form" style="padding-top: 50px">
    <form action="{!! route('orderPay') !!}" method="post">
    @csrf
        <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="checkout_form_left">
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-lg-12 mb-20">
                            <label>First Name <span>*</span></label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{!! isset($user->first_name) ? $user->first_name : old('first_name') !!}" id="first_name" required>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-20">
                            <label>Last Name  <span>*</span></label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{!! isset($user->last_name) ? $user->last_name : old('last_name') !!}" id="last_name" required>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-20">
                            <label> Email Address   <span>*</span></label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{!! isset($user->address) ? $user->address :  old('address') !!}" id="address" required>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-20">
                            <label>Phone<span>*</span></label>
                            <input type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{!! isset($user->tel) ? $user->tel : old('tel') !!}" id="tel" required>
                            @error('tel')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="checkout_form_right">
                <h3>Your order</h3>
                <div class="order_table table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        @foreach($cart_contents as $cart)
                        <tbody>
                            <tr>
                                <td>{{ $cart->name }}<strong> × {{ $cart->quantity }}</strong></td>
                                <td> £ {{ number_format($cart->price * $cart->quantity) }} </td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <th>Cart Subtotal</th>
                                <td>$ {{ number_format($total) }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="payment_method">
                    <div class="order_button">
                        <button class="btn btn-success w-100">Order confirmation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
