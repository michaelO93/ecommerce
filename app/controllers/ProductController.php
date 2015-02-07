<?php

use Product;

class ProductController extends BaseController {

//    public function __construct() {
//        $this->beforeFilter('auth');
//    }

    public function all_collection() {
        $data['all_collections'] = Product::all();
        $this->layout->content = View::make('product.all_collection', $data);
    }

    public function wear() {
         
        $wear = 'wear';
        $data['all_collections'] = Product::where('category', '=', $wear)->get();
        $this->layout->content = View::make('product.all_collection', $data);
    }
        public function computer() {
         
        $wear = 'computer';
        $data['all_collections'] = Product::where('category', '=', $wear)->get();
        $this->layout->content = View::make('product.all_collection', $data);
    }
        public function hardware() {
         
        $wear = 'hardware';
        $data['all_collections'] = Product::where('category', '=', $wear)->get();
        $this->layout->content = View::make('product.all_collection', $data);
    }
            public function eee() {
         
        $wear = 'eee';
        $data['all_collections'] = Product::where('category', '=', $wear)->get();
        $this->layout->content = View::make('product.all_collection', $data);
    }
    
        public function myproducts() {       
        $id = Auth::id();
        $data= User::find($id);
        $email= $data->email;
        //$products['myproducts']=Product::find($email);
        $products['myproducts']=Product::where('email','=',$email)->get();
        $this->layout->content = View::make('myproducts.myproducts', $products);
    }
       public function myproductupdate($id) { 
       
            $myproduct['editproducts']=Product::find($id);
           

            if (Request::isMethod('post')) {
                
            $product_category=Input::get('category');
            $product_name = Input::get('product_name');
            $product_price = Input::get('product_price');
            $product_img= Input::file('product_img');
            
            if($product_img){
            Input::file('product_img')->move(public_path() . '/product_img', Input::file('product_img')->getClientOriginalName());
            }
            else 
            {
                Session::flash('Success_msg', 'Please select product image'); 
                //return Redirect::to('myproductupdate');
            }
            
            $product = new Product();
            $product->category = $product_category;
            $product->product_name = $product_name;
            $product->product_price = $product_price;
            $product->product_img = 'product_img/' . Input::file('product_img')->getClientOriginalName();
            $product->save();
            Session::flash('Success_msg', 'You have successfuly Updated a product');
           // return Redirect::to('myproducts');
            
            }

           // $data['editproducts'] = Product::find($product_id);
           $this->layout->content = View::make('myproducts.editproduct', $myproduct);
            
       }

}
