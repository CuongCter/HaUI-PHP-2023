<?php
importModel("Event");

class EventController
{
    public function index()
    {
        $event = new EventModel();
        $data = ['event' => $event];
        renderView('event', $data);
    }
}
