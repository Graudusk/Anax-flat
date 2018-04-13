<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",
     
        // Here comes the menu structure
        "items" => [

            /*"hem" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Startsidan"),
                "mark-if-parent" => true,
            ],*/

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningstexter för kursmomenten"),
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Information om kursen och sidan")
            ],

            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Testa typografi"),
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Testa vertikal gridupplägg"),
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys av hemsidor"),
            ],

            "theme-selector" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Visa temaväljare"),
            ],

            "images" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Visa Testsida för bilder"),
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Visa bloggen"),
            ],

            "themes" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("themes"),
                "title" => t("Beskrivning av sidans teman."),
            ],
/*
            "theme" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Visa temasidan"),
            ],

            "design-element" => [
                "text"  => t("Designelement"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Visa testsida för teman med olika designelement"),
            ],

            "design-principles" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principles"),
                "title" => t("Visa testsida för teman med olika designprinciper"),
            ],*/
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",
     
        // Here comes the menu structure
        "items" => [
            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningstexter för kursmomenten"),
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Information om kursen och sidan")
            ],

            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Testa typografi"),
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Testa vertikal gridupplägg"),
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys av hemsidor"),
            ],

            "theme-selector" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Visa temaväljare"),
            ],

            "images" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Visa Testsida för bilder"),
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Visa bloggen"),
            ],

            "themes" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("themes"),
                "title" => t("Beskrivning av sidans teman."),
            ],
/*
            "theme" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Visa temasidan"),
            ],

            "design-element" => [
                "text"  => t("Designelement"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Visa testsida för teman med olika designelement"),
            ],

            "design-principles" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principles"),
                "title" => t("Visa testsida för teman med olika designprinciper"),
            ],*/
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
