<ol class="comment-list">
    <?php
    if ( post_password_required())
    {
        return;
    }

    ?>
    <?php if (have_comments()) : ?>
        <div class="post-comments">
            <?php if(have_comments()):?>
                <?php $comments = get_comments([ 'post_id' => get_the_ID()]);?>
                <?php foreach ($comments as $comment):?>
                    <?php
                        $grav_url = getAuthorAvatar( $comment->comment_author_email, 64);
                    ?>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-2 col-2">
                            <img class="mt-3 comment_list_item_avatar rounded-circle" src="<?php echo $grav_url;?>">
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-10 col-10">
                            <div class="comment_list_item">
                                <div class="comment_list_item_speech_bubble">
                                    <div class="comment_list_item_speech_bubble_inner">
                                        <b><?php echo $comment->comment_author;?></b>
                                        <span>
                                    commented on
                                    <?php echo comment_date_format($comment->comment_ID)?>
                                </span>
                                    </div>
                                </div>
                                <div class="comment_list_item_content">
                                    <?php echo $comment->comment_content;?>
                                    <?php if(!empty($comment->comment_author_url)):?>
                                        <hr>
                                        Website: <a class="text-break" href="<?php echo $comment->comment_author_url;?>"><?php echo $comment->comment_author_url;?></a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php endforeach;?>
            <?php endif;?>
        </div>
    <?php
    endif;
    ?>
</ol><!-- .comment-list -->