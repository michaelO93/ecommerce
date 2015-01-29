<?php

class CartController extends BaseController {

    protected $layout = 'layout';

    public function cart() {
        if (Session::has('product')) {
            $this->layout->content = View::make('product.cart');
        } else {
            Session::flash('Success_msg', 'Your cart is empty');
        }
    }

}
