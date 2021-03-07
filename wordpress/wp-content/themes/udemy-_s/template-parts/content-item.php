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

    <?php $price = get_post_meta(get_the_ID(), '価格', true); ?>
    <?php $publisher = get_post_meta(get_the_ID(), '出版社', true); ?>
    <?php $writers = get_post_meta(get_the_ID(), '著者', false); ?>
    <dl>
        <?php if ($price): ?>
        <dt>価格</dt>
        <dd>
            <?php echo esc_html(number_format((float) $price)); ?>円
        </dd>
        <?php endif; ?>

        <?php if ($publisher): ?>
        <dt>出版社</dt>
        <dd>
            <?php echo esc_html($publisher); ?>
        </dd>
        <?php endif; ?>

        <?php if ($writers): ?>
        <dt>著者</dt>
        <?php foreach ($writers as $writer): ?>
        <dd>
            <?php echo esc_html($writer); ?>
        </dd>
        <?php endforeach; ?>
        <?php endif; ?>
    </dl>

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
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->