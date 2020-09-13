<div class="sidebar_category_list">
    <b><?php echo translate('Categories');?></b>
    <?php $cats = get_categories(); ?>
    <ul>
    <?php foreach ($cats as $cat):?>
        <li>
            <a href="<?php echo get_category_link( $cat->term_id )?>">
                <?php echo $cat->name;?>

                <span class="float-right"><?php echo $cat->category_count;?></span>
            </a>
        </li>
    <?php endforeach;?>
    </ul>
</div>