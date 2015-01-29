<?php

class SessionController extends BaseController {

    protected $layout = 'layout';

    public function AddToCart($id) {

        $product = Product::where('_id', $id)->get();
        Session::push('product', $product);
        Session::flash("Success_msg", 'one product has been added to cart');
        return Redirect::to('/');
    }

}
