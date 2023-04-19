<?php
importModel("Admin");

class AdminController
{
    public function index()
    {
        $admin = new AdminModel();
        $layout = 'nolayout';
        $data = ['admin' => $admin];
        renderView('admin', $data, $layout);
    }
}
