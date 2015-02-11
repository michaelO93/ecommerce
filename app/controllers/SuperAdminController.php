<?php

class SuperAdminController extends BaseController {

    public function SuperAdmin() {
        $data['all_collections'] = Product::all();
        $this->layout->content = View::make('superadmin.superadmincollection', $data);
    }
    
    public function deleteproduct($id) {
        $data = Product::find($id);
        $data->delete();
        $this->layout->content = View::make('superadmin.superadmincollection', $data);
        Session::flash('Success_msg', 'You have successfuly Deleted a product');
        return Redirect::back();
    }

}
