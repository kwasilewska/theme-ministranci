<title><?php wp_title(); ?></title>
<meta charset="UTF-8" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="author" content="kwasilewska" />
<meta name="generator" content="wordpress" />
    <!-- Bootstrap CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap JS -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.12.3.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/npm.js" type="text/javascript"></script>
    <!-- Czcionka -->
<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css">
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
