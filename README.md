## How to create function like laravel ##

**Example**

i seen this code in laravel 

```
public function store(Response $response)
{

}

```

i want to build like  concept in my own php code

for example 

```


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

```

if i call ``seyHello(new Response);`` it works fine.

and i want to call ``sayHello();`` but it show error like this `` Uncaught ArgumentCountError: Too few arguments to function seyHell(), 0 passed in``.

please help me i want build my own rest full api in php ....
