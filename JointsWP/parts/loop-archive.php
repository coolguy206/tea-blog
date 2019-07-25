<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
		<header class="article-header">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
			
			<!-- Disabling Featured Images -->
			<!-- <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a> -->

			<?php the_content('<button class="tiny">Continue reading →</button>'); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
			<?php get_template_part( 'parts/content', 'tagline' ); ?>
		</footer> <!-- end article footer -->				    						
	</article> <!-- end article -->

<?php endwhile; ?>	
					
<?php joints_page_navi(); ?>

<?php else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>