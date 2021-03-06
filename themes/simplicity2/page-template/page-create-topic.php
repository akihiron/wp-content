<?php

/**
 * Template Name: bbPress - Create Topic
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>

	<?php do_action( 'bbp_before_main_content' ); ?>

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="bbp-new-topic" class="bbp-new-topic">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">

				<?php the_content(); ?>

				<?php bbp_get_template_part( 'form', 'topic' ); ?>

			</div>
		</div><!-- #bbp-new-topic -->

	<?php endwhile; ?>

	<?php do_action( 'bbp_after_main_content' ); ?>

  <?php get_template_part('ad-article-footer');//本文下広告?>

  <div id="sns-group">
  <?php if (is_mobile()) {//モバイルの時は単なるアイコン
    get_template_part('sns-buttons-icon');
  } else {//PCの時はバルーン付きボタン
    get_template_part('sns-buttons');
  } ?>

  <?php get_template_part('sns-pages');?>
  </div>

</div><div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
