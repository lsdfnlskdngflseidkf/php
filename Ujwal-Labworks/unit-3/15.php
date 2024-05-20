<?php
class InsufficientBalanceException extends Exception{}
class BankAccount{
    public $accountNumber;
    public $totalBalance;
    function deposit($amount){
        $this->totalBalance+=$amount;
        echo "$amount deposited,Totalbalance: $this->totalBalance <br>";
    }
    function withdraw($amount){
        try{
        if($amount>$this->totalBalance){
        throw new InsufficientBalanceException;
        }
        else{
            $this->totalBalance-=$amount;
            echo "Amount Successfully withdrawn";
        }
    }catch(InsufficientBalanceException $e){
        echo "The withdraw amount cannot be higher than the balance<br>";
    }
    }
    function getBalance(){
        return $this->totalBalance."<br>";
    }
}
class SavingAccount extends BankAccount{
    public $interestRate;
    function addInterest() {
        $this->totalBalance = $this->totalBalance * (1 + ($this->interestRate / 100));
    }
}
$account = new BankAccount();
$account->accountNumber = '1234567890';
$account->deposit(1000);
try {
    $account->withdraw(500);
    echo "Current balance: " . $account->getBalance() . "<br>";
} catch (InsufficientBalanceException $e) {
    echo "Exception: " . $e->getMessage() . "<br>";
}
try {
    $account->withdraw(600);
} catch (InsufficientBalanceException $e) {
    echo "Exception: " . $e->getMessage() . "<br>";
}
$savingAccount = new SavingAccount();
$savingAccount->accountNumber = '0987654321';
$savingAccount->deposit(5000);
$savingAccount->interestRate = 5;
$savingAccount->addInterest();
echo "Saving account balance after interest: " . $savingAccount->getBalance() . "<br>";
try {
    $savingAccount->withdraw(4000);
    echo "Saving account balance after withdrawal: " . $savingAccount->getBalance() . "<br>";
} catch (InsufficientBalanceException $e) {
    echo "Exception: " . $e->getMessage() . "<br>";
}
?>