<?php
add_action('init', function () {
    add_theme_support('post-thumbnails');
});

// アイキャッチ画像がなければ標準画像を取得する
function get_eyechatch_with_default()
{
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large')[0];
    else :
        $img = array(get_template_directory_uri() . '/img/post-bg.jpg')[0];
    endif;

    return  $img;
}
