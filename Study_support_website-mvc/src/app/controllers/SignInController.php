<?php
importModel("SignIn");

class SignInController
{
    public function index()
    {
        $signin = new SignInModel();
        $layout = 'nolayout';
        $data = ['signin' => $signin];
        renderView('signin', $data, $layout);
    }
}
