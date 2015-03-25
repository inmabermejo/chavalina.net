<?php
/*
 * Template Name: Archives
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php the_post(); ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		
			<div class="archive-search-form"><?php get_search_form(); ?></div>
			
			<div class="archive-lists">
				<div class="archive-list archive-list-topics">
					<h2>Por temas:</h2>
					<ul>
						 <?php wp_list_categories('sort_column=name&optioncount=1'); ?>
					</ul>
				</div>
				<div class="archive-list archive-list-date">
					<h2>Por fecha:</h2>
					<ul>
						<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
