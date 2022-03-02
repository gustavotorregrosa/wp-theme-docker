<?php get_header(); ?>
	<article class="content px-3 py-5 p-md-5">
		<?php if (have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>

				<?php the_content() ?>

			<?php endwhile; ?>
		<?php endif ?>
	</article>
<?php get_footer(); ?>
