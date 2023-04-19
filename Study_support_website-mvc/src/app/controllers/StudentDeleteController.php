<?php
importModel("StudentDelete");

class StudentDeleteController
{
    public function index()
    {
        $studentdelete = new StudentDeleteModel();
        $layout = 'nolayout';
        $data = ['studentdelete' => $studentdelete];
        renderView('studentdelete', $data, $layout);
    }
}
