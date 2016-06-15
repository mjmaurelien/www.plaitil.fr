<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page-full-width" role="main" class="projets_page">
<div class="row">
	<div class="small-12 large-6 text-center columns cara">
		<p>
			<?php echo the_category('|'); ?>
		</p>
		<p><?php echo get_field('date'); ?></p>
		<img src="<?php echo get_field('image_projet'); ?>" alt="" />
		<img src="<?php echo get_field('image_projet_2'); ?>" alt="" />
		<img src="<?php echo get_field('image_projet_3'); ?>" alt="" />
	</div>
	<div class="small-12 large-6 text-center columns cara">
		<p>
			<?php echo the_category('|'); ?>
		</p>
		<p><?php echo get_field('date'); ?></p>
		<img src="<?php echo get_field('image_projet'); ?>" alt="" />
		<img src="<?php echo get_field('image_projet_2'); ?>" alt="" />
		<img src="<?php echo get_field('image_projet_3'); ?>" alt="" />
	</div>

</div>
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">

		<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		?>

		<?php the_content(); ?>
		<?php foundationpress_entry_meta(); ?>
		</div>
		<div class="row">
			  <a href="#" class="button small-12 large-12 text-center columns">Visiter le site</a>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<?php get_footer();
