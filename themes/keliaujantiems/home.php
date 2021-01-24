<?php get_header() ?>
    <div class="main-page-block">
    <div class="main-page-hero">
        <h1 class="main-page-hero-title">
            Pagalba planuojantiems keliones!
        </h1>
    </div>
    <div class="main-page-news-block">
        <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'naujienos',
            'posts_per_page' => 3,
        );
        $arr_posts = new WP_Query( $args );
        ?>
        <a href="<?php echo esc_url( home_url( '/naujienos/' ) ); ?>" class="main-page-news-block-title">Naujienos iš kelių</a>
        <?php if ( $arr_posts->have_posts() ) :
            while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post(); ?>
                <div class="main-page-news-wrapper">
                <a href="<?php the_permalink(); ?>" class="main-page-news-post-title"><?php the_title() ?></a>
                <?php if ( has_post_thumbnail() ) : the_post_thumbnail('large');
                endif; ?>
                <span class="news-post-date"><?php echo get_the_date('F j, Y'); ?> </span>
                <?php the_excerpt(); ?>
                <a class="main-page-news-block-read" href="<?php the_permalink(); ?>">Skaityti toliau</a>
        </div>
        <?php endwhile;
        endif; ?>
    </div>
    <div class="main-page-links-block">
        <a href="<?php echo esc_url( home_url( '/salys/' ) ); ?>" class="links-block-1">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/map1.jpg'; ?>" alt="map">
            <h2>Šalys</h2>
            <p>Informacija apie konkrečias Europos šalis: kelių mokesčiai, eismo taisyklių ypatybės</p>
        </a>
        <a href="<?php echo esc_url( home_url( '/patarimai-ir-marsrutai/' ) ); ?>"class="links-block-2">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/camping.jpg'; ?>" alt="camp">
            <h2>Patarimai ir maršrutai</h2>
            <p>Patarimai įvairiais kelionių klausimais ir konkrečių kelionių maršrutų aprašymai</p>
        </a>
        <a href="<?php echo esc_url( home_url( '/kuro-kainos/' ) ); ?>" class="links-block-3">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/petrol.jpg'; ?>" alt="petrol">
            <h2>Kuro kainos</h2>
            <p>Vidutinės kuro kainos iš visų Europos šalių. Informacija atnaujinama bent kartą per mėnesį</p>
        </a>
    </div>
    
    </div>
<?php get_footer() ?>