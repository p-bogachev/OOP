<?php

class SavingAccount extends BankAccount
{
    private $interestRate;

    public function setInterestRate($interestRate): void
    {
        $this->interestRate = $interestRate;
    }

    public function addInterest(){
        $interest = $this->interestRate * $this->getBalance();
        $this->setInterestRate($interest);
    }
}