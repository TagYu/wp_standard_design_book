<?php
/**
 * Template name: サイドバーなし1カラム
 */
?>
<?php get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-one-column">

			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div id="primary" class="content-area posts">

						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) :
							the_post();?>
						<article <?php post_class(); ?>>

							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header>
							<!--/.entry-header-->

							<div class="entry-content">
								<?php the_content(); ?>
							</div>
							<!--/.entry-header-->

						</article>
						<?php endwhile; ?>
						<?php endif; ?>

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

			</div>

		</div>
		<!--▲メインコンテンツ : 終了-->

<?php get_footer(); ?>
