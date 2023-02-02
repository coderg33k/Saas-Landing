<?php

/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/

register_block_pattern_category(
    'Daniel\'s Test',
    array(
        'label'     => __( 'Daniel\'s Test', 'saas-landing' )
    )
);

function custom_block_pattern() {

    register_block_pattern(
        'saas-landing/custom-block-name-1',
        array(
            'title'       => __( 'Test 1', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\"} -->\r\n<h2 class=\"has-text-align-center\"><strong>Data, at your service</strong></h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading -->\r\n<h2>Multiple sources, one truth</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>All your data sources together to provide you with a single source of insight.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image {\"id\":8,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-62.png\" alt=\"\" class=\"wp-image-8\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":9,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Frame-3668.png\" alt=\"\" class=\"wp-image-9\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading -->\r\n<h2>The is basics are always free</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Data visualizations that work for every store and size. Unlock Store Overview and Email Reports at no extra cost.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading -->\r\n<h2>Modular customization</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Data views built for every store and size. Identify waves of opportunities and reach new levels of growth.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image {\"id\":10,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3672.png\" alt=\"\" class=\"wp-image-10\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-name-2',
        array(
            'title'       => __( 'Test 2', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"style\":{\"border\":{\"radius\":\"14px\",\"width\":\"1px\"},\"color\":{\"background\":\"#f5f1ea\"}},\"borderColor\":\"contrast\",\"className\":\"custom-card card-1\"} -->\r\n<div class=\"wp-block-columns custom-card card-1 has-border-color has-contrast-border-color has-background\" style=\"border-width:1px;border-radius:14px;background-color:#f5f1ea\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"15%\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:15%\"><!-- wp:image {\"id\":15,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Icon.png\" alt=\"\" class=\"wp-image-15\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"40%\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"0px\",\"right\":\"0px\",\"bottom\":\"0px\",\"left\":\"0px\"}}}} -->\r\n<div class=\"wp-block-column\" style=\"padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:40%\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"24px\"}}} -->\r\n<h2 style=\"font-size:24px\">Overview</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"},\"spacing\":{\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}}} -->\r\n<p style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px\">The most important data for your store, all in one view</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"base\",\"style\":{\"border\":{\"radius\":\"6px\"}},\"className\":\"is-style-outline\"} -->\r\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-base-background-color has-background wp-element-button\" style=\"border-radius:6px\">Add View</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-name-3',
        array(
            'title'       => __( 'Test 3', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );
}    

add_action( 'init', 'custom_block_pattern' );