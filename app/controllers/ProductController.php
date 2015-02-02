<?php

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

}
