<?php get_header();?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <?php while(have_posts()): the_post();?>
                    <?php setPostViews(get_the_ID());?>
                    <?php get_template_part('parts/post_status_bar');?>
                    <?php get_template_part('parts/post_info_bar');?>

                    <div class="post_content">
                        <h1><?php the_title();?></h1>
                        <?php the_content();?>
                        <p class="mb-0">
                            <span class="d-inline-block mr-3">
                                <span class="posts_list_item_repo_lang_color" style="background-color: #3572A5"></span>
                                <span itemprop="programmingLanguage">
                                    <?php echo get_the_author_posts_link(); ?>
                                </span>
                            </span>
                        </p>
                    </div>
                <?php endwhile;?>
                <?php comments_template();?>
            </div>
            <div class="col-lg-4 col-md-4 d-lg-block d-md-block d-sm-none d-none">
                <?php get_template_part('parts/sidebar');?>
            </div>
        </div>
    </div>

<?php get_footer();?>