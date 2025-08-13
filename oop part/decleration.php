<?php
class Demo {
    public $name = "Foysal";      // Public: Can be accessed from anywhere
    private $age = 23;            // Private: Can be accessed only inside this class
    protected $country = "BD";    // Protected: Can be accessed inside this class and subclasses

    public function showInfo() {
        echo "Name: " . $this->name . "<br>";       // OK
        echo "Age: " . $this->age . "<br>";         // OK
        echo "Country: " . $this->country . "<br>"; // OK
    }
}

class SubDemo extends Demo {
    public function showProtected() {
        echo "Protected Country: " . $this->country . "<br>"; // OK
        // echo $this->age; // ❌ Error: private can't be accessed here
    }
}

$obj = new Demo();
echo $obj->name . "<br>";   // OK
// echo $obj->age;          // ❌ Error: private
// echo $obj->country;      // ❌ Error: protected

$obj->showInfo();           // OK

$sub = new SubDemo();
$sub->showProtected(); // OK
// resource from - chatgpt 
?>
