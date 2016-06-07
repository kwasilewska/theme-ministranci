<div id="post-<?php 
the_post();

the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="col-xs-offset-2 col-md-offset-1 col-xs-7 col-sm-4 col-md-8 col-lg-8">
            <h1 class="article_title">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-10 col-sm-11 col-md-10 col-lg-10" >
            <article class="article_text">
                <?php
                    
                    the_content();
                ?>
            </article>
            
        </div>
    </div>
</div>
