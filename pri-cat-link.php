<?php
/**
 * Primary Category Link
 */

function fonPriCatLink(){
    $getCat = get_the_category();
    $firstCat = $getCat[0];
    $categoryLink = get_category_link( $firstCat->cat_ID );
    return $categoryLink;
}

/* Usage: Add where to use */
fonPriCatLink();
