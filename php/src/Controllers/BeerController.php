<?php

namespace JacsonSantos\Controllers;

class BeerController
{
    public function getIndex()
    {
        $data  = [];
        return json_encode($data);
    }
}