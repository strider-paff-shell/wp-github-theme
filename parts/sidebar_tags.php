<div class="sidebar_category_list">
    <b><?php echo translate('Tags');?></b>
    <?php $tags = get_tags(); ?>
    <ul>
    <?php foreach ($tags as $tag):?>
        <li>
            <a href="<?php echo get_tag_link( $tag->term_id )?>">
                <?php echo $tag->name;?>
                <span class="float-right"><?php echo $tag->count;?></span>
            </a>
        </li>
    <?php endforeach;?>
    </ul>
</div>