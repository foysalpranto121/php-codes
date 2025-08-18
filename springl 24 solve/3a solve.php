<?php
// Parent class
class Department {
    public static $universityName = "Daffodil International University";
    public $studentName;
    public $departmentName;
    public $studentId;
    public $cgpa;

    // Constructor
    public function __construct($studentName, $departmentName, $studentId, $cgpa) {
        $this->studentName = $studentName;
        $this->departmentName = $departmentName;
        $this->studentId = $studentId;
        $this->cgpa = $cgpa;
    }

    // Display method
    public function display() {
        echo "University Name: " . self::$universityName . "<br>";
        echo "Student Name: " . $this->studentName . "<br>";
        echo "Department Name: " . $this->departmentName . "<br>";
        echo "ID: " . $this->studentId . "<br>";
        echo "CGPA: " . $this->cgpa . "<br>";
    }
}

// Child class SWE
class SWE extends Department {
    public function __construct($studentName, $studentId, $cgpa) {
        parent::__construct($studentName, "SWE", $studentId, $cgpa);
    }
}

// Child class CSE
class CSE extends Department {
    public function __construct($studentName, $studentId, $cgpa) {
        parent::__construct($studentName, "CSE", $studentId, $cgpa);
    }
}

// Example usage
$student1 = new SWE("TOM", "265552", 3.94);
$student1->display();
?>
