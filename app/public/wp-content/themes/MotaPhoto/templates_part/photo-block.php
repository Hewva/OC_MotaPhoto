 <!-- Photos apparentées -->
    <?php
    $categ = array_map(function ($terms) {
        return $terms->_id;
    }, get_the_terms(get_post(), 'categorie'));
    $query = new WP_Query(
        $args = array(
            'post__not_in' => [get_the_ID()],
            'post_type' => 'photo',
            'posts_per_page' => 2,
            'orderby' => 'rand',
            'tax_query' => [
                [
                    'taxonomy' => 'categorie',
                    'terms' => $categ,
                ]
            ]
        )
    ); ?>
    
<div class = "photos-apparentees">
    <h3>Vous aimerez aussi</h3>
    <?php
    while ($query->have_posts()) : $query->the_post(); ?>
    <div class = "photos-block">
        <div class = "photo-block-container">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail'); ?>
            <div class = "icons">
                <div class = "full-screen">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon_fullscreen.png" alt="plein écran"/>
                </a>
                </div>
                <div class = "eye">
                <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon_eye.png" alt="oeil"/>
                </a>    
            </div>
            </div>
            </a>
        </div>
    </div>
<?php endwhile; ?>
