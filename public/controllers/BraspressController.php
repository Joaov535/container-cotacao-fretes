<?php

namespace controllers;

use core\Controller;
use shippingCalculator\carriers\Braspress;

class BraspressController extends Controller
{

    function quote($param): void
    {
        $braspress = new Braspress($param["token"], $param["shipping"]);
        $response = $braspress->doRequest();
        $this->response($response);
    }
}