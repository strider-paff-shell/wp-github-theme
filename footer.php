<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 footer_links text-center">
                <small><?php bloginfo('name'); ?></small>
                <?php wp_nav_menu([
                    'theme_location' => 'footer_nav'
                ]);?>
            </div>
        </div>
    </div>
</footer>

<script>
    $('#js_mobile_menu_toggle').click(function () {
        $('.mobile_nav_menu').show('fast');
    });
    $('#js_mobile_menu_close').click(function () {
        $('.mobile_nav_menu').hide('fast');
    });
    $('.nav-searchbar-trigger').focusin(function () {
        $('#js_navbar_search').css({'background': '#fff'})
    }).focusout(function () {
        $('#js_navbar_search').css({'background': '#3f4448'})
    });
    $('.mobilenav-searchbar-trigger').focusin(function () {
        $('#js_mobile_navbar_search').css({'background': '#fff'})
    }).focusout(function () {
        $('#js_mobile_navbar_search').css({'background': '#3f4448'})
    });
</script>
<?php wp_footer();?>
</body>
</html>