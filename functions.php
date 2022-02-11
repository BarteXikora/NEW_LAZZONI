<?php

// Include styles and scripts:
require_once('functions/add-styles.php');

// Add Google Analitics:
require_once('functions/google-analitics.php');

// Add bootstrap navwalker:
require_once('functions/wp-bootstrap-navwalker.php');

// Add theme support:
require_once('functions/add-theme-support.php');

// Change posts to PRODUCTS:
require_once('functions/posts-to-products.php');

// Add custom taxonomy of "PRODUCT GROUP":
require_once('functions/taxonomy-group.php');

// Add NEWS post type (0):
require_once('functions/post-type-news.php');

// Add FILMS post type (1):
require_once('functions/post-type-films.php');

// Add CATALOGS post type (2):
require_once('functions/post-type-catalogs.php');

// Handle products load:
require_once('functions/products-load.php');

// Handle forms - send mails:
require_once('functions/forms-handler.php');