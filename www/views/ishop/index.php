
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="admin" />
<script type="text/javascript" src="<?=TEMPLATE?>js/functions.js"></script>
<script type="text/javascript" src="<?=TEMPLATE?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE?>js/jquery-ui-1.8.22.custom.min.js"></script>
<script type="text/javascript" src="<?=TEMPLATE?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?=TEMPLATE?>js/workscripts.js"></script>
<script type="text/javascript"> var query = '<?=$_SERVER['QUERY_STRING'] ?>';</script>
<!-- Fancybox -->
<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<!-- Fancybox -->

<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?=TEMPLATE?>proba___.css" />
	<title>Proba</title>
</head>

<body>
<div class="main">
<?php require_once 'inc/header.php' ?>
 

    <div id="contentwrapper">
        <div id="content">
        <?php include $view. '.php' ?>
        </div>
    </div>  
    <?php require_once 'inc/leftbar.php' ?>
    <?php require_once 'inc/rightbar.php' ?>
<div class="clr"></div>
    <?php require_once 'inc/footer.php' ?> 
</div>
</body>
</html>