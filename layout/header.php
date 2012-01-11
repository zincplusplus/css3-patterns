<!doctype html>
<?php
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
if (preg_match('/opera/', $userAgent)) {
    $browser = 'opera';
} elseif (preg_match('/webkit/', $userAgent)) {
    $browser = 'webkit';
} elseif (preg_match('/msie/', $userAgent)) {
    $browser = 'msie';
} elseif (preg_match('/mozilla/', $userAgent) && !preg_match('/compatible/', $userAgent)) {
    $browser = 'mozilla';
} else {
    $browser = 'unrecognized';
}

$currentPage = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <?php if(isset($issingle)) { ?>
            <title><?php echo $row["title"]?>, an useless CSS3 pattern that you'll love! | eCSSpert</title>
        <?php } else ?>
            <title>Useless CSS3 Patterns | eCSSpert</title>
        <?php  ?>

        <meta name="author" content="Vlad Zinculescu, ecsspert@gmail.com">

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="robots" content="noindex" />
        <meta http-equiv="imagetoolbar" content="false" />
        <link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml" />
        <link rel="author" href="/humans.txt" />

        <!-- windows pin page -->
        <meta name="application-name" content="eCSSpert" />
        <meta name="msapplication-tooltip" content="CSS3 Delight: Famous logos done in pure CSS3." />
        <!-- end windows pin page -->

        <!-- facebook OG -->
        
        <?php if(isset($issingle)) {
            $thumb = $row["id"];    
        } else {
            $thumb = "thumb";
        } ?>
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/play/useless-css3-patterns/images/facebook-icons/<?php echo $thumb; ?>.png"/>
        
        <meta property="fb:admins" content="1423320553" />
        <!-- end facebook OG -->

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
        <link rel="shortcut icon" href="/favicon.ico" />

        <!-- For iPhone 4 with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
        <!-- For first-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
        <!-- CSS: implied media=all -->
        <link href="http://www.ecsspert.com/tools/csslib/reset.css" rel="stylesheet" type="text/css" />
        <link href="http://www.ecsspert.com/tools/csslib/tools.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css?v=<?php echo date('YW'); ?>" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="/tools/js/prefixfree.min.js"></script>
        <script type="text/javascript" src="/tools/js/prefixfree.dynamic-dom.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="/tools/js/jquery.cookie.js"></script>

        <?php if(isset($issingle)) { ?>
            <script type="text/javascript" src="js/jquery.autoresize.js"></script>
        <?php } ?>
        <!-- end CSS-->
    </head>

    <body class="<?php echo $browser; if(isset($issingle)) { echo ' single'; } else if(isset($is404)) { echo ' transparent'; } else { echo ' index'; } ?>" >

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=143184445784558";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- begin of edit -->
        <div id="content">
            <?php if ($browser == 'msie') { ?>
                <!--[if lte IE 8]>
                    <div class="browsernotice">
                        <h5>Hey party pooper! </h5>
                        <h6>This is a modern website and it won't show good on your ancient browser.<br />You need to switch to a more fun browser like <a href="http://www.google.com/chrome" target="_blank">Google Chrome</a> now!</h6>
                    </div>
                <![endif]-->
            <?php } ?>
            <?php if ($browser == 'mozilla') { ?>
                <div class="browsernotice">
                    <h5>About that...</h5>
                    <h6>I'm sorry, but this section doesn't work on Firefox, for now!</h6>
                </div>
            <?php } ?>