# Infernal Dependance

This package allows you to retrieve a URL to have information on a legend/myth present in the infernal dictionary

[![Last version](https://img.shields.io/packagist/v/sorenmesselier-sentis/infernal-dependance?maxAge=3600)](https://packagist.org/packages/sorenmesselier-sentis/infernal-dependance)



## Installation

```bash
composer require sorenmesselier-sentis/infernal-dependance
```

## Local development

```bash
composer install
```

```bash
php vendor/bin/phpstan analyse src --level=max
```

```bash
php vendor/bin/php-cs-fixer fix src --rules=@PSR12
```

```bash
php vendor/bin/phpunit tests
```

## More Informations

For example you want some informations about the Demon **Lilith**:

```php
getName("Lilith")
```

What the function will return :
 ```html
<a href="/wiki/Dictionnaire_infernal/6e_%C3%A9d.,_1863/Lilith" title="Dictionnaire infernal/6e éd., 1863/Lilith">Lilith</a>% 
```