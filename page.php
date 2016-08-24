<?php get_header(); ?>

<div id="page-content">
	<div class="wrapper">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<header class="article-header">

				<h1><?php the_title(); ?></h1>

				<p class="byline vcard">

					<?php printf( __( 'Posted', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__( 'by',  'bonestheme').' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
				</p>

			</header> <?php // end article header ?>

			<section class="entry-content cf" itemprop="articleBody">
				<?php
				// the content (pretty self explanatory huh)
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					) );
					?>
				</section> <?php // end article section ?>


			<?php endwhile; endif; ?>
			<?php get_sidebar(); ?>

		</div>

	</div>

	<?php get_footer(); ?>
