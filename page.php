<?php get_header(); ?>
		
		<!-- Content -->
		<div id="content">
		
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<!-- Post -->
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-title">
					<div class="post-date">
						<span><?php the_time('d') ?></span>
						<?php the_time('F') ?>
					</div>
					<h2><?php the_title(); ?></h2>
					Author: <?php the_author() ?> 
				</div>
				<div class="post-entry">
					<?php the_content('Read <span>more...</span>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
				<div class="post-info"></div>
			</div>
			<!-- /Post -->
			<?php endwhile; ?>
			<?php else : ?>
			<!-- Post -->
			<div class="post">
				<div class="post-title">
					<h2 class="not-found-title">Not Found</h2>
				</div>
				<div class="post-entry not-found-entry">
					<p>Sorry, but you are looking for something that isn't here.</p>
				</div>
				<div class="post-info"></div>
			</div>
			<!-- /Post -->
			<?php endif; ?>
		
		</div>
		<!-- /Content -->
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>