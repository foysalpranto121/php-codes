// Set A
<?php
class Student {
    private $marks;

    function setMarks($m) {
        $this->marks = $m;
    }

    function getMarks() {
        return $this->marks;
    }
}

$student = new Student();
$student->setMarks(82);
echo "Input: Student->setMarks(82)<br>";
echo "Output: Marks = " . $student->getMarks();
?>


// set B
<?php
class Account {
    private $balance;

    function __construct($balance) {
        $this->balance = $balance;
    }

    function deposit($amount) {
        $this->balance += $amount;
    }

    function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Not enough balance<br>";
        }
    }

    function getBalance() {
        return $this->balance;
    }
}

$account = new Account(500);
$account->deposit(600);
$account->withdraw(800);
echo "Input: \$account->setBalance(500); \$account->deposit(600); \$account->withdraw(800)<br>";
echo "Output: Current Balance = " . $account->getBalance();
?>
