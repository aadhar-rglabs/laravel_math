# Laravel Math Library

This is a simple math library for Laravel that provides functions to calculate Fibonacci numbers and check if a number is prime.

## Installation

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install dependencies.

## Usage

### Fibonacci

To calculate the Fibonacci number of a given integer:

```php
use Aadhar\Math\Math;

echo Math::fibonacci(10); // Output: 55
```

### Prime Check

To check if a given number is prime:

```php
use Aadhar\Math\Math;

echo Math::isPrime(7); // Output: true
```

## Using with Laravel

1. Add the service provider to the `config/app.php` file in the `providers` array:
    ```php
    'providers' => [
        // ...existing code...
        Aadhar\Math\MathServiceProvider::class,
    ],
    ```

2. (Optional) Add the alias to the `config/app.php` file in the `aliases` array:
    ```php
    'aliases' => [
        // ...existing code...
        'Math' => Aadhar\Math\Facades\Math::class,
    ],
    ```

3. Use the Math library in your Laravel application:
    ```php
    use Math;

    $fibonacci = Math::fibonacci(10);
    $isPrime = Math::isPrime(7);
    ```

## License

This project is licensed under the MIT License.
