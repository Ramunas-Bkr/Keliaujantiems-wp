<?php /* Template Name: naujienos */ ?>
<?php get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
  
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'naujienos',
    'posts_per_page' => 3,
    'paged' => $paged,
);

$arr_posts = new WP_Query( $args );
?>

<div class="news-block"> 
    <div class=news-block-hero-photo>
        <h1 class="news-block-title"><?php the_title() ?></h1>
    </div>
    <?php if ( $arr_posts->have_posts() ) :
        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
    ?>
    <div class="news-post-block">
        <a href="<?php the_permalink(); ?>" class="news-post-title"><?php the_title(); ?></a>
        <div class="news-post-content">
            <?php if ( has_post_thumbnail() ) :
                the_post_thumbnail('medium');
            endif; ?>
            <div class="news-post-text-block">
                <span class="news-post-date"><?php echo get_the_date('F j, Y'); ?> </span>
                <?php the_excerpt(); ?>
                <a class="news-post-read" href="<?php the_permalink(); ?>">Skaityti toliau</a>
            </div>
        </div>
    </div>
    <?php endwhile;
endif; ?>
<div class="news-page-pagination"> 
    <?php 
    $big = 999999999;
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $arr_posts->max_num_pages
    ) ); ?>
</div>
</div> 

<?php get_footer() ?>