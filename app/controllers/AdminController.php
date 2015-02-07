<?php

class AdminController extends BaseController {

    public function __construct() {
        $this->beforeFilter('auth');
    }

    protected $layout = 'layout';

    public function admin() {

        if (Request::isMethod('post')) {
            
            $id = Auth::id();
            $data= User::find($id);
            $product_email=$data->email;
            
           
            $product_category=Input::get('category');
            $product_name = Input::get('product_name');
            $product_price = Input::get('product_price');
            $product_img = Input::file('product_img');
            
            if($product_img){
            Input::file('product_img')->move(public_path() . '/product_img', Input::file('product_img')->getClientOriginalName());
            }   
            else 
            {
                Session::flash('Success_msg', 'Please select product image'); 
                return Redirect::to('admin');
            }
            
            
            $product = new Product();
            $product->category = $product_category;
            $product->product_name = $product_name;
            $product->product_price = $product_price;
            $product->email=$product_email;
            $product->product_img = 'product_img/' . Input::file('product_img')->getClientOriginalName();
            $product->save();
            Session::flash('Success_msg', 'You have successfuly Inserted a product');
        }
        $this->layout->content = View::make('admin');
    }

}
