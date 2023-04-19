<?php
importModel("Class");

class ClassController
{
    public function index()
    {
        $class = new ClassModel();
        $data = ['class' => $class];
        renderView('class', $data);
    }
}
