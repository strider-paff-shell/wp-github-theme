<div class="search_bar">
    <form class="form-inline" action="/" method="get">
        <input type="text" class="form-control" name="s" id="search" value="<?php the_search_query(); ?>"
               placeholder="Search <?php bloginfo('name');?>">
        <div class="input-group-append">
            <button type="submit" class="btn bg-transparent border-0">
                <img src="<?php bloginfo('template_url');?>/res/svg/slash.svg">
            </button>
        </div>
    </form>
</div>