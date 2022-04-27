<?php get_header() ?>
<main>
    <section id="competences">
        <div class="competences__tabs">
            <div class="competences__desc">
                <h3><?= get_post(48)->post_title ?></h3>
                <?= get_post(48)->post_content ?>
            </div>
            <div class="competences__canva">
                <div id="myCanvasContainer">
                    <canvas width="600" height="600" id="myCanvas">
                        <p></p>
                    </canvas>
                </div>
                <div id="tags" style="display: none;">
                    <ul>
                        <?php foreach (get_terms('post_tag', ['hide_empty' => false]) as $currentTag) : ?>
                            <li><a href="javascript:void(0)"><?= $currentTag->name ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="realisations" class="parallax2">
        <h2>Mes réalisations</h2>
        <div class="realisations__items">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php foreach(get_the_category() as $currentCategory) : ?>
                    <?php if ($currentCategory->name === 'Réalisations') : ?>
                        <div class="realisations__item">
                            <div class="realisations__item-images">
                                <a href="<?= get_page_link() ?>"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="realisations__item-img"></a>
                            </div>
                            <div class="realisations__item-description">
                                <h3><?= the_title() ?></h3>
                                <p><?= get_the_excerpt() ?></p>
                            </div>
                            <div class="realisations__item-techno">
                                <?php foreach(get_the_tags() as $currentTag) : ?>
                                    <i class="devicon-<?= $currentTag->slug ?>-plain colored" title="<?= $currentTag->name ?>"></i>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main> 
<?php get_footer() ?>