<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('includes/header'); ?>
	<!-- Page Header -->
	<header class="masthead" style="background-image: url('<?php echo get_eyechatch_with_default(); ?>')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1><?php bloginfo('name'); ?></h1>
						<span class="subheading"><?php bloginfo('description'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<?php while (have_posts()) : the_post(); ?>
					<div class="post-preview">
						<a href="<?php the_permalink() ?>">
							<h2 class="post-title">
								<?php the_title() ?>
							</h2>
							<h3 class="post-subtitle">
								<?php the_excerpt(); ?>
							</h3>
						</a>
						<p class="post-meta">Posted by
							<?php the_author(); ?>
							on <?php the_time(get_option('date_format')); ?>
						</p>
					</div>
					<hr>
				<?php endwhile; ?>
				<!-- Pager -->
				<?php get_template_part('includes/pager'); ?>
			</div>
		</div>
	</div>
	<hr>
	<?php get_template_part('includes/footer'); ?>
	<?php get_footer(); ?>
</body>

</html>