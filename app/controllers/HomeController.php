<?php

class HomeController extends BaseController {

    public function all_collection() {

        $m = new MongoClient();
        $db = $m->laravel;
        $table = $db->product;

        $cursor = $table->find();
        foreach ($cursor as $document) {
            $data[] = $document;
        }
        $data['now'] = $data;
        $this->layout->content = View::make('product.all_collection', $data);
    }

}
