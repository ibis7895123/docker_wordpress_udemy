<?php declare(strict_types=1);
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title">', '</h1>');
            else :
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;

            if (get_post_type() === 'post') :
        ?>

        <div class="entry-meta">
            <?php
                udemy__s_posted_on();
                udemy__s_posted_by();
            ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php udemy__s_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
            the_content(
                sprintf(
                    wp_kses(
                // translators: %s: Name of current post. Only visible to screen readers
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'udemy-udemy-_s'),
                        [
                            'span' => [
                                'class' => [],
                            ],
                        ]
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                [
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'udemy-udemy-_s'),
                    'after' => '</div>',
                ]
            );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php udemy__s_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->