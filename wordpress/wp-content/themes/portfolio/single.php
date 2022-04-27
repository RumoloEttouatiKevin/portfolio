<?php get_header('not-home') ?>
<div class="parallax2 post__item">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php foreach(get_the_category() as $currentCategory) : ?>
            <?php if ($currentCategory->name === 'Réalisations') : ?>
                <div class="realisation">
                    <h3><?= the_title() ?></h3>
                    <?= the_content() ?>
                    <h2>Techno :</h2>
                    <div class="realisation__technos">
                        <?php foreach(get_the_tags() as $currentTag) : ?>
                            <div class="realisation__techno">
                                <i class="devicon-<?= $currentTag->slug ?>-plain"></i>
                                <span><?= $currentTag->name ?></span>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    <?php endwhile; endif; ?>
</div>
<?php get_footer() ?>