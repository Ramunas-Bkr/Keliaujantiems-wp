<?php /* Template Name: naujienos */ ?>
<?php get_header(); 
    
    $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'naujienos',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
?>
<div class="news-block"> 
    <h1 class="news-block-title"><?php the_title() ?></h1>
        <?php
        if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('medium');
            endif;
            ?>
            <div class="entry-content">
                
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php
    endwhile;
endif;
    ?>
</div>
<?php get_footer() ?>