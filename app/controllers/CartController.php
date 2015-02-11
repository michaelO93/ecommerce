<?php

class CartController extends BaseController {

    protected $layout = 'layout';

    public function cart() {
        if (Session::has('item')) {
            $data['carts'] = Session::get('item');
            $this->layout->content = View::make('product.cart', $data);
        } else {
            Session::flash('Success_msg', "Your cart is empty");
            return Redirect::to('/');
        }
    }

    public function CartUpdate() {
        $product_id = Input::get('id');
        $product_new_quantity = Input::get('product_quantity');
        $cart = Session::get('item');
        foreach ($cart as $key => $value) {
            if ($product_id == $value['_id']) {
                $value['product_quantity'] = $product_new_quantity;
                $product_quantity_price = $value['per_quantity_price'];
                $value['product_price'] = $product_new_quantity * $product_quantity_price;
                Session::put('item', array($key => $value));
                Session::put('item', $cart);
                break;
            }
        }
            Session::flash('Success_msg', "Your cart has been updated");
            return Redirect::to('cart');
    }

}
