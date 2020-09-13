<?php get_header();?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <?php while(have_posts()): the_post();?>
                    <div class="page_title">
                        <h1 class="h3">
                            <i class="fas fa-book-open"></i> <?php the_title();?>
                        </h1>
                    </div>
                    <div class="page_content">
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
            </div>
        </div>
    </div>

<?php get_footer();?>