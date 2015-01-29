<?php

class CartController extends BaseController {

    protected $layout = 'layout';

    public function cart() {
        if (Session::has('product.item')) {
            $data['carts'] = Session::get('product');
            $this->layout->content = View::make('product.cart', $data);
        }
    }

}
