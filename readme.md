# TypesToon

<p>a simple and elegant lib for manipulate types of data in php, with fluent API</p>

## code

```php

require_once __DIR__."/vendor/autoload.php";

use TypesToon\Toon;

$text=Toon::str("typetoon lib");

echo $text->upper();

```

## output

```bash


TYPETOON




```
