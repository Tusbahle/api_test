<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Response{
    public function toJson($data){
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        die();
    }
}

function seyHell(Response $response){
    $response->toJson(["data"=> "Almost done"]);
}

seyHell();

?>
