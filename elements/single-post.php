<div id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 without_padding-left">
            <h1 class="article_title">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 without_padding-left">
            <h6 class="article_date">
                Dodano: <?php the_time('d-m-Y'); ?> 
                <span class="seperator"></span>
                Autor: <?php the_author(); ?>
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-11 col-md-10 col-lg-10 without_padding-left" >
            <article class="article_text">
                <?php
                    the_content( sprintf(
                            __( 'Czytaj dalej %s', 'gadget' ),
                            the_title( '<span class="screen-reader-text">', '</span>', false )
                    ) );
                
                ?>
            </article>
            
        </div>
    </div>
</div>
