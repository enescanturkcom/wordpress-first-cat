<?php
function fonPriCat(){
    $getCat = get_the_category();
    $firstCat = $getCat[0];
    $categoryName = $firstCat->cat_name;
    $categoryLink = get_category_link( $firstCat->cat_ID );
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        echo esc_html( $categories[0]->name );
    }
}

/* Usage: Add where to use */
fonPriCat();
?>
