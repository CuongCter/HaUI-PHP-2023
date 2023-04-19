<?php
importModel("EventEdit");

class EventEditController
{
    public function index()
    {
        $eventedit = new EventEditModel();
        $layout = 'nolayout';
        $data = 
        ['eventedit' => $eventedit];
        renderView('eventedit', $data, $layout);
    }
}
