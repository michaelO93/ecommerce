<?php

class HomeController extends BaseController {

    public function all_collection() {

        $data['all_collections'] = Product::all();
        $this->layout->content = View::make('product.all_collection', $data);
    }

}
