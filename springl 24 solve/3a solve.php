<?php
class Department {
    public static $universityName = "Daffodil International University";
    public $studentName;
    public $departmentName;
    public $studentId;
    public $cgpa;

    public function display() {
        echo "University Name: " . self::$universityName . "<br>";
        echo "Student Name: " . $this->studentName . "<br>";
        echo "Department Name: " . $this->departmentName . "<br>";
        echo "ID: " . $this->studentId . "<br>";
        echo "CGPA: " . $this->cgpa . "<br><br>";
    }
}


class SWE extends Department {
    public function __construct($studentName, $studentId, $cgpa) {
        $this->studentName = $studentName;
        $this->departmentName = "SWE";   // fixed department
        $this->studentId = $studentId;
        $this->cgpa = $cgpa;
    }
}


class CSE extends Department {
    public function __construct($studentName, $studentId, $cgpa) {
        $this->studentName = $studentName;
        $this->departmentName = "CSE";   // fixed department
        $this->studentId = $studentId;
        $this->cgpa = $cgpa;
    }
}

// Example usage
$student1 = new SWE("TOM", "265552", 3.94);
$student1->display();

$student2 = new CSE("ALICE", "265553", 3.85);
$student2->display();
?>
