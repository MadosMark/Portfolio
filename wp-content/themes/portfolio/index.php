<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

    <?php endwhile; ?>

    <div class="row">

        <div class="col">
            <p> one column</p>
        </div>

        <div class="col">
            <p> two column</p>
        </div>

        <div class="col">
            <p> three column</p>
        </div>



    <?php endif; ?>
    </div>


    <?php get_footer(); ?>