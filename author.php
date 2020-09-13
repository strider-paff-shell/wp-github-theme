<?php get_header();?>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 author_info text-lg-left text-md-left text-sm-center text-center">
                        <div class="avatar_img">
                            <img  src="<?php echo getAuthorAvatar(get_the_author_meta('email'), 256);?>">
                        </div>

                        <h2><?php the_author();?></h2>
                        <h3><?php the_author_nickname();?></h3>
                        <p>
                            <i class="fas fa-link"></i>
                            <a href="<?php the_author_meta('user_url');?>"><?php the_author_meta('user_url');?></a>
                        </p>
                        <p><b><i class="fas fa-address-card"></i> About:</b><br><?php the_author_meta('description');?></p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="container-fluid">
                            <div class="row">
                                <?php while(have_posts()): the_post();?>
                                    <div class="col-lg-6 col-md-12 col-12 mb-4">
                                        <div class="posts_list_item">
                                            <a class="posts_list_item_title" href="<?php the_permalink()?>"><?php the_title();?></a>
                                            <?php the_excerpt();?>

                                            <p class="mb-0">
                                                <span class="d-inline-block mr-3">
                                                    <span class="posts_list_item_repo_lang_color" style="background-color: #3572A5"></span>
                                                    <span itemprop="programmingLanguage"><?php the_author();?></span>
                                                </span>

                                                <span class="d-inline-block mr-3">
                                                    <span><i class="fas fa-eye"></i> Watch</span>
                                                    <b><?php echo getPostViews(get_the_ID());?></b>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                <?php endwhile;?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<?php get_footer();?>