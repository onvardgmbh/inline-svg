<?php 

    use Onvardgmbh\InlineSVG;

    Container::make('nav_menu','Menu Settings')
        -> add_fields([
            Field::make('select','crb_icon',__('Icon','wptheme'))
                -> add_options(InlineSVG::getOptionsFontAwesome())
        ]);

?>
