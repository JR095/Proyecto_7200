<?php
/**
 * Template for displaying blog posts
 */
get_header(); ?>

<main id="primary" class="site-main" style="padding: 2rem;">

    <section class="blog-hero">
        <h1 class="blog-title">Posts</h1>
    </section>

    <hr class="blog-divider">

    <section class="blog-grid">
        <?php if ( have_posts() ) : ?>
            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <p class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer(); ?>
