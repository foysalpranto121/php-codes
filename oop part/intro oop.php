<?php

echo "lets start <br>";

class Player {
    // properties
    public $name;
    public $speed = 3;
    public $running = false;

    // methods
    function set_name($name, $speed) {
        $this->name = $name;
        $this->speed = $speed;
    }

    function get_name() {
        if ($this->running) {
            $status = "Running";
        } else {
            $status = "Stopped";
        }

        return "Name: {$this->name}, Speed: {$this->speed}, Status: {$status}";
    }

    function run() {
        $this->running = true;
    }

    function stopRun() {
        $this->running = false;
    }
}

$player1 = new Player();
$player1->set_name("pranto", 20);
echo $player1->get_name() . "<br>";  //not running



$player2 = new Player();
$player2->set_name("mahin", 23);
echo $player2->get_name() . "<br>"; // Not running
$player1->run();                      // Start running
echo $player1->get_name() . "<br>";  

?>
