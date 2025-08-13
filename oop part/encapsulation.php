<?php
class BankAccount {
    // Private property (cannot be accessed directly)
    private $balance = 0;

    // Public method to set balance
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount<br>";
        } else {
            echo "Invalid deposit amount<br>";
        }
    }

    // Public method to get balance
    public function getBalance() {
        return $this->balance;
    }
}

// Create object
$account = new BankAccount();

// Accessing balance directly ❌
// echo $account->balance; // ERROR

// Using public methods ✅
$account->deposit(500);
echo "Current Balance: " . $account->getBalance();
?>
