<?php

class CartController extends BaseController {

    protected $layout = 'layout';

    public function cart() {
        if (Session::has('item')) {
            $data['carts'] = Session::get('item');
            $this->layout->content = View::make('product.cart', $data);
        }else{
            Session::flash('Success_msg', "Your cart is empty");
            return Redirect::to('/');
        }
    }

}
