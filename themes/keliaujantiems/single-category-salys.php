<?php get_header() ?>
<?php the_post() ?>
<div class="country-page-block">
    <h1><?php the_title() ?></h1>
    <div class="single-page-content"><?php the_content() ?></div>
</div>
<?php get_footer() ?>