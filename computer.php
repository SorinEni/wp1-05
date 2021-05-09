<?php 

class Computer
{
    private $name;
    public function __construct(string $name) {
        $this->name = $name;   
    }
    public function summary() {
        echo "Your computer <strong>$this->name</strong> has virus!!<br>";
    }
}

?>