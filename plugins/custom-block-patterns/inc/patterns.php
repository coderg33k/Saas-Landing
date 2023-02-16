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
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card01',
        array(
            'title'       => __( 'Card 2', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card03',
        array(
            'title'       => __( 'Card 3', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card04',
        array(
            'title'       => __( 'Card 4', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"style\":{\"border\":{\"radius\":\"14px\",\"width\":\"1px\"},\"color\":{\"background\":\"#f5f1ea\"}},\"borderColor\":\"contrast\",\"className\":\"saas-custom-card\"} -->\r\n<div class=\"wp-block-columns saas-custom-card has-border-color has-contrast-border-color has-background\" style=\"border-width:1px;border-radius:14px;background-color:#f5f1ea\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns {\"className\":\"saas-cards-container\"} -->\r\n<div class=\"wp-block-columns saas-cards-container\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"15%\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:15%\"><!-- wp:gallery {\"linkTo\":\"none\",\"sizeSlug\":\"full\"} -->\r\n<figure class=\"wp-block-gallery has-nested-images columns-default is-cropped\"><!-- wp:image {\"id\":60,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Group-3700.png\" alt=\"\" class=\"wp-image-60\"/></figure>\r\n<!-- /wp:image --></figure>\r\n<!-- /wp:gallery --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"40%\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"0px\",\"right\":\"0px\",\"bottom\":\"0px\",\"left\":\"0px\"}}}} -->\r\n<div class=\"wp-block-column\" style=\"padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:40%\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"24px\"}}} -->\r\n<h2 style=\"font-size:24px\">Reports</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"},\"spacing\":{\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}},\"className\":\"saas-custom-card-paragraph\"} -->\r\n<p class=\"saas-custom-card-paragraph\" style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px\">Your data, delivered right to your inbox.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:buttons {\"className\":\"saas-custom-card-button\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons saas-custom-card-button\"><!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"border\":{\"radius\":\"6px\"}},\"className\":\"is-style-outline\"} -->\r\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-white-background-color has-background wp-element-button\" style=\"border-radius:6px\">Add View</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card05',
        array(
            'title'       => __( 'Card 5', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "<!-- wp:columns {\"style\":{\"border\":{\"radius\":\"14px\",\"width\":\"1px\"},\"color\":{\"background\":\"#f5f1ea\"}},\"borderColor\":\"contrast\",\"className\":\"saas-card05-container\"} -->\r\n<div class=\"wp-block-columns saas-card05-container has-border-color has-contrast-border-color has-background\" style=\"border-width:1px;border-radius:14px;background-color:#f5f1ea\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns {\"className\":\"saas-cards-container\"} -->\r\n<div class=\"wp-block-columns saas-cards-container\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"15%\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:15%\"><!-- wp:image {\"id\":15,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://saaslanding.local/wp-content/uploads/2023/02/Icon.png\" alt=\"\" class=\"wp-image-15\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"width\":\"40%\",\"style\":{\"spacing\":{\"padding\":{\"top\":\"0px\",\"right\":\"0px\",\"bottom\":\"0px\",\"left\":\"0px\"}}}} -->\r\n<div class=\"wp-block-column\" style=\"padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:40%\"><!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"24px\"}}} -->\r\n<h2 style=\"font-size:24px\">Overview</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"},\"spacing\":{\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}},\"className\":\"saas-custom-card-paragraph\"} -->\r\n<p class=\"saas-custom-card-paragraph\" style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px\">The most important data for your store, all in one view</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:buttons {\"className\":\"saas-custom-card-button\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\r\n<div class=\"wp-block-buttons saas-custom-card-button\"><!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"border\":{\"radius\":\"6px\"}},\"className\":\"is-style-outline\"} -->\r\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-white-background-color has-background wp-element-button\" style=\"border-radius:6px\">Add View</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
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

    register_block_pattern(
        'saas-landing/custom-block-card07',
        array(
            'title'       => __( 'Card 7', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card08',
        array(
            'title'       => __( 'Card 8', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card09',
        array(
            'title'       => __( 'Card 9', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card10',
        array(
            'title'       => __( 'Card 10', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card11',
        array(
            'title'       => __( 'Card 11', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card12',
        array(
            'title'       => __( 'Card 12', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card13',
        array(
            'title'       => __( 'Card 13', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card14',
        array(
            'title'       => __( 'Card 14', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card15',
        array(
            'title'       => __( 'Card 15', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card16',
        array(
            'title'       => __( 'Card 16', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card17',
        array(
            'title'       => __( 'Card 17', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card18',
        array(
            'title'       => __( 'Card 18', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card19',
        array(
            'title'       => __( 'Card 19', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card20',
        array(
            'title'       => __( 'Card 20', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card21',
        array(
            'title'       => __( 'Card 21', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

    register_block_pattern(
        'saas-landing/custom-block-card22',
        array(
            'title'       => __( 'Card 22', 'saas-landing' ),
           
            'description' => _x( 'Description here', 'saas-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Daniel\'s Test' ),
        )
    );

}    

add_action( 'init', 'custom_block_pattern' );

?>
