<?php
importModel("Login");

class LoginController
{
    public function index()
    {
        $login = new LoginModel();
        $layout = 'nolayout';
        $data = 
        ['login' => $login];
        renderView('login', $data, $layout);
    }
}
