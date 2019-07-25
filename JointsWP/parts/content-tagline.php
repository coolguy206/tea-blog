<p class="postedby">
	Posted by: <?php the_author_posts_link(); ?>
</p>
<p class="categories">
	Categories: <?php the_category(' &#8226; ') ?>
</p>
<p class="tags">
	<?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ' &#8226; ', ''); ?>
</p>