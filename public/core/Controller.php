<?php

namespace core;

abstract class Controller
{

    abstract function quote($param);
    protected function response(array $data): void
    {
        header("HTTP/1.1 200 OK");
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($data);
        exit();
    }
}