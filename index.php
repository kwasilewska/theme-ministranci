<?php
    /**
     *  Inlude header
     */
    get_header();
?>
<div class="row">
    <div id="article_content" class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-7 col-md-7 col-sm-7 col-xs-7">        
        <?php
            if (is_page() ) {
                //echo 'STRONA';
                require_once __DIR__ . '/elements/single-page.php';
            } else {
                //echo 'POST';
                require_once __DIR__ . '/elements/articles.php';
            }
        ?>
    </div>
    
    <?php
        /**
         * inlude sidebar
         */
        get_sidebar();
    ?>
    
</div>

    <?php
        /**
         * Inlude footer
         */
        get_footer();
    ?>