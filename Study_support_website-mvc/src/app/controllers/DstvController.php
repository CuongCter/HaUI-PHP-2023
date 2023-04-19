<?php
importModel("Dstv");

class DstvController
{
    public function index()
    {
        $dstv = new DstvModel();
        $data = ['dstv' => $dstv];
        renderView('dstv', $data);
    }
}
