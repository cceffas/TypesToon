<p align="center"><img src="./typeToonLogomark.svg" alt="logomark"></p>

---

![Packagist](https://img.shields.io/packagist/v/types-toon/types-toon)
![Downloads](https://img.shields.io/packagist/dt/types-toon/types-toon)
![License](https://img.shields.io/packagist/l/types-toon/types-toon)

## About Types-Toon

<p>TypesToon is a PHP library for manipulating primitive types using a fluent, simple, and chainable API, inspired by modern languages.</p>

## Something like:

-less verbosity

-more readability

-chained methods

-focus on productivity

## Types Supported

1. string/text
2. array/list
3. number

## Code Examples

### array

```php

require_once __DIR__."/vendor/autoload.php";

use TypesToon\Toon as type;


$users = [
    [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'age' => 30,
    ],
    [
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'age' => 25,
    ],
    [
        'name' => 'Alice Johnson',
        'email' => 'alice@example.com',
        'age' => 28,
    ],
];



# declare object the type array
$list = type::Arr($users);


# demonstrate various methods

$list->forEach(function ($user) {

    echo "Name: {$user['name']}, Email: {$user['email']}, Age: {$user['age']}\n";
});



```

#### output

```bash

Name: John Doe, Email: john@example.com, Age: 30
Name: Jane Smith, Email: jane@example.com, Age: 25
Name: Alice Johnson, Email: alice@example.com, Age: 28

```

---

### string

```php

use TypesToon\Toon as type;

require_once __DIR__ . '/../vendor/autoload.php';


# declare object the type string

$text=type::Str("Hello, World!");

# demonstrate various methods

echo "length: ".$text->length()."\n";
echo "upper: ".$text->upper()."\n";
echo "lower: ".$text->lower()."\n";
echo "replace: ".$text->replace("World","PHP")."\n";
echo "substring: ".$text->substring(7,5)."\n";

echo "fluet: ".$text->lower()->replace("hello","hi")->length()."\n";


```

#### output

```bash

length: 13
upper: HELLO, WORLD!
lower: hello, world!
replace: Hello, PHP!
substring: World
fluet: 10

```

---

## Number

```php

use TypesToon\Toon as type;

require_once __DIR__ . '/../vendor/autoload.php';

# declare a Num type

$num = type::Num(400.00);

# demonstrate various methods

echo "Sqrt: " . $num->sqrt() . "\n";
echo "Is Even: " . ($num->isEven() ? 'Yes' : 'No') . "\n";
echo "Is Odd: " . ($num->isOdd() ? 'Yes' : 'No') . "\n";
echo "Absolute Value: " . $num->abs() . "\n";
echo "Rounded Value: " . $num->round() . "\n";
echo "Ceiling Value: " . $num->ceil() . "\n";
echo "Floor Value: " . $num->floor() . "\n";
echo "Formatted Value: " . $num->format(3, '.', ',') . "\n";

echo "Result of complex operations: " . ($num->divide(2)->sqrt()->isEven() ? 'Yes' : 'No') . "\n";





```

#### output

```bash

Sqrt: 20
Is Even: Yes
Is Odd: No
Absolute Value: 400
Rounded Value: 400
Ceiling Value: 400
Floor Value: 400
Formatted Value: 400.000
Result of complex operations: Yes

```
