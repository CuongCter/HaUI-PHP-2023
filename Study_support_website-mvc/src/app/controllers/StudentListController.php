<?php
importModel("StudentList");

class StudentListController
{
    public function index()
    {
        $studentlist = new StudentListModel();
        $layout = 'nolayout';
        $data = ['studentlist' => $studentlist];
        renderView('studentlist', $data, $layout);
    }
}
