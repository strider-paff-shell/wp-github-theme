

<div class="container-fluid">
    <div class="row">
        <div class="col-12 post_commit_info">
            <?php echo get_the_author_posts_link();?>
            commited a post
            <span class="float-right">
                                    <?php echo substr(hash('sha1', get_the_content()), 0, 7);?>
                                    <span class="text-dark"><?php the_date()?></span>
                                </span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 post_commit_info_additional">
            <?php the_tags('Tags: ', ', ', '<br />' );?>
            Categories: <?php the_category(', ');?>
        </div>
    </div>
</div>