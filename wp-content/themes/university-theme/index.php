<?php get_header()?> 

    

    
<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri() ?>/images/ocean.jpg)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Blogs</h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>

    <div>
      <?php while(have_posts()){  
        the_post() ?> 
        <a href="<?php the_permalink() ?>"> <?= the_title()?></a>
        <?php }?>
    </div>


   <?php  get_footer();

 
