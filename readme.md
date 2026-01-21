![logomark](./typeToonLogomark.svg)

<p>
![Packagist](https://img.shields.io/packagist/v/types-toon/types-toon)
![Downloads](https://img.shields.io/packagist/dt/types-toon/types-toon)
![License](https://img.shields.io/packagist/l/types-toon/types-toon)
</p>

# TypesToon

<p>a simple and elegant lib for manipulate types of data in php, with fluent API</p>

## types supported

1. string
2. array
3. number

## examples

### code

```php

require_once __DIR__."/vendor/autoload.php";

use TypesToon\Toon as Type;

$text=Type::str("typetoon lib");

echo $text->upper();

```

### output

```bash

TYPETOON LIB

```
