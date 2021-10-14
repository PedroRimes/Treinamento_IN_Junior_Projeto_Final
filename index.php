<?php get_header(); ?>
    <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <main><?php the_content(); ?></main>

    <?php endwhile; else: ?>
    <p>desculpe, o post não segue os critérios escolhidos</p>
    <?php endif; ?>
    </main>
<?php get_footer(); ?>