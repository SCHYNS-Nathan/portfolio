<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nathan Schyns">
    <meta name="description" content="Bienvenue sur mon portfolio !">
    <meta property="og:title" content="Portfolio">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/images/">
    <meta property="og:description" content="Bienvenue sur mon portfolio !">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width">
    <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <title><?= wp_title('|', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/main.js" defer></script>
</head>
<body aria-labelledby="pageTitle">
<h1 class="title hidden" id="pageTitle" aria-level="1"><?= get_bloginfo('name'); ?></h1>
