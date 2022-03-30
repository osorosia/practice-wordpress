<article <?php post_class("single")?> >

    <header class="single-header">
        <?php the_title( '<h1 class="single-title">', '</h1>' ); ?>
    </header>

    <div class="single-content">
        <?php the_content(); ?>
    </div>

    <footer class="single-footer">

        <div class="single-categories">
            <p>カテゴリ：<?php the_category(' '); ?></p>
        </div>

        <div class="single-tags">
            <p>タグ：<?php the_tags('', ' ', ''); ?></p>
        </div>
    </footer>

</article>
