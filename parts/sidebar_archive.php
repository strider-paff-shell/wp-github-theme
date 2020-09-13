<div class="sidebar_category_list">
    <b><?php echo translate('Archive');?></b>
    <ul>
        <?php wp_get_archives(
                [
                        'format' => 'custom',
                    'before' =>'<li>',
                    'after' => '</li>'
                ]
        );
        ?>
    </ul>
</div>