                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 without_padding-left without_padding-right">
                        <div id="carousel-container" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php
                                    $active = 0;
                                    foreach ( new DirectoryIterator( __DIR__ . '/../carousel-img' ) as $file ){
                                        if ( $file->isDot() || $file->isDir() ){
                                            continue;
                                        }
                                        if ( $file->isFile() ){
                                            echo '<li data-target="#carousel-container" data-slide-to="'. $active .'" ';
                                            if ( $active == 0 ){
                                                echo 'class="active"';
                                            }
                                            echo '></li>';
                                            $active++; 
                                       }
                                    }
                                ?>
                            </ol>
                            <div class="carousel-inner">
                                    
                                <?php
                                    $active = TRUE;
                                    foreach ( new DirectoryIterator( __DIR__ . '/../carousel-img' ) as $file ){
                                        if ( $file->isDot() || $file->isDir() ){
                                            continue;
                                        }
                                        if ( $file->isFile() ){
                                            echo '<div class="item ';
                                            if ( $active ){
                                                echo 'active';
                                                $active = FALSE;
                                            }
                                            echo '">';
                                            echo '<img src="';
                                            bloginfo('stylesheet_directory');
                                            echo '/carousel-img/' . $file->getFilename() . '">';
                                            echo '</div>';
                                        }
                                    }
                                ?>
                                    
                            </div>
                            <a class="left carousel-control" href="#carousel-container" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-container" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                    </div>