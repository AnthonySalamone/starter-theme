<?php

/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

use Timber\Timber;

$templates = array('templates/index.twig');

if (is_home()) {
    array_unshift($templates, 'templates/front-page.twig', 'templates/home.twig');
}

// Récupérer le contexte global sans argument
$context = Timber::context();

// Ajouter les posts au contexte
$context['posts'] = new Timber\PostQuery(); // Récupérer la requête par défaut des posts

// Rendu du modèle Twig avec le contexte
Timber::render($templates, $context);
