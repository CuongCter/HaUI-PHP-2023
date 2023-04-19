<?php
importModel("Logout");

class LogoutController
{
    public function index()
    {
        $logout = new LogoutModel();
        $layout = 'nolayout';
        $data = 
        ['logout' => $logout];
        renderView('logout', $data, $layout);
    }
}
