<?php

interface g{
    public function cgpa($var);
}

class Template implements g{
    private $cg;
    public function cgpa($var)
    {
       return $this->cg = $var;
    }
}

$obj = new Template();
echo $obj -> cgpa(3.50);



