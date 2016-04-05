<?php
/**
 * The template used for displaying page content
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<img class="col-xs-12" style="padding: 0 0 20px 0" src = "<?php echo $url; ?>" />

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
		<?php //the_content(); ?>

		<a href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>"><?php _e( 'mais' ); ?></a>
		
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php //edit_post_link( __( 'Edit' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
