<div class="comment_input_form">
    <?php if( comments_open() ) {
        comment_form(
            [
                'cancel_reply_link' => true,
                'label_submit' => translate('Publish')
            ]
        );
    } ?>
</div>

