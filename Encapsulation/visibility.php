<?php

class User
{
    private string $password;
    protected string $email;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function verifyPassword(string $input): bool
    {
        return $this->password === $input;
    }
}

class Admin extends User
{
    public function getDetails(): string
    {
        // ✅ protected — child can access
        return "Admin email: " . $this->email;

        // ❌ private — child CANNOT access
        // return $this->password; // error
    }
}

$user = new User("user@test.com", "secret123");

echo $user->getEmail() . "\n";
echo $user->verifyPassword("secret123") ? "Password OK\n" : "Wrong\n";
echo $user->verifyPassword("wrong") ? "Password OK\n" : "Wrong\n";

echo "\n---\n\n";

$admin = new Admin("admin@test.com", "admin456");
echo $admin->getDetails() . "\n";
