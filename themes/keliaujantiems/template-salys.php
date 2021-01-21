<?php /* Template Name: salys */ ?>
<?php get_header() ?>
<?php 
    $args = [
    'post_type'         =>  'post',
    'post_status'       =>  'publish',
    'category_name'     =>  'salys',
    'posts_per_page'    =>  -1,
    'orderby'           =>  'title',
    'order'             =>  'ASC'
    ];
$arr_posts = new WP_Query( $args );
?>

<div class="countries-block">
    <div class="countries-block-hero-photo">
        <h1 class="countries-block-title"><?php the_title() ?></h1>
    </div>
    <div class="countries-list-block"> 
    <?php if ( $arr_posts->have_posts() ) :
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post(); ?>
        
            <a href="<?php the_permalink(); ?>" class="country-block">
            <?php if ( has_post_thumbnail() ) :
                the_post_thumbnail();
            endif; ?>
            <h3><?php the_title(); ?></h3>
            </a>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer() ?>