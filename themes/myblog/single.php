<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('includes/header'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- Page Header -->
            <header class="masthead" style="background-image: url('<?php echo get_eyechatch_with_default(); ?>')">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="post-heading">
                                <h1><?php the_title(); ?></h1>
                                <span class="meta">Posted by
                                    <?php the_author(); ?>
                                    <?php the_time(get_option('date_format')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Post Content -->
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>

            <hr>
        <?php endwhile ?>
    <?php endif; ?>
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>