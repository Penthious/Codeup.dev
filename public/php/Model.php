<?php

class Model{
    private $attributes = [];

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;

    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }


}

$model = new Model();
var_dump($model) . PHP_EOL;
$model->content = 1000;
var_dump($model) . PHP_EOL;
echo $model->content;



?>
