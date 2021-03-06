<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",
    
    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typography.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "opaque" => [
            "title"      => "A theme with a background photo, transparent sections and centered content.",
            "class"      => "dark",
            "stylesheets" => ["css/opaque.min.css"]
        ],

        "full-width" => [
            "title"      => "A theme with a textured background and full-width content.",
            "class"      => "dark",
            "stylesheets" => ["css/full-width.min.css"]
        ],

        "gradiant" => [
            "title"      => "A theme with gradient background color, pronounced borders and smaller images in the background.",
            "class"      => "dark",
            "stylesheets" => ["css/gradiant.min.css"]
        ],

        "separator3" => "------------------------------------------------",

        "3d-color" => [
            "title"      => "A theme with the design principles of variation and perspective inorporated.",
            "class"      => "colorful",
            "stylesheets" => ["css/3d-color.min.css"]
        ],

        "dark-balance" => [
            "title"      => "A theme with the design principles of balance, unity and harmony inorporated.",
            "class"      => "dark",
            "stylesheets" => ["css/dark-balance.min.css"]
        ],

        "separator4" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => []
        ],
    ]
];
