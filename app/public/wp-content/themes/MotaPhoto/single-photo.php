<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>   
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
        <div class="photo-content">
        <div class="photo-container">
        <div class="photo-filters">

        </div>
            <h2>
                <?php the_title() ?>
            </h2>
<div class="field">
    <p class = "photo-field">"Référence":
    <span id="photo-ref">
        <?php get_field('reference'); ?></span>
     </p>
    <p class = "photo-field">"Catégorie":
    <?php echo get_the_terms(get_the_ID(), 'categorie'); ?>
     </p>
     <p class = "photo-field">"Type":
    <?php echo get_the_terms(get_the_ID(), 'type'); ?>
     </p>
     <p class = "photo-field">"Format":
    <?php echo get_the_terms(get_the_ID(), 'format'); ?>
     </p>
     <p class = "photo-field">"Année":
    <?php echo date('Y'); ?>
     </p>
</div>
<div class="photo-catalog">
    <?php the_post_thumbnail(); ?>
</div>
        <?php  get_template_part( 'content', get_post_format() );
 
        // End the loop.
        endwhile;
        ?>
 
<?php get_footer(); ?>