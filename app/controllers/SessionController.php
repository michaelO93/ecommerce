<?php

class SessionController extends BaseController {

    protected $layout = 'layout';

    public function AddToCart() {

        if (Request::isMethod('post')) {

            $product_id = Input::get('id');
            $product_exist = 1;
            if (Session::get('item')) {
                $cart = Session::get('item');
                foreach ($cart as $key => $value) {
                    if ($product_id == $value['_id']) {
                        $product_new_quantity = Input::get('quantity');
                        $product_old_quantity = $value['product_quantity'];
                        $value['product_quantity'] = $product_recent_quantity = $product_new_quantity + $product_old_quantity;
                        $product_quantity_price = $value['per_quantity_price'];
                        $value['product_price'] = $product_price = $product_recent_quantity * $product_quantity_price;
                        Session::put('item', array($key => $value));
                        Session::put('item', $cart);
                        $product_exist = 2;
                        break;
                    }
                }
            }
            if ($product_exist == 1) {
                $product_quantity = Input::get('quantity');
                $product = Product::find($product_id);
                $product->per_quantity_price = $product->product_price;
                $product->product_price = $product_quantity * $product->product_price;
                $product->product_quantity = $product_quantity;
                Session::push('item', $product);
                Session::flash("Success_msg", "one product has been added to cart");
                return Redirect::back();
            }
            if ($product_exist == 2) {
            Session::flash("Success_msg", "Existing product has been updated to cart");
                return Redirect::back();
                
            }
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
