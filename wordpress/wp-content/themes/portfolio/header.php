<!DOCTYPE html>
<html <?= language_attributes() ?>>
    <head>
        <meta charset="<?= bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head() ?>
    </head>
    <body>
        <div class="container">
            <div id="accueil" class="parallax">
                <header>
                    <a class="logo" href="<?= home_url() ?>">
                        <img class="logo__img" src="<?= get_template_directory_uri() ?>/assets/image/logo.png" alt="">
                        <p class="logo__text">
                            <?php $userFirst = get_user_meta(1) ?>
                            <span class="logo__title"><?= $userFirst['first_name'][0] . ' ' . $userFirst['last_name'][0] ?></span><br>
                            <span class="logo__subtitle"><?= $userFirst['description'][0] ?></span>
                        </p>
                    </a>
                    <nav>
                        <?php
                            $menuHtml = wp_nav_menu([
                                'theme_location' => 'header',
                                'echo' => false,
                                'menu_class' => 'menu',
                            ]);

                            $menuHtml = str_replace('menu-item ', 'menu__item ', $menuHtml);
                            $menuHtml = str_replace('a href', 'a class="menu__item-link" href', $menuHtml);

                            echo $menuHtml;
                        ?>
                    </nav>
                </header>
                <div class="presentation">
                    <p class="presentation__text">
                        <?php $userFirst = get_user_meta(1) ?>
                        <span class="presentation__name"><?= $userFirst['first_name'][0] . ' ' . $userFirst['last_name'][0] ?></span><br>
                        <span class="presentation__description"><?= $userFirst['description'][0] ?></span><br>
                        <span class="presentation__subdescription"><?= get_post(7)->post_title ?></span>
                    </p>
                    <?= str_replace('<p>', '<p class="presentation__info">', get_post(7)->post_content) ?>
                </div>
            </div>