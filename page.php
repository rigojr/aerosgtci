<?php get_header(); ?>

<?php get_template_part( 'breadcrumb-normal' ); ?>

<div class="wrap-page-content">
	<?php if ( have_posts() ) : the_post(); ?>
  		<?php the_content(); ?>
	<?php endif; ?>
</div>

<?php get_template_part( 'call-contact' ); ?>

<?php get_footer(); ?>