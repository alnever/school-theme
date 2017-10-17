<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Expound
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title entry-primary-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if (get_the_content(null, null) !== "") {
						the_content();
					}
					else {
						$children = wp_list_pages( array(
								 'title_li' => '',
								 'child_of' => $post->ID,
								 'echo'     => 0
						 ) );

						 if ( $children ) { ?>
							 <div class="sub-pages-list">
						     <ul>
						         <?php echo $children; ?>
						     </ul>
							 </div>
					  <?php
					 }
					}
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'expound' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
