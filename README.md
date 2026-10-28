# PHP OOP Patterns

A hands-on PHP 8.5 project for learning Object-Oriented Programming concepts through practical examples.

## Topics

### Abstraction
- [Abstract Method](Abstraction/abstract_method.php) — `abstract public function engine(): string;` — no body, child must implement
- [Concrete Method](Abstraction/concrete_method.php) — method with body inside abstract class, child can inherit or override
- [Abstract Class](Abstraction/abstract_class.php) — blueprint with shared logic + forced implementation

### Encapsulation
- [Bank Account](Encapsulation/bank_account.php) — private properties, getter/setter, and protected method with inheritance

### Inheritance
- [Inheritance](Inheritance/inheritance.php) — extends, parent::, method overriding, visibility

### Polymorphism
- Coming soon

### Interfaces
- Coming soon

### Traits
- Coming soon

### SOLID Principles
- Coming soon

### Design Patterns
- Coming soon

## Setup

```bash
docker compose up -d
```

| Service      | URL                   | User / Pass        |
| ------------ | --------------------- | ------------------ |
| PHP Server   | http://localhost:8000  | —                  |
| phpMyAdmin   | http://localhost:8080  | user / password    |
| MySQL        | localhost:3306        | root / root        |

## Stop

```bash
docker compose down
```
