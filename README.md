
[![Badge License]][License]

<br>

<div align = center>

[<img
    src = Resources/Logo.svg
    width = 200
/>][#]

# **Inline SVG**

*A small package to insert*  
*SVG graphics into your page*

</div>

<br>
<br>

## Installation

*Include the following declaration in your code.*

<br>

```php
<?php use Onvardgmbh\InlineSVG; ?>
```

<br>
<br>

## Showcase

*An example using many of the available options.*

<br>

```php
<?php use Onvardgmbh\InlineSVG; ?>

<div>
    <?=  InlineSVG::ionicons('ios-search')
            -> strokeColor('#926621')
            -> height('200')
            -> width('100')
            -> get() 
    ?>
</div>
```

<br>
<br>

## Sources

*SVGs can be loaded from a path or vendor.*

<br>

-   ### Local File

    ```php
    <?= InlineSVG::file( __DIR__ .'/angle-right.svg') ?>
    ```

    <br>

-   ### **[Font Awesome]**

    ```php
    <?= InlineSVG::fontAwesome('angle-right') ?>
    ```

    <br>

-   ### **[Ion Icons]**

    ```php
    <?= InlineSVG::ionicons('ios-arrow-right') ?>
    ```

    <br>

-   ### **[Box Icons]**

    ```php
    <?= InlineSVG::boxicons('bxs-rocket') ?>
    ```

<br>
<br>

## Options

*Available SVG transformation options.*

<br>

### Size

```php
<?= svg 
    -> height('100')
    -> width('100') ?>
```

<br>

### Stroke Color

```php
<?= svg -> strokeColor('#545454') ?>
```

<br>
<br>

## Vendor Icons

*You can also list the available icons.*

<br>

```php
<?php
    InlineSVG::getOptionsFontAwesome();
    InlineSVG::getOptionsIonicons();
    InlineSVG::getOptionsBoxicons();
?>
```

<br>

[*» Check out the `/Vendor Icons.php` example.*][Example Vendor Icons]

<br>


<!----------------------------------------------------------------------------->

[Font Awesome]: https://fontawesome.io/icons/
[Ion Icons]: https://ionicons.com/
[Box Icons]: https://boxicons.com/

[Example Vendor Icons]: Examples/Vendor%20Icons.php
[License]: LICENSE
[#]: #


<!---------------------------------[ Badges ]---------------------------------->

[Badge License]: https://img.shields.io/badge/License-MIT-ac8b11.svg?style=for-the-badge&labelColor=yellow
