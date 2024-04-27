<?php

namespace controllers;

use core\Controller;

class HomeController extends Controller
{
    public function quote($data)
    {
        $output = [
            "message" => "Nenhuma transportadora escolhida"
        ];
        parent::response($output);
    }
}