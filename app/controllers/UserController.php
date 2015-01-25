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
            $user->password = Hash::make(Input::get('password'));
            $nowemail = UserModel::where('email', '=', $email);

            if ($nowemail->count()) {
                Session::flash('Success_msg', 'Your email is already registered');
            } else {
                if ($user->username && $user->email && $user->password) {
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
        $user = User::where('id', '=', $id)->delete();
        return Redirect::back();
    }

    public function logout() {
        Auth::logout();
        Session::flash('Success_msg', 'You have successfully Logged out');
        return Redirect::to('login');
    }

}
