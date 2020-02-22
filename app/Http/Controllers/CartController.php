<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Product;
use App\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // dd($request->all());
        $cart_contents = \Cart::getContent();
        $total = \Cart::getTotal();
        return view('cart', compact(['cart_contents','total']));
    }

    public function addCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        \Cart::add(array('id'=>$product->id,'name'=>$product->name,'price'=>$product->price,'quantity'=>$request->qty,
            'attributes'=>array('img'=>$product->photo())));
        return redirect()->route('cart.index');
    }

    public function updateCart(Request $request)
    {
         if ($request->ajax()){
            $id = $request->id;
            $qty = $request->quantity;
            \Cart::update($id, array('quantity'=>array(
                    'relative' => false,
                    'value' =>$qty,
                    )
            ));
        return 1;
        }
        return 'Fails';
    }

    public function removeCart($id)
    {
        \Cart::remove($id);
        return redirect()->route('cart.index');
    }

    public function checkout(Request $request)
    {
            $cart_contents = \Cart::getContent();
            $total = \Cart::getTotal();

            $user = \auth()->user();
            // dd($user);
            // dd($cart_contents);
            // dd($total);
            return view('checkout', compact(['cart_contents','total','user']));
    }


    public function orderPay(Request $request)
    {
        $order = new Order();
        Auth::check() == true ? $order->user_id = auth()->user()->id : '';
        $order->created_at =date("Y-m-d H:i:s");
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->tel = $request->tel;
        $order->address = $request->address;
        $order->total = \Cart::getTotal();
        $order->status = 1;
        // dd($order);

        $order->save();
        //dd($order);
        $cart_contents = \Cart::getContent();
        foreach ($cart_contents as $cart)
        {
            $product = Product::findOrFail($cart->id);
            foreach ($product as $key => $value) {

                if ($value->quantity < $cart->quantity)
                {
                    return redirect()->route('cart.index')->with('error', 'Đặt hàng thất bại :  '.$product->name.' không đủ số lượng !' );
                }
            }

            $order->orderDetails()->create([
                'product_id' => $cart->id,
                'quantity' => $cart->quantity,
                'price' => $cart->price,
                'total' => $cart->price * $cart->quantity,
            ]);

            foreach($cart_contents as $cart){
                $product = Product::findOrFail($cart->id);
                $product->save();
            }
        }
        \Cart::clear();

        return redirect()->route('cart.index')->with('success','Đặt hàng thành công!');
    }
}
