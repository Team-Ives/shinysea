<?php
/*
Template Name: Homepage
*
* This is your custom page template. You can create as many of these as you need.
* Simply name is "page-whatever.php" and in add the "Template Name" title at the
* top, the same way it is here.
*
* When you create your page, you can just select the template and viola, you have a custom page template to call your very own. Your mother would be so proud.
*
* For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<?php masterslider(2); ?>


<!-- ::::::::: about text ::::::::: -->
<div class="container-fluid text-area">
	<div class="about-text">
		<h2><?php the_title(); ?></h2>
		<section class="entry-content cf" itemprop="articleBody">
			<?php
			if (have_posts()) : while (have_posts()) : the_post();

			the_content();

		endwhile; endif;
		?>
	</section>
</div>

<div class="row">
	<?php $my_query = new WP_Query( 'posts_per_page=2' );
	while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		<div class="col-sm-6 blog-preview">
			<h2><?php the_title(); ?></h2>
			<img class="home-thumb" src="<?php the_post_thumbnail_url('large'); ?>"/>
			<?php the_excerpt(); ?>
		</div>
	<?php endwhile; ?>

	<!-- <?php
	$args = array( 'numberposts' => '2' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){ ?>
		<div class="col-sm-6 blog-preview">
			<h2><?php echo $recent["post_title"]; ?></h2>
			<p>
				<?php echo(apply_filters("the_excerpt", $recent["post_content"]));
			   var_dump($recent)
				 ?>
			</p>

		</div>

		<?php }
		wp_reset_query();
		?> -->
	</div>
</div>

<?php get_footer(); ?>
