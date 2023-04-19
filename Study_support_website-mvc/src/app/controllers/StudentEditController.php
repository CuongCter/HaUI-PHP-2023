<?php
importModel("StudentEdit");

class StudentEditController
{
    public function index()
    {
        $studentedit = new StudentEditModel();
        $layout = 'nolayout';
        $data = ['studentedit' => $studentedit];
        renderView('studentedit', $data, $layout);
    }
}
