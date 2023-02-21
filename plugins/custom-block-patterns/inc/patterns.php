<?php

/**
     * CUSTOM BLOCK PATTERN for Saas-Landing
     * - Register Pattern Cat/Label
     * - Register Daniel\'s Test
*/

register_block_pattern_category(
    'Daniel\'s Test',
    array(
        'label'     => __( 'Daniel\'s Test', 'saas-landing' )
    )
);

function custom_block_pattern() {

    register_block_pattern(
        'saas-landing/custom-block-card01',
        array(
            'title'       => __( 'Card 1', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\"} -->\r\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#ebffdb\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"className\":\"saas-card01\"} -->\r\n<div class=\"wp-block-column saas-card01 has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#ebffdb;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"40px\"}}} -->\r\n<h3 id=\"single\" style=\"font-size:40px\">Multiple Sources. One Truth</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"lineHeight\":\"1.5\"}},\"fontSize\":\"normal\"} -->\r\n<p class=\"has-normal-font-size\" style=\"line-height:1.5\">All your data sources together to provide you with a single source of insight.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image {\"id\":8,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card01-image\"} -->\r\n<figure class=\"wp-block-image size-full saas-card01-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-62.png\" alt=\"\" class=\"wp-image-8\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card02',
        array(
            'title'       => __( 'Card 2', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\"} -->\r\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#d5e9f8\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"className\":\"saas-card02\"} -->\r\n<div class=\"wp-block-column saas-card02 has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#d5e9f8;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:image {\"id\":9,\"width\":182,\"height\":161,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card02-image\"} -->\r\n<figure class=\"wp-block-image size-full is-resized saas-card02-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Frame-3668.png\" alt=\"\" class=\"wp-image-9\" width=\"182\" height=\"161\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"level\":3,\"fontSize\":\"large\"} -->\r\n<h3 class=\"has-large-font-size\"><strong>The basics are always free</strong></h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Data visualizations that work for every store and size. Unlock Store Overview and Email Reports at no extra cost</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card03',
        array(
            'title'       => __( 'Card 3', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\"} -->\r\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#c5b6f0\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"className\":\"saas-card03\"} -->\r\n<div class=\"wp-block-column saas-card03 has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#c5b6f0;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"40px\"}}} -->\r\n<h3 id=\"patron\" style=\"font-size:40px\"><strong>Modular customization</strong></h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Data views built for every store and size. Identify waves of opportunities and reach new levels of growth.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image {\"id\":10,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card03-image\"} -->\r\n<figure class=\"wp-block-image size-full saas-card03-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3672.png\" alt=\"\" class=\"wp-image-10\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card04',
        array(
            'title'       => __( 'Card 4', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"style\":{\"border\":{\"radius\":\"14px\",\"width\":\"1px\"},\"color\":{\"background\":\"#f5f1ea\"}},\"borderColor\":\"contrast\",\"className\":\"saas-card04 saas-card04-container saas-card04-button saas-card04-paragraph\"} -->\r\n<div class=\"wp-block-columns saas-card04 saas-card04-container saas-card04-button saas-card04-paragraph has-border-color has-contrast-border-color has-background\" style=\"border-width:1px;border-radius:14px;background-color:#f5f1ea\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns {\"className\":\"saas-cards-container\"} -->\r\n<div class=\"wp-block-columns saas-cards-container\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"15%\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:15%\"><!-- wp:gallery {\"linkTo\":\"none\",\"sizeSlug\":\"full\"} -->\r\n<figure class=\"wp-block-gallery has-nested-images columns-default is-cropped\"><!-- wp:image {\"id\":60,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3700.png\" alt=\"\" class=\"wp-image-60\"/></figure>\r\n<!-- /wp:image --></figure>\r\n<!-- /wp:gallery --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"40%\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"0px\",\"right\":\"0px\",\"bottom\":\"0px\",\"left\":\"0px\"}}}} -->\r\n<div class=\"wp-block-column\" style=\"padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:40%\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"24px\"}}} -->\r\n<h2 style=\"font-size:24px\">Reports</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"},\"spacing\":{\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}},\"className\":\"saas-custom-card-paragraph\"} -->\r\n<p class=\"saas-custom-card-paragraph\" style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px\">Your data, delivered right to your inbox.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:buttons {\"className\":\"saas-custom-card-button\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons saas-custom-card-button\"><!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"border\":{\"radius\":\"6px\"}},\"className\":\"is-style-outline\"} -->\r\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-white-background-color has-background wp-element-button\" style=\"border-radius:6px\">Add View</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card05',
        array(
            'title'       => __( 'Card 5', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"style\":{\"border\":{\"radius\":\"14px\",\"width\":\"1px\"},\"color\":{\"background\":\"#f5f1ea\"}},\"borderColor\":\"contrast\",\"className\":\"saas-card05 saas-card05-container saas-card05-button saas-card05-paragraph\"} -->\r\n<div class=\"wp-block-columns saas-card05 saas-card05-container saas-card05-button saas-card05-paragraph has-border-color has-contrast-border-color has-background\" style=\"border-width:1px;border-radius:14px;background-color:#f5f1ea\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns {\"className\":\"saas-cards-container\"} -->\r\n<div class=\"wp-block-columns saas-cards-container\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"15%\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:15%\"><!-- wp:image {\"id\":15,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Icon.png\" alt=\"\" class=\"wp-image-15\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"40%\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"0px\",\"right\":\"0px\",\"bottom\":\"0px\",\"left\":\"0px\"}}}} -->\r\n<div class=\"wp-block-column\" style=\"padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:40%\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"24px\"}}} -->\r\n<h2 style=\"font-size:24px\">Overview</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"},\"spacing\":{\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}},\"className\":\"saas-custom-card-paragraph\"} -->\r\n<p class=\"saas-custom-card-paragraph\" style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px\">The most important data for your store, all in one view</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:buttons {\"className\":\"saas-custom-card-button\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons saas-custom-card-button\"><!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"border\":{\"radius\":\"6px\"}},\"className\":\"is-style-outline\"} -->\r\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-white-background-color has-background wp-element-button\" style=\"border-radius:6px\">Add View</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    // register_block_pattern(
    //     'saas-landing/custom-block-card06',
    //     array(
    //         'title'       => __( 'Card 6', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card07',
    //     array(
    //         'title'       => __( 'Card 7', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card08',
    //     array(
    //         'title'       => __( 'Card 8', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card09',
    //     array(
    //         'title'       => __( 'Card 9', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card10',
    //     array(
    //         'title'       => __( 'Card 10', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card11',
    //     array(
    //         'title'       => __( 'Card 11', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card12',
    //     array(
    //         'title'       => __( 'Card 12', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card13',
    //     array(
    //         'title'       => __( 'Card 13', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card14',
    //     array(
    //         'title'       => __( 'Card 14', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    register_block_pattern(
        'saas-landing/custom-block-card15',
        array(
            'title'       => __( 'Card 15', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\"} -->\r\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#ebffdb\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"className\":\"saas-card15\"} -->\r\n<div class=\"wp-block-column saas-card15 has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#ebffdb;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"40px\"}}} -->\r\n<h3 id=\"single\" style=\"font-size:40px\">Quick View</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:list -->\r\n<ul><!-- wp:list-item -->\r\n<li>A high-level overview of your key performance metrics</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Your Net Sales, Total Spend, Users, Conversion Rate, and AOV, all at a glance.</li>\r\n<!-- /wp:list-item --></ul>\r\n<!-- /wp:list -->\r\n\r\n<!-- wp:image {\"id\":114,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3677-2.png\" alt=\"\" class=\"wp-image-114\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    // register_block_pattern(
    //     'saas-landing/custom-block-card16',
    //     array(
    //         'title'       => __( 'Card 16', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card17',
    //     array(
    //         'title'       => __( 'Card 17', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    register_block_pattern(
        'saas-landing/custom-block-card18',
        array(
            'title'       => __( 'Card 18', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\",\"backgroundColor\":\"white\"} -->\r\n<div class=\"wp-block-columns alignwide has-white-background-color has-background\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#d5e9f8\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"className\":\"saas-card18\"} -->\r\n<div class=\"wp-block-column saas-card18 has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#d5e9f8;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"40px\"}}} -->\r\n<h3 id=\"single\" style=\"font-size:40px\">Channel Efficiency</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:list -->\r\n<ul><!-- wp:list-item -->\r\n<li>Visually compare your ad spend on each channel.</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Determine the percentage of organic</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Get a performance benchmark for each channel.</li>\r\n<!-- /wp:list-item --></ul>\r\n<!-- /wp:list -->\r\n\r\n<!-- wp:image {\"id\":170,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3692.png\" alt=\"\" class=\"wp-image-170\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card19',
        array(
            'title'       => __( 'Card 19', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\",\"backgroundColor\":\"white\"} -->\r\n<div class=\"wp-block-columns alignwide has-white-background-color has-background\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#fef4db\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"className\":\"saas-card19\"} -->\r\n<div class=\"wp-block-column saas-card19 has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#fef4db;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"40px\"}}} -->\r\n<h3 id=\"single\" style=\"font-size:40px\">Interactive</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:list -->\r\n<ul><!-- wp:list-item -->\r\n<li>We know ecommerce metrics are complex.</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Hover over data visualizations to see the exact numbers.</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Compare data points over date range.</li>\r\n<!-- /wp:list-item --></ul>\r\n<!-- /wp:list -->\r\n\r\n<!-- wp:image {\"id\":180,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3701.png\" alt=\"\" class=\"wp-image-180\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    // register_block_pattern(
    //     'saas-landing/custom-block-card20',
    //     array(
    //         'title'       => __( 'Card 20', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card21',
    //     array(
    //         'title'       => __( 'Card 21', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    // register_block_pattern(
    //     'saas-landing/custom-block-card22',
    //     array(
    //         'title'       => __( 'Card 22', 'saas-landing' ),
           
    //         'description' => _x( 'Description here', 'saas-landing' ),
           
    //         'content'     => "",
           
    //         'categories'  => array( 'Daniel\'s Test' ),
    //     )
    // );

    

}    

add_action( 'init', 'custom_block_pattern' );

?>
