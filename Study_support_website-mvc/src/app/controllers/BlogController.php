<?php
importModel("Blog");

class BlogController
{
    public function index()
    {
        $blog = new BlogModel();
        $data = ['blog' => $blog];
        renderView('blog', $data);
    }
}
