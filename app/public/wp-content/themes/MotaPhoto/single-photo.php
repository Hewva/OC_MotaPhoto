<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
 get_header();

 // Start the loop.
 while ( have_posts() ) : the_post(); ?>
 <div class="photo-container">
     <!-- Bloc de gauche -->
     <div class="photo-info-left">     
         <h2><?php the_title(); ?></h2>
         <p>RÉFÉRENCE: <?php echo get_field('reference'); ?></p>
         <p>CATÉGORIE : <?php echo get_the_term_list(get_the_ID(), 'categ', '', ', '); ?></p>
         <p>FORMAT : <?php echo get_the_term_list(get_the_ID(), 'format', '', ', '); ?></p>
         <p>TYPE: <?php echo get_field('type'); ?></p>
         <p>ANNÉE: <?php echo get_the_date('Y'); ?></p>
         <p>Cette photo vous intéresse ?</p>
         <button id="contact-button" class="modal-contact-link open-modal-contact" data-photo-ref="<?php echo get_field('reference'); ?>">Contact</button>
     </div>
     <!-- Bloc de droite -->
     <div class="photo-info-right">
         <div class="photo-img">    
             <?php the_post_thumbnail('full'); ?>
         </div>
     </div>
 </div>
 
 <!-- Miniature et liens de navigation -->
 <div class="photo-navigation">
     <?php
     $prev_post = get_previous_post();
     $next_post = get_next_post();
     ?>
     <?php if (!empty($prev_post)) : ?>
         <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
             <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrowL.png" alt="Précédent"/>
                <?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail', array('class' => 'thumbnail')); ?>
         </a>
     <?php endif; ?>
     <?php if (!empty($next_post)) : ?>
         <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
             <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrowR.png" alt="Suivant"/>
             <?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail', array('class' => 'thumbnail')); ?>
         </a>
     <?php endif; ?>
 </div>
 
 <?php endwhile;
 
 get_footer();
 ?>