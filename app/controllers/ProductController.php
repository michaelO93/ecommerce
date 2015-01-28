<?php

class ProductController extends BaseController {

    public function __construct() {
        $this->beforeFilter('auth');
    }

    public function all_collection() {
        $data['all_collections'] = Product::all();
        $this->layout->content = View::make('product.all_collection', $data);
    }

}
