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
        <div class="photo-container">
<!-- Bloc 50% de largeur à gauche -->
<div class="photo-info-left">     
    <h2><?php the_title() ?></h2>      
    <p>"RÉFÉRENCE":<?php get_field('reference'); ?></p>
    <p>"CATÉGORIE":<?php echo get_the_terms(get_the_ID(), 'categorie'); ?></p>
    <p>"FORMAT":<?php echo get_the_terms(get_the_ID(), 'format'); ?></p>
    <p>"TYPE":<?php echo get_the_terms(get_the_ID(), 'type'); ?></p>
    <p>"ANNÉE":<?php echo date('Y'); ?></p>
</div>
<!-- Bloc 50% de largeur à droite -->
<div class="photo-info-right">
    <div class= "photo-img">    
    <?php the_post_thumbnail('full'); ?>
</div>
<!-- Bloc 118px en dessous à gauche (texte et bouton contact) -->
<div class ="photo-info-behind">
    <p>Cette pohoto vous intéresse ?</p>
    <button id="contact-button" class="modal-contact-link" data-photo-ref="<?php echo get_field('reference'); ?>">Contact</button>
</div>
<!-- Bloc 118px en dessous à droite (miniatures et flèches de navigation) -->
<div class= "photo-links">
    <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    ?>
    <?php if (!empty($prev_post)) : ?>
        <a href="<?php echo get_permalink($prev_post->ID); ?>"class="prev-link">
        <img src="<?php echo get_stylesheet_directory_uri() ; ?>/images/arrowL.png" alt="Précédent"/></a>
        <?php endif; ?>
        <?php if (!empty($next_post)) : ?>
        <a href="<?php echo get_permalink($next_post->ID); ?>"class="next-link">
        <img src="<?php echo get_stylesheet_directory_uri() ; ?>/images/arrowR.png" alt="Suivant"/></a>
        <?php endif; ?>
</div>
</div>

        <?php  get_template_part( 'content', get_post_format() );
 
        // End the loop.
        endwhile;
        ?>
 
<?php get_footer(); ?>