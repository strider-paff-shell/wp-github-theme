<div class="row">
    <div class="col-12">
        <div class="pagination_bar">
            <?php the_posts_pagination(
                [
                    'mid_size' => 5,
                    'prev_text' => translate('Previous'),
                    'next_text' => translate('Next'),
                ]
            ); ?>
        </div>
    </div>
</div>