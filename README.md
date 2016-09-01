## Icon Directive

[![Build Status](https://travis-ci.org/IftekherSunny/IconDirective.svg?branch=master)](https://travis-ci.org/IftekherSunny/IconDirective) [![Total Downloads](https://poser.pugx.org/sun/icon-directive/downloads)](https://packagist.org/packages/sun/icon-directive) [![Latest Stable Version](https://poser.pugx.org/sun/icon-directive/v/stable)](https://packagist.org/packages/sun/icon-directive) [![Latest Unstable Version](https://poser.pugx.org/sun/icon-directive/v/unstable)](https://packagist.org/packages/sun/icon-directive) [![License](https://poser.pugx.org/sun/icon-directive/license)](https://packagist.org/packages/sun/icon-directive)

The icon directive provides @icon directive to use fontawesome icon in the blade template.

## Installation Process
 
Icon directive is available via Composer/Packagist.

```
composer require sun/icon-directive
```

Add the ServiceProvider to the providers array in config/app.php

```php
Sun\IconDirective\IconDirectiveServiceProvider::class,
```

## Basic Uses

To add fontawesome icon in your blade template just use @icon directive and pass the fontawesome icon name.

```html
@icon('github')
```

Optionally, you can add extra classes for the fontawesome icon.

```html
@icon('github', 'fa-5x', 'blue')
```

## Example

In the blade template

```html
<button class="btn btn-primary">
    @icon('save') Save
</button>
```

This code snippet will render as shown below

```html
<button class="btn btn-primary">
    <i class="fa fa-save" aria-hidden="true"></i> Save
</button>
```

## License
This package is licensed under the [MIT License](https://github.com/iftekhersunny/IconDirective/blob/master/LICENSE)
