<?php

class BankAccount
{
    private string $owner;
    private float $balance;

    public function __construct(string $owner, float $balance)
    {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): void
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    // protected — only child classes can use this
    protected function formatBalance(): string
    {
        return number_format($this->balance, 2);
    }
}

class SavingsAccount extends BankAccount
{
    private float $interestRate;

    public function __construct(string $owner, float $balance, float $interestRate)
    {
        parent::__construct($owner, $balance);
        $this->interestRate = $interestRate;
    }

    public function applyInterest(): void
    {
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest);
    }

    public function getStatement(): string
    {
        // ✅ protected — child can call parent's formatBalance()
        return "Savings Account — Balance: $" . $this->formatBalance();
    }
}

echo "=== BankAccount ===\n";

$account = new BankAccount("Obydullah", 1000);
echo "Owner: " . $account->getOwner() . "\n";
echo "Balance: " . $account->getBalance() . "\n";

$account->deposit(500);
echo "After deposit: " . $account->getBalance() . "\n";

$account->withdraw(200);
echo "After withdraw: " . $account->getBalance() . "\n";

// ❌ formatBalance() is protected — cannot call from outside
// echo $account->formatBalance(); // error

echo "\n=== SavingsAccount ===\n";

$savings = new SavingsAccount("Obydullah", 1000, 0.05);
echo $savings->getStatement() . "\n";

$savings->applyInterest();
echo "After 5% interest: " . $savings->getBalance() . "\n";
