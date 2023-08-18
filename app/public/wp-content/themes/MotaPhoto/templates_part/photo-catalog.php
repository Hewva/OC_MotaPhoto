<?php 
/*
 * The template for the photos catalog
 */
?>

<div class="catalog">
<div class = "photos-apparentees">
    <div class = "photo-apparentees-container">

    <div class = "photos-block">
    <div class = "photos-block-container">
            <a href="<?php the_permalink(); ?>">
            <div class = "photos-block-thumbnail">
            <?php the_post_thumbnail('full', array('class' => 'thumbnail-block', 'style' => 'width: 564px; height: 495px;')); ?>
            </div>
            <div class = "photos-overlay">
                <div class="overlay-icons">
                <div class = "eye-icon">
                <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon_eye.png" alt="oeil"/>
                </a>    
            </div>
                <div class = "full-screen-icon">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon_fullscreen.png" alt="plein écran"/>
                </a>
                </div>
            </div>
            <div class="overlay-infos">
                <div class="overlay-categ"><?php echo get_the_term_list(get_the_ID(), 'categ', '', ', '); ?></div>
                <div class="overlay-ref"><?php echo get_field('reference'); ?></div>
            </div>
            </div>
        </div>
        </div>

</div>
</div>
</div>

