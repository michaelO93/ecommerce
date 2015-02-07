<?php

class SessionController extends BaseController {

    protected $layout = 'layout';

    public function AddToCart() {

        if (Request::isMethod('post')) {

            $product_id = Input::get('id');
            $product_quantity = Input::get('quantity');
            $product = Product::find($product_id);
            $product->product_price = $product_quantity * $product->product_price;
            $product->product_quantity = $product_quantity;
            Session::push('item', $product);
            Session::flash("Success_msg", "one product has been added to cart");
            return Redirect::to('/');

        }
    }

    public function delete_product_session($id) {
        $cart = Session::get('item');
        foreach ($cart as $key => $value) {
            if ($id == $value['_id']) {
                unset($cart[$key]);
                break;
            }
        }
        if (empty($cart)) {
            Session::forget('item');
        } else {
            $cart = array_values($cart);
            Session::put('item', $cart);
        }
        Session::flash('Success_msg', 'Product successfully removed from cart.');
        return Redirect::back();
    }

}
