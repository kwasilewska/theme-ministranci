<div class="row">
    <?php if ( have_posts() ) : ?>
    
    <?php if ( is_home() && ! is_front_page() ) : ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-xs-offset-2 col-md-offset-1 col-xs-7 col-sm-4 col-md-8 col-lg-8">
                <h2 class="article_title"> <?php single_post_title(); ?> </h2>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
            
            if (is_single() ) {
                require __DIR__ . '/single-post.php';
                
                $next = 'Następny artykuł';
                $previous = 'Poprzedni artykuł';
            } else {
                require __DIR__ . '/post.php';
                
                $next = 'Następna strona';
                $previous = 'Poprzedna strona';
            }
            
    // End the loop.
    endwhile;
    ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav>
            <ul class="pager">
              <li>
                  <?php
                      previous_posts_link('<span aria-hidden="true">&larr;</span> ' . $previous);
                  ?>
              <li>
                  <?php
                      next_posts_link($next . ' <span aria-hidden="true">&rarr;</span>');
                    ?>
              </li>
            </ul>
          </nav>
    </div>
    
    <?php
    
else :
    
    if (is_search()) {
       
    ?>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 without_padding-left">
        <div class="row">
            <div class="col-xs-7 col-sm-4 col-md-8 col-lg-8">
                <h2 class="article_title"> Wyniki wyszukiwania frazy : <?php echo get_search_query();?> </h2>
            </div>
        </div>
    </div>

    <?php
        
        
        
        
    } else {
        require __DIR__ . '/404.php';
    }
endif;

?>

</div>