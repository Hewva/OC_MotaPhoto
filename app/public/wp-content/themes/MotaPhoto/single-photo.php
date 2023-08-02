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
<!-- En dessous des infos de droite -->
<div class ="photo-info-behind">
    <p>Cette pohoto vous intéresse ?</p>
    <button id="contact-button" class="modal-contact-link" data-photo-ref="<?php echo get_field('reference'); ?>
</div>
        <?php  get_template_part( 'content', get_post_format() );
 
        // End the loop.
        endwhile;
        ?>
 
<?php get_footer(); ?>