<?php
class InsufficientBalanceException extends Exception{}
class BankAccount{
    public $accountNumber;
    public $totalBalance;
    function deposit($amount){
        $this->totalBalance+=$amount;
    }
    function withdraw($amount){
        try{
        if($amount>$totalBalance){
        throw new InsufficientBalanceException;
        }
        else{
            $totalBalance-=$amount;
            echo "Amount Successfully withdrawn";
        }
    }catch(InsufficientBalanceException $e){
        echo "The withdraw amount cannot be higher than the balance";
    }
    }
    function getBalance(){
        return $this->totalBalance;
    }
}
class SavingAccount extends BankAccount{
    public $interestRate;
    function addInterest(){
        $this->totalBalance=$this->totalbalance*(($this->interestRate/100)+1);
    }
}
$account = new BankAccount();
$account->accountNumber = '1234567890';
$account->deposit(1000);
try {
    $account->withdraw(500);
    echo "Current balance: " . $account->getBalance() . "\n";
} catch (InsufficientBalanceException $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
try {
    $account->withdraw(600);
} catch (InsufficientBalanceException $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
$savingAccount = new SavingAccount();
$savingAccount->accountNumber = '0987654321';
$savingAccount->deposit(5000);
$savingAccount->interestRate = 5;
$savingAccount->addInterest();
echo "Saving account balance after interest: " . $savingAccount->getBalance() . "\n";
try {
    $savingAccount->withdraw(4000);
    echo "Saving account balance after withdrawal: " . $savingAccount->getBalance() . "\n";
} catch (InsufficientBalanceException $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
?>