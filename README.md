# Buddhism Rules

To check a sentence with buddhism rules and know what they believe. Have fun!

## Installation

Require the package using composer:

```bash
composer require kyimyohan/buddhism_rules
```

## Usage

```php
use KyiMyoHan\BuddhismRules\RulesFactory;

$buddhism = new RulesFactory();
$buddhism->saw('He stole a car'); 
echo $buddhism->believes(); // Will be purnished in hell and stolen again in after life.
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
