<?php get_header(); ?>

	<div class="content wrap cf">

		<main class="main m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
					/*
					 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
					 *
					 * So this function will bring in the needed template file depending on what the post
					 * format is. The different post formats are located in the post-formats folder.
					 *
					 *
					 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
					 * A SPECIFIC POST FORMAT.
					 *
					 * If you want to remove post formats, just delete the post-formats folder and
					 * replace the function below with the contents of the "format.php" file.
					*/
					get_template_part( 'post-formats/format', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php else: ?>

				<article id="post-not-found" class="cf">
					<header class="article-header">
						<h1><?php _e('Oops, Post Not Found!', 'theme_slug'); ?></h1>
					</header>

					<section class="entry-content">
						<p><?php _e('Uh Oh. Something is missing. Try double checking things.', 'theme_slug'); ?></p>
					</section>

					<footer class="article-footer">
						<p><?php _e('This is the error message in the index.php template.', 'theme_slug'); ?></p>
					</footer>
				</article>

			<?php endif; ?>

		</main>

		<aside class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

			<?php get_sidebar(); ?>

		</aside>

	</div>

<?php get_footer(); ?>
