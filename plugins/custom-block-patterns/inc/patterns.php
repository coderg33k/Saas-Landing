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
        'saas-landing/custom-block-hero',
        array(
            'title'       => __( 'Hero', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"saas-hero\"} -->\r\n<div class=\"wp-block-columns saas-hero\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:media-text {\"mediaId\":354,\"mediaLink\":\"http://saaslanding.local/hero-image1/\",\"mediaType\":\"image\"} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile\"><figure class=\"wp-block-media-text__media\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Hero-image1.png\" alt=\"\" class=\"wp-image-354 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:heading -->\r\n<h2>The data layer between your business and its potential.</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"placeholder\":\"Content…\"} -->\r\n<p>Comprehensive reports, data visualizations, and insights to optimize your ecommerce store and help you reach your goals.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p><strong>GET STARTED</strong></p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card01',
        array(
            'title'       => __( 'Card 1', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\",\"style\":{\"color\":{\"background\":\"#ebffdb\"}},\"className\":\"saas-card01\"} -->\r\n<div class=\"wp-block-columns alignwide saas-card01 has-background\" style=\"background-color:#ebffdb\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#ebffdb\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}}} -->\r\n<div class=\"wp-block-column has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#ebffdb;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"level\":3} -->\r\n<h3 id=\"single\">Multiple Sources. One Truth</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"lineHeight\":\"1.5\"}},\"fontSize\":\"normal\"} -->\r\n<p class=\"has-normal-font-size\" style=\"line-height:1.5\">All your data sources together to provide you with a single source of insight.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image {\"id\":8,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card01-image\"} -->\r\n<figure class=\"wp-block-image size-full saas-card01-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-62.png\" alt=\"\" class=\"wp-image-8\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card02',
        array(
            'title'       => __( 'Card 2', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\",\"style\":{\"color\":{\"background\":\"#d5e9f8\"}},\"className\":\"saas-card02\"} -->\r\n<div class=\"wp-block-columns alignwide saas-card02 has-background\" style=\"background-color:#d5e9f8\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}}} -->\r\n<div class=\"wp-block-column has-text-color has-link-color\" style=\"color:#000000;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:image {\"align\":\"center\",\"id\":9,\"width\":322,\"height\":286,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card02-image\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full is-resized saas-card02-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Frame-3668.png\" alt=\"\" class=\"wp-image-9\" width=\"322\" height=\"286\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:spacer {\"height\":\"75px\"} -->\r\n<div style=\"height:75px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:heading {\"level\":3,\"fontSize\":\"large\"} -->\r\n<h3 class=\"has-large-font-size\"><strong>The basics are always free</strong></h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Data visualizations that work for every store and size. Unlock Store Overview and Email Reports at no extra cost</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card03',
        array(
            'title'       => __( 'Card 3', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\",\"style\":{\"color\":{\"background\":\"#c5b6f0\"}},\"className\":\"saas-card03\"} -->\r\n<div class=\"wp-block-columns alignwide saas-card03 has-background\" style=\"background-color:#c5b6f0\"><!-- wp:column {\"style\":{\"color\":{\"text\":\"#000000\",\"background\":\"#c5b6f0\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}}} -->\r\n<div class=\"wp-block-column has-text-color has-background has-link-color\" style=\"color:#000000;background-color:#c5b6f0;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"level\":3} -->\r\n<h3 id=\"patron\"><strong>Modular customization</strong></h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Data views built for every store and size. Identify waves of opportunities and reach new levels of growth.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:spacer {\"height\":\"50px\"} -->\r\n<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:image {\"align\":\"center\",\"id\":10,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card03-image\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full saas-card03-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3672.png\" alt=\"\" class=\"wp-image-10\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
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
           
            'content'     => "<!-- wp:columns {\"verticalAlignment\":null,\"style\":{\"border\":{\"radius\":\"14px\",\"width\":\"1px\"},\"color\":{\"background\":\"#f5f1ea\"}},\"borderColor\":\"contrast\",\"className\":\"saas-card05\"} -->\r\n<div class=\"wp-block-columns saas-card05 has-border-color has-contrast-border-color has-background\" style=\"border-width:1px;border-radius:14px;background-color:#f5f1ea\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"15%\",\"className\":\"saas-card05-image\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center saas-card05-image\" style=\"flex-basis:15%\"><!-- wp:image {\"id\":15,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Icon.png\" alt=\"\" class=\"wp-image-15\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"44%\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"0px\",\"right\":\"0px\",\"bottom\":\"0px\",\"left\":\"0px\"}}},\"className\":\"saas-card05-paragraph\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center saas-card05-paragraph\" style=\"padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:44%\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"orientation\":\"vertical\"}} -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":4,\"fontSize\":\"medium\"} -->\r\n<h4 class=\"has-medium-font-size\">Overview</h4>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"14px\"},\"spacing\":{\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}}} -->\r\n<p style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px\">The most important data for your store, all in one view</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"140px\",\"className\":\"saas-card05-button\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center saas-card05-button\" style=\"flex-basis:140px\"><!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"flexWrap\":\"wrap\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"border\":{\"radius\":\"6px\"}},\"className\":\"is-style-outline\",\"fontSize\":\"small\"} -->\r\n<div class=\"wp-block-button has-custom-font-size is-style-outline has-small-font-size\"><a class=\"wp-block-button__link has-white-background-color has-background wp-element-button\" style=\"border-radius:6px\">Add View</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card06',
        array(
            'title'       => __( 'Card 6', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

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

    register_block_pattern(
        'saas-landing/custom-block-card09',
        array(
            'title'       => __( 'Card 9', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"className\":\"saas-card09\"} -->\r\n<div class=\"wp-block-column saas-card09\" style=\"flex-basis:370px\"><!-- wp:image {\"id\":309,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3702.png\" alt=\"\" class=\"wp-image-309\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card10',
        array(
            'title'       => __( 'Card 10', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"className\":\"saas-card10\"} -->\r\n<div class=\"wp-block-column saas-card10\" style=\"flex-basis:370px\"><!-- wp:image {\"id\":315,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3703.png\" alt=\"\" class=\"wp-image-315\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card11',
        array(
            'title'       => __( 'Card 11', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"className\":\"saas-card11\"} -->\r\n<div class=\"wp-block-column saas-card11\" style=\"flex-basis:370px\"><!-- wp:image {\"id\":321,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3704.png\" alt=\"\" class=\"wp-image-321\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card12',
        array(
            'title'       => __( 'Card 12', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"className\":\"saas-card12\"} -->\r\n<div class=\"wp-block-column saas-card12\" style=\"flex-basis:370px\"><!-- wp:image {\"id\":328,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3705.png\" alt=\"\" class=\"wp-image-328\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card13',
        array(
            'title'       => __( 'Card 13', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"className\":\"saas-card13\"} -->\r\n<div class=\"wp-block-column saas-card13\" style=\"flex-basis:370px\"><!-- wp:image {\"align\":\"center\",\"id\":334,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3706.png\" alt=\"\" class=\"wp-image-334\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card14',
        array(
            'title'       => __( 'Card 14', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"className\":\"saas-card14\"} -->\r\n<div class=\"wp-block-column saas-card14\" style=\"flex-basis:370px\"><!-- wp:image {\"id\":341,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3707.png\" alt=\"\" class=\"wp-image-341\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card15',
        array(
            'title'       => __( 'Card 15', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"align\":\"wide\",\"style\":{\"color\":{\"background\":\"#ebffdb\"}},\"className\":\"saas-card15\"} -->\r\n<div class=\"wp-block-columns alignwide saas-card15 has-background\" style=\"background-color:#ebffdb\"><!-- wp:column {\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"textColor\":\"black\"} -->\r\n<div class=\"wp-block-column has-black-color has-text-color has-link-color\" style=\"padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"40px\"}}} -->\r\n<h3 class=\"has-text-align-left\" id=\"single\" style=\"font-size:40px\">Quick View</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:list -->\r\n<ul><!-- wp:list-item -->\r\n<li>A high-level overview of your key performance metrics</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Your Net Sales, Total Spend, Users, Conversion Rate, and AOV, all at a glance.</li>\r\n<!-- /wp:list-item --></ul>\r\n<!-- /wp:list -->\r\n\r\n<!-- wp:image {\"id\":114,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3677-2.png\" alt=\"\" class=\"wp-image-114\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card16',
        array(
            'title'       => __( 'Card 16', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"style\":{\"color\":{\"background\":\"#fffba0\"}},\"className\":\"saas-card16\"} -->\r\n<div class=\"wp-block-columns saas-card16 has-background\" style=\"background-color:#fffba0\"><!-- wp:column {\"width\":\"\"} -->\r\n<div class=\"wp-block-column\"><!-- wp:heading -->\r\n<h2>Sales Data</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:image {\"align\":\"right\",\"id\":187,\"width\":195,\"height\":185,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card16-image\"} -->\r\n<figure class=\"wp-block-image alignright size-full is-resized saas-card16-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Card.png\" alt=\"\" class=\"wp-image-187\" width=\"195\" height=\"185\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:list -->\r\n<ul><!-- wp:list-item -->\r\n<li>Compare your net sales over any time frame.</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Map your highest-performing products to your sales -- by units or by dollars.</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Understand the percentage of first-time and repeat customers driving sales.</li>\r\n<!-- /wp:list-item --></ul>\r\n<!-- /wp:list --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card17',
        array(
            'title'       => __( 'Card 17', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"style\":{\"color\":{\"background\":\"#c5b6f0\"}},\"className\":\"saas-card17\"} -->\r\n<div class=\"wp-block-columns saas-card17 has-background\" style=\"background-color:#c5b6f0\"><!-- wp:column {\"width\":\"\"} -->\r\n<div class=\"wp-block-column\"><!-- wp:heading -->\r\n<h2>Site Performance</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:image {\"align\":\"right\",\"id\":225,\"width\":199,\"height\":188,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"saas-card17-image\"} -->\r\n<figure class=\"wp-block-image alignright size-full is-resized saas-card17-image\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3693.png\" alt=\"\" class=\"wp-image-225\" width=\"199\" height=\"188\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:list -->\r\n<ul><!-- wp:list-item -->\r\n<li>Track your site performance over time.</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Unpack the customer journey -- from visitor to purchaser.</li>\r\n<!-- /wp:list-item -->\r\n\r\n<!-- wp:list-item -->\r\n<li>Gain a better sense of the quality of traffic you\'re driving.</li>\r\n<!-- /wp:list-item --></ul>\r\n<!-- /wp:list --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

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

    register_block_pattern(
        'saas-landing/custom-block-card20',
        array(
            'title'       => __( 'Card 20', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"style\":{\"color\":{\"background\":\"#c5b6f0\"}},\"className\":\"saas-card20\"} -->\r\n<div class=\"wp-block-column saas-card20 has-background\" style=\"background-color:#c5b6f0;flex-basis:370px\"><!-- wp:media-text {\"mediaId\":267,\"mediaLink\":\"http://saaslanding.local/shopify/\",\"mediaType\":\"image\",\"mediaWidth\":15,\"verticalAlignment\":\"top\"} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top\" style=\"grid-template-columns:15% auto\"><figure class=\"wp-block-media-text__media\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Shopify.png\" alt=\"\" class=\"wp-image-267 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"fontSize\":\"medium\"} -->\r\n<p class=\"has-medium-font-size\">1</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Connect Shopify</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:separator -->\r\n<hr class=\"wp-block-separator has-alpha-channel-opacity\"/>\r\n<!-- /wp:separator -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>It all starts with Shopify. Connect your store to Gprig\'s Platform. </p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card21',
        array(
            'title'       => __( 'Card 21', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"backgroundColor\":\"white\"} -->\r\n<div class=\"wp-block-columns has-white-background-color has-background\"><!-- wp:column {\"width\":\"370px\",\"style\":{\"color\":{\"background\":\"#d5e9f8\"}},\"className\":\"saas-card21\"} -->\r\n<div class=\"wp-block-column saas-card21 has-background\" style=\"background-color:#d5e9f8;flex-basis:370px\"><!-- wp:image {\"align\":\"left\",\"id\":278,\"width\":29,\"height\":31} -->\r\n<figure class=\"wp-block-image alignleft is-resized\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Strength.png\" alt=\"\" class=\"wp-image-278\" width=\"29\" height=\"31\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image {\"align\":\"left\",\"id\":279,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image alignleft size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Snapchat.png\" alt=\"\" class=\"wp-image-279\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image {\"align\":\"left\",\"id\":280,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image alignleft size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/TikTok.png\" alt=\"\" class=\"wp-image-280\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image {\"align\":\"left\",\"id\":281,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image alignleft size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Facebook.png\" alt=\"\" class=\"wp-image-281\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\"} -->\r\n<p class=\"has-text-align-center\">2</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"align\":\"right\",\"fontSize\":\"medium\"} -->\r\n<p class=\"has-text-align-right has-medium-font-size\"><strong>Add your channels</strong></p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card22',
        array(
            'title'       => __( 'Card 22', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"370px\",\"style\":{\"color\":{\"background\":\"#ebffdb\"}},\"className\":\"saas-card22\"} -->\r\n<div class=\"wp-block-column saas-card22 has-background\" style=\"background-color:#ebffdb;flex-basis:370px\"><!-- wp:image {\"align\":\"left\",\"id\":295,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image alignleft size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/WiFi-1.png\" alt=\"\" class=\"wp-image-295\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image {\"align\":\"left\",\"id\":289,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image alignleft size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Frame.png\" alt=\"\" class=\"wp-image-289\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->\r\n<p class=\"has-text-align-center has-medium-font-size\"><strong>3</strong></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"align\":\"right\",\"fontSize\":\"medium\"} -->\r\n<p class=\"has-text-align-right has-medium-font-size\"><strong>Multiple sources</strong></p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-footer1',
        array(
            'title'       => __( 'Footer 1', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:group {\"style\":{\"color\":{\"background\":\"#ebffdb\"}},\"className\":\"saas-footer1\",\"layout\":{\"type\":\"constrained\"}} -->\r\n<div class=\"wp-block-group saas-footer1 has-background\" style=\"background-color:#ebffdb\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"33.33%\"} -->\r\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:image {\"id\":260,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Logo.png\" alt=\"\" class=\"wp-image-260\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph -->\r\n<p></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Join our newsletter</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image {\"id\":385,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3708.png\" alt=\"\" class=\"wp-image-385\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"66.66%\"} -->\r\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->\r\n<h3>Products</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Platform</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Store Overview</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Email Reports</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Portfolio</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->\r\n<h3>Resources</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Case Studies</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Product Guides</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Reports</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Blog</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">FAQ</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->\r\n<h3>Company</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Careers</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Contact Sales</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"fontSize\":\"small\"} -->\r\n<p class=\"has-small-font-size\">Contact Support</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:separator {\"align\":\"center\",\"className\":\"is-style-wide\"} -->\r\n<hr class=\"wp-block-separator aligncenter has-alpha-channel-opacity is-style-wide\"/>\r\n<!-- /wp:separator -->\r\n\r\n<!-- wp:columns {\"verticalAlignment\":\"center\"} -->\r\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:columns {\"className\":\"saas-footer2\"} -->\r\n<div class=\"wp-block-columns saas-footer2\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:paragraph {\"align\":\"left\",\"fontSize\":\"small\"} -->\r\n<p class=\"has-text-align-left has-small-font-size\">  Terms and Conditions  *  Privacy Policy  *  Partner Agreement</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":374,\"width\":178,\"height\":26,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image aligncenter size-full is-resized\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Follow-Us.png\" alt=\"\" class=\"wp-image-374\" width=\"178\" height=\"26\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:separator {\"className\":\"is-style-wide\"} -->\r\n<hr class=\"wp-block-separator has-alpha-channel-opacity is-style-wide\"/>\r\n<!-- /wp:separator -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"small\"} -->\r\n<p class=\"has-text-align-center has-small-font-size\">Copyright 2022</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

}    

add_action( 'init', 'custom_block_pattern' );

?>
