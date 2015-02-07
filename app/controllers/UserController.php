<?php

class UserController extends BaseController {

    public function login() {
        if (Request::isMethod('post')) {
            $email = Input::get('email');
            $password = Input::get('password');

            if (Auth::attempt(array('email' => $email, 'password' => $password))) {
                Session::flash('Success_msg', 'You\'ve Successfully loggedIn');
                return Redirect::to('admin');
            } else {
                Session::flash('Success_msg', 'Wrong Password or Email');
            }
        }
        $this->layout->content = View::make('login');
    }

    public function register() {
        if (Request::isMethod('post')) {
            $user = new UserModel;
            $user->username = Input::get('username');
            $email = $user->email = Input::get('email');
            $user->mobile = Input::get('mobile');
            $user->location = Input::get('location');
            $user->password = Hash::make(Input::get('password'));
            $nowemail = UserModel::where('email', '=', $email);

            if ($nowemail->count()) {
                Session::flash('Success_msg', 'Your email is already registered');
            } else {
                if ($user->username && $user->email && $user->password && $user->mobile) {
                    $user->save();
                    Session::flash('Success_msg', 'You\'ve Successfully registered');
                } else {
                    Session::flash('Success_msg', 'Please Enter all the field');
                }
            }
        }
        $this->layout->content = View::make('registration');
    }

    public function registerAction() {

        $user = new UserModel;
        $user->name = Input::get('name');
        $user->email = Hash(Input::get('email'));
        $user->save();
        echo "you data has been saved";
    }

    public function showData() {
        $data['users'] = User::all();
//        return View::make('showdata', $data);
        $this->layout->content = View::make('showdata', $data);
    }

    public function delete($id) {
        $user = User::where('_id', '=', $id)->delete();
        return Redirect::back();
    }

    public function logout() {
        Auth::logout();
        Session::flash('Success_msg', 'You have successfully Logged out');
        return Redirect::to('login');
    }

    public function profile() {
        $id = Auth::id();
        $data['users'] = User::find($id);
        $this->layout->content = View::make('profile', $data);
    }

    public function update() {
        $id = Auth::id();
        $user = User::find($id);
        if (Request::isMethod('post')) {
            $name = $user->username = Input::get('username');
            $mob = $user->mobile = Input::get('mobile');
            $loc = $user->location = Input::get('location');
            $pass =Input::get('password');
            
            if($pass){
                $user->password = Hash::make(Input::get('password'));
            }
            if ($name && $mob && $loc) {
                $user->save();
                Session::flash('Success_msg', 'You\'ve Successfully updated');
                return Redirect::to('profile');
            }
            else{
                Session::flash('Success_msg', 'Please Enter all the field');
                return Redirect::to('update');
            }
        }

        $data['users'] = $user;
        $this->layout->content = View::make('update', $data);
    }

}
