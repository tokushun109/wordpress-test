<div class="clearfix">
    <?php
    // aタグと前ページへのhref
    $link = get_previous_posts_link('&larr; 新しい記事へ');
    if ($link) {
        echo str_replace('<a', '<a class="btn btn-primary float-left"', $link);
    }
    ?>
    <?php
    // aタグと次ページへのhref
    $link = get_next_posts_link('古い記事へ &rarr;');
    if ($link) {
        echo str_replace('<a', '<a class="btn btn-primary float-right"', $link);
    }
    ?>
</div>