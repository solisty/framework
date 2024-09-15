<?php
use R;
class Test
{
    private $name = "test";
    private $props = [
        "age" => 21,
        "height" => 5.7
    ];

    public function __construct()
    {
        $this->props["name"] = $this->name;
    }
}

$test = new Test();

var_dump(R::exportAll($test));
