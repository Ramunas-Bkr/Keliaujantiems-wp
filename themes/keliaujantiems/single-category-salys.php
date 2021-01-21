<?php get_header() ?>
<?php the_post() ?>
<div class="country-page-block">
    <div class="country-page-hero">
        <?php if (class_exists('MultiPostThumbnails')) : 
            MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
        endif; ?>
        <h1><?php the_title() ?></h1>
    </div>
    <div class="single-page-content"><?php the_content() ?></div>
</div>
<?php get_footer() ?>