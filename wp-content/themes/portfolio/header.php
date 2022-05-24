<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="author" content="Nathan Schyns">
    <meta name="description" content="Bienvenue sur mon portfolio !">

    <meta property="og:title" content="Atmosph'air">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/images/">
    <meta property="og:description" content="Bienvenue sur mon portfolio !">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width">

    <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <title><?= wp_title('|', false, 'right') . get_bloginfo('name') ?></title>

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>" defer></script>
</head>
<body>
<h1 class="title hidden"><?= get_bloginfo('name'); ?></h1>
