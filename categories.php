<?php get_header();?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <?php while(have_posts()): the_post();?>
                            <div class="posts_list_item">
                                <a class="posts_list_item_title" href="<?php the_permalink()?>"><?php the_title();?></a>
                                <?php the_excerpt();?>

                                <p class="mb-0">
                                    <span class="d-inline-block mr-3">
                                        <span class="posts_list_item_repo_lang_color" style="background-color: #3572A5"></span>
                                        <span itemprop="programmingLanguage"><?php the_author();?></span>
                                    </span>
                                </p>


                            </div>
                        <?php endwhile;?>
                    </div>
                    <div class="col-lg-4 col-md-4 d-sm-none d-none">

                    </div>
                </div>
            </div>

<?php get_footer();?>