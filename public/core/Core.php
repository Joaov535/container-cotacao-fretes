<?php

namespace core;

class Core
{
    public function run()
    {

        $url = "/";

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        }

        if ($url != "/") {
            $url = explode("/", $url);

            if (count($url) > 2) {

                header("HTTP/1.0 403 Forbidden");
                header('Content-type: application/json');
                echo json_encode(["message" => "Access Forbidden"]);
                die();

            }

            $currentController = ucfirst($url[1]) . "Controller";

        } else {
            $currentController = "HomeController";
        }

        $controllerClassName = "controllers\\" . $currentController;
        $controller = new $controllerClassName();
        $controller->quote($this->getJson());
    }

    private function getJson()
    {
        $json = file_get_contents("php://input");
        if ($json) return json_decode($json);
        return ["message" => "Data not found"];
    }
}