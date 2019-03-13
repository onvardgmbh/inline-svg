# Inline SVG

## File
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::file( __DIR__ .'/angle-right.svg')->get()?>
</div>
```

## Font Awesome
Icons: [http://fontawesome.io/icons/](http://fontawesome.io/icons/)
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::fontAwesome('angle-right')->get()?>
</div>
```

## ionicons
Icons: [http://ionicons.com/](http://ionicons.com/)
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::ionicons('ios-arrow-right')->get()?>
</div>
```
## Boxicons
Icons: [https://boxicons.com/](https://boxicons.com/)
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::boxicons('bxs-rocket')->get()?>
</div>
```

## width / height
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::ionicons('ios-search')->height('100')->width('100')->get()?>
</div>
```

## strokeColor
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::file( __DIR__ .'/angle-right.svg')->strokeColor('#545454')->get()?>
</div>
```

## List of Icon Options
You can get a list of all available icons by calling one of the following methods:
```php
InlineSVG::getOptionsFontAwesome();
InlineSVG::getOptionsIonicons();
InlineSVG::getOptionsBoxicons();
```
Example:
```php
Container::make('nav_menu', 'Menu Settings')
         ->add_fields([
             Field::make('select', 'crb_icon', __('Icon', 'wptheme'))
                ->add_options(InlineSVG::getOptionsFontAwesome()),
         ]);
```


## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
