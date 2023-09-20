<?php

class Greetings{
    public function greetings(){
        echo "Hello world";
    }
}

$object = new Greetings();
echo $object->greetings();