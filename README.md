## Gdpro Base

[![Build Status](https://travis-ci.org/gdpro/gdpro-base-.png)]
(https://travis-ci.org/gdpro/gdpro-base-)


### Introduction

Gdpro Base Ui is a base of element to use with user interfaces


### Requirements

Please see the [composer.json](composer.json) file.


### Installation

Run the following `composer` command:

```console
$ composer require "gdpro/gdpro-base:~1.0"
```

Alternately, manually add the following to your `composer.json`, in
the `require` section:

```javascript
"require": {
    "gdpro/gdpro-base": "~1.0"
}
```

And then run `composer update` to ensure the module is installed.

Finally, add the module name to your project's `config/application.config.php`
under the `modules` key:

```php
return array(
    /* ... */
    'modules' => array(
        /* ... */
        'GdproBase',
    ),
    /* ... */
);
```
