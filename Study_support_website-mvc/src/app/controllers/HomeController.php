<?php
importModel("Home");

class HomeController
{
    public function index()
    {
        $home = new HomeModel();
        $data = ['home' => $home];
        renderView('home', $data);
    }
}
