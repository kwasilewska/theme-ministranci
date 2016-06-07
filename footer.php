                    <div id="footer" class="row">
                       <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 without_padding-left">
                                    <div class="footer_text">
                                        <p id="copyright">copyright &copy; 
                                            <?php 
                                                ob_start();
                                                bloginfo('url');
                                                $url = ob_get_contents();
                                                ob_end_clean();
                                                echo str_replace( ['http://', 'https://'], '', $url ); 
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-offset-1 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 col-xs-4 col-sm-4 col-md-4 col-lg-4 without_padding-left">
                                    <div class="footer_text">
                                        <div id="dmac_logo">
                                            <a href="http://www.ministranci.archidiecezja.katowice.pl" target="_blank">
                                                <img src="http://www.ministranci.archidiecezja.katowice.pl/banner.jpg" alt="Duszpasterstwo Ministrantów Archidiecezji Katowickiej" title="Duszpasterstwo Ministrantów Archidiecezji Katowickiej" width="405" height="60" border="0">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php wp_footer(); ?>
    </body>
</html>
