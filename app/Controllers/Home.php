<?php

class Home extends Controller
{
    public function index()
    {
        return view('home_index');
    }

    public function data()
    {
        return view('home_data', [
            'greeting' => 'Hello there'
        ]);
    }

    public function register()
    {
        if ($_POST) {
            $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $user_id = $this->ins('users', [
                'email' => $_POST['email'],
                'password' => $password_hash
            ]);

            setcookie('ml_id', $user_id, time() + 90 * 86400, '/');
            setcookie('ml_p', $password_hash, time() + 90 * 86400, '/');

            redirect();
        }

        return $this->view('home_register', [
            'title' => 'Реєстрація'
        ]);
    }
}