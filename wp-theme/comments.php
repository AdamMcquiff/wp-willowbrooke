<?php
/*
The comments page for Bones
*/

if (post_password_required())
  return;

?>

    <?php if (have_comments()) : ?>

        <h2 id="comments-title">
            <?php
            comments_number(
                 __('<span>No</span> Comments', 'theme_slug'),
                 __('<span>One</span> Comment', 'theme_slug'),
                 __('<span>%</span> Comments', 'theme_slug')
             );
             ?>
         </h2>

        <section class="commentlist">
            <?php
	            wp_list_comments(array(
					'style'             => 'div',
					'short_ping'        => true,
					'avatar_size'       => 40,
					'callback'          => 'comments',
					'type'              => 'all',
					'reply_text'        => __('Reply', 'theme_slug'),
					'page'              => '',
					'per_page'          => '',
					'reverse_top_level' => null,
					'reverse_children'  => ''
	            ));
            ?>
        </section>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>
        	<nav class="navigation comment-navigation" role="navigation">
              	<div class="comment-nav-prev">
                    <?php previous_comments_link(__('&larr; Previous Comments', 'theme_slug')); ?>
                </div>
              	<div class="comment-nav-next">
                    <?php next_comments_link(__('More Comments &rarr;', 'theme_slug')); ?>
                </div>
        	</nav>
        <?php endif; ?>

        <?php if (!comments_open()): ?>
        	<p class="no-comments"><?php _e('Comments are closed.' , 'theme_slug'); ?></p>
        <?php endif; ?>

  <?php endif; ?>

  <?php comment_form(); ?>
