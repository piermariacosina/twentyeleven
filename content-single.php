<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<hr />
		<!--<p><strong>Initializer</strong></p>-->
		<p><?php the_field('initializer'); ?></p>
		
		<!--<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta
		<?php endif; ?>-->
		
		<?php if(get_field('parameters')): ?>
			<hr />
			<p><strong>parameters</strong></p>
			<ul>
			<?php while(the_repeater_field('parameters')): ?>
				
			   <li><strong><?php the_sub_field('argument'); ?></strong> (<?php the_sub_field('type'); ?> | <?php the_sub_field('parameter_type'); ?>) <?php if(the_sub_field('default')){ echo "- default: ".the_sub_field('default'); } ?> | <?php the_sub_field('description'); ?></li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		
		<?php if(get_field('return_values')): ?>
			<hr />
			<p><strong>return</strong></p>
			<ul>
			<?php while(the_repeater_field('return_values')): ?>
			   		<li><?php the_sub_field('return'); ?> (<?php the_sub_field('type'); ?>) | <?php the_sub_field('description'); ?></li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	
	<?php if(get_field('description')): ?>
		<hr />
		<p><strong>description</strong></p>
		<p><?php the_field('description'); ?></p>
	<?php endif; ?>
	
	
	<?php if(get_field('usage')): ?>
		<hr />
		<p><strong>usage</strong></p>
		<p><?php the_field('usage'); ?></p>
	<?php endif; ?>
	
	<?php if(get_field('examples')): ?>
		<hr />
		<p><strong>examples</strong></p>
		<p><?php the_field('examples'); ?></p>
	<?php endif; ?>
	
	<?php if(get_field('called_at')): ?>
		<hr />
		<p><strong>called at</strong></p>
		<?php while(the_repeater_field('called_at')): ?>
		  <?php $post_object_called_at = get_sub_field('link'); ?>
		   <p><a href="<?php echo get_permalink($post_object_called_at->ID); ?>"><?php echo get_the_title($post_object->ID) ?></a> <?php the_sub_field('line_number'); ?></p>
		<?php endwhile; ?>
	<?php endif; ?>
	
	<?php if(get_field('call')): ?>
	<hr />
	<p><strong>call</strong></p>
		<?php while(the_repeater_field('call')): ?>
				<?php $post_object_call = get_sub_field('link'); ?>
				 <p><a href="<?php echo get_permalink($post_object_call->ID); ?>"><?php echo get_the_title($post_object_call->ID) ?></a> <?php the_sub_field('line_number'); ?></p>
				
		<?php endwhile; ?>
	<?php endif; ?>
	
	<?php if(get_field('trac_source')): ?>
		<hr />
		<p><strong>trac source</strong></p>
		<?php while(the_repeater_field('trac_source')): ?>
		   <p><a href="<?php echo the_sub_field('link'); ?>"><?php echo the_sub_field('file'); ?></a> <?php the_sub_field('line_number'); ?></p>
		<?php endwhile; ?>
	<?php endif; ?>
	
	<?php if(check_related_categories(17)): ?>
		<hr />
		<p><strong>Since in version</strong></p>
		<?php do_action( 'show_post_related_categories', 17, 11); ?>
	<?php endif; ?>
	
	
	<?php if(check_related_categories(32)): ?>
		<hr />
		<p><strong>Use global</strong></p>
		<?php do_action( 'show_post_related_categories', 32, 11); ?>
	<?php endif; ?>
	
	<?php if(check_related_categories(21)): ?>
		<hr />
		<p><strong>Type</strong></p>
		<?php do_action( 'show_post_related_categories', 21, 11); ?>
	<?php endif; ?>
	

	
	<?php if(get_field('related')): ?>
		<hr />
		<p><strong>Related</strong></p>
		<ul>
		<?php foreach(get_field('related') as $post_object): ?>
		    <li><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID) ?></a></li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<footer class="entry-meta">
		<!--<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} else {
				$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>-->
		
		
		
		
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 68 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2><?php printf( esc_attr__( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyeleven' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #entry-author-info -->
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
