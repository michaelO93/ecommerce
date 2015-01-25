<?php

class AdminController extends BaseController {

    public function __construct() {
        $this->beforeFilter('auth');
    }

    protected $layout = 'layout';

    public function admin() {
        
        if (Request::isMethod('post')) {
            $product_name = Input::get('product_name');
            $product_price = Input::get('product_price');
            $product_img = Input::file('product_img')->move('/var/www/laravel/product_img', Input::file('product_img')->getRealPath());
            
            $product = new Product();
            $product->product_name = $product_name;
            $product->product_price = $product_price;
            $product->product_img = $product_img;
            $product->save();
            Session::flash('Success_msg', 'You have successfuly Inserted a product');
        }
        $this->layout->content = View::make('admin');
    }

}
