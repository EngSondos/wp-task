<?php
get_header();

while (have_posts()) {
    the_post();
    ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <p>Published on <?php the_date(); ?></p>
        <div><?php the_content(); ?></div>
    </article>
    <?php
}

get_footer();
?>
