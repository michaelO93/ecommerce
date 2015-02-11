<?php

class SearchController extends BaseController {

    public function search() {
        $name=Input::get('searchvalue');
        $product['all_collections']=Product::where('product_name', 'LIKE', '%'.$name.'%')->get();
        $this->layout->content = View::make('product.all_collection', $product);
    }
    
}