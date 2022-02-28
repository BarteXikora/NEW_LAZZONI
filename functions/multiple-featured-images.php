<?php

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
    $args = array(
      'id' => 'featured-image-2',
      'desc' => 'Ten obrazek będzie się wyświetlał jako miniatura produktu w grupie "Dostepne w magazynie".',
      'label_name' => 'Zdjęcie z hali',
      'label_set' => 'Ustaw zdjęcie z hali',
      'label_remove' => 'Usuń zdjęcie z hali',
      'label_use' => 'Ustaw zdjęcie z hali',
      'post_type' => array( 'post' ),
    );
  
    $featured_images[] = $args;
  
    return $featured_images;
});