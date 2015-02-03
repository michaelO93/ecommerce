<?php

class SessionController extends BaseController {

    protected $layout = 'layout';

//    public function AddToCart($id) {
//
//       // $product = Product::where('_id', $id)->get();
//        $product = Product::find($id);
//        if (Request::isMethod('post')) {
//            echo $product_quantity = Input::get('quantity');
//            die();
//        }
//        Session::push('item', $product);
//
//        Session::flash("Success_msg", "one product has been added to cart");
//        return Redirect::to('/');
//    }
    public function AddToCart() {

        if (Request::isMethod('post')) {

            $product_id = Input::get('id');
            $product_quantity = Input::get('quantity');
            $product = Product::find($product_id);       
            $product->product_price = $product_quantity * $product->product_price;
            $product->product_quantity=$product_quantity;

            Session::push('item', $product);
            Session::flash("Success_msg", "one product has been added to cart");
            return Redirect::to('/');


//            $product_price = Input::get('product_price');
//            Input::file('product_img')->move(public_path() . '/product_img', Input::file('product_img')->getClientOriginalName());
//
//            $product = new Product();
//            $product->category = $product_category;
//            $product->product_name = $product_name;
//            $product->product_price = $product_price;
//            $product->product_img = 'product_img/' . Input::file('product_img')->getClientOriginalName();
//            $product->save();
//            Session::flash('Success_msg', 'You have successfuly Inserted a product');
            // }
            // $this->layout->content = View::make('admin');
        }
    }

}
