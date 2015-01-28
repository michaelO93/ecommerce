<?php

class ProductController extends BaseController {

    public function __construct() {
        $this->beforeFilter('auth');
    }

    public function all_collection() {
//        $data['all_collections'] = Product::all();

        $m = new MongoClient();
        $db = $m->laravel;
        $table = $db->product;

        $cursor = $table->find();
        foreach ($cursor as $document) {
            $data[] = $document;
        }
//        print_r($document['product_name']);
//          print_r($data);
//        die();
        $data['now'] = $data;
        $this->layout->content = View::make('product.all_collection', $data);
    }

}
