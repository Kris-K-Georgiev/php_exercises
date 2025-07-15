# Training25

# My chat with ChatGPT

***

### Prompt:
>How can I check if a number is prime in PHP? Please provide a sample function?

**Answer:**
>A prime number is a number greater than 1 that has no divisors other than 1 and itself. The function below checks divisibility up to the square root of the number for efficiency.

```php
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
    }
```

***

### Prompt
>How do I convert temperatures from Celsius to Fahrenheit and Kelvin in PHP? Provide formulas and example code?

**Answer:**
>Temperature conversion formulas are standard. Using PHP you can implement them as follows:

```php
    $celsius = 25;
    $fahrenheit = $celsius * 9/5 + 32;
    $kelvin = $celsius + 273.15;
```

***

### Prompt:
>How do I get and process a date from an HTML date input field in PHP?

**Answer:**
>The date input provides a string in YYYY-MM-DD format. You can convert it to a timestamp for formatting or calculations.

```php
    $date = $_POST['date']; // e.g., "2025-07-15"
    $timestamp = strtotime($date);
    echo date('d.m.Y', $timestamp); // outputs "15.07.2025"
```

***

### Prompt:
>How do I start a session and store the username in PHP?

**Answer:**
>Sessions allow you to keep user data between page requests. Always call session_start() at the top.

```php
session_start();
$_SESSION['username'] = 'kris';
// Access later:
echo $_SESSION['username'];
```

***

### Prompt:
>How do I create an associative array with usernames and passwords in PHP?

**Answer:**
>An associative array lets you map usernames to passwords for quick lookup.

```php
    $users = [
        'user1' => 'pass123',
        'admin' => 'adminpass'
    ];
```

***

