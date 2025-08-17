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
echo "Output: Current Balance = " . $account->getBalance();
?>
