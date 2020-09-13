<!DocType html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title($sep='/');?></title>
    <?php wp_head();?>
</head>
<body>
<header>
    <nav class="nav navbar">
        <div class="container-fluid d-lg-block d-md-none d-sm-none d-none">
            <div class="row">
                <div class="col-12 d-lg-block d-md-none d-sm-none d-none">
                    <?php wp_nav_menu([
                        'menu_class' => 'nav_menu',
                        'theme_location'=> 'primary_nav'
                    ]);?>

                    <div class="search_bar" id="js_navbar_search">
                        <form class="form-inline" action="/" method="get">
                            <input type="text" class="form-control nav-searchbar-trigger" name="s" id="search" value="<?php the_search_query(); ?>"
                                   placeholder="Search <?php bloginfo('name');?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn bg-transparent border-0">
                                    <img src="<?php bloginfo('template_url');?>/res/svg/slash.svg">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-lg-none d-md-block d-sm-block d-block col-12">
            <div class="row">
                <div class=" col-12 text-right">
                    <button class="btn mobile_toggle" id="js_mobile_menu_toggle">
                        <i class="fas fa-bars fa-2x"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="mobile_nav_menu">
        <div class="text-right">
            <button class="btn btn-lg" id="js_mobile_menu_close">
                <i class="fas fa-times fa-2x"></i>
            </button>
        </div>
        <?php wp_nav_menu([
            'menu_class' => 'list-group',
            'theme_location'=> 'primary_nav'
        ]);?>
        <nav class="nav navbar-nav">
            <div class=container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="search_bar align-self-center" id="js_mobile_navbar_search">
                            <form class="form-inline" action="/" method="get">
                                <input type="text" class="form-control mobilenav-searchbar-trigger" name="s" id="search" value="<?php the_search_query(); ?>"
                                       placeholder="Search <?php bloginfo('name');?>">
                                <div class="input-group-append">
                                    <button type="submit" class="btn bg-transparent border-0">
                                        <img src="<?php bloginfo('template_url');?>/res/svg/slash.svg">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


    </div>
    <div class="header_image" style="background: url(<?php echo(has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' ));?>) no-repeat; background-position: center; background-size: cover;">
    </div>

</header>
