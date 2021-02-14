<?php
add_action(
    'init',
    function () {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        // メニュー機能をサポート
        register_nav_menus(
            [
                'global_nav' => 'グローバルナビゲーション',
            ]
        );
    }
);

// 背景画像のURLを取得
// アイキャッチ画像がなければ標準画像を取得
function get_eyecatch_image_url_with_default(): string
{
    if (has_post_thumbnail()) {
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
        $url = $img[0];
    } else {
        $url = get_template_directory_uri() . '/img/post-bg.jpg';
    }

    return $url;
}
