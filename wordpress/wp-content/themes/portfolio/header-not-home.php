<!DOCTYPE html>
<html <?= language_attributes() ?>>
    <head>
        <meta charset="<?= bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head() ?>
    </head>
    <body>
        <div class="container">
            <header>
                <a class="logo" href="<?= home_url() ?>">
                    <img class="logo__img" src="<?= get_template_directory_uri() ?>/assets/image/logo.png" alt="">
                    <p class="logo__text">
                        <?php $userFirst = get_user_meta(1) ?>
                        <span class="logo__title"><?= $userFirst['first_name'][0] . ' ' . $userFirst['last_name'][0] ?></span><br>
                        <span class="logo__subtitle"><?= $userFirst['description'][0] ?></span>
                    </p>
                </a>
            </header>