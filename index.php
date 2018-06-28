<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage DAWAT JLMEDIA RESTAURANT
 * @since Twenty Fifteen 1.0
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'partials/banner-index'); ?>
</header>

<!-- CONTENT -->
<section class="blog-page blog-area section-padding">
	<div class="content">
		<?php while (have_posts()): the_post();  ?>
			<?php echo the_title(); ?>
		<?php endwhile; ?>
	</div>
</section>
<!-- / CONTENT -->
<?php get_footer(); ?>