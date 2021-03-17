<!DOCTYPE html>
<html>
<head>
<title>Cinema</title>
<meta charset="utf-8">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="../css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="../css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="../css/kwicks-slider.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="../js/jquery.js"></script>
<script src="../js/superfish.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/jquery.kwicks-1.5.1.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.cookie.js"></script>
<script src="../js/touchTouch.jquery.js"></script>
<script>
if ($(window).width() > 1024) {
    document.write("<" + "script src='../js/jquery.preloader.js'></" + "script>");
}
</script>
<script>
jQuery(window).load(function () {
    $x = $(window).width();
    if ($x > 1024) {
        jQuery("#content .row").preloader();
    }
    jQuery('.magnifier').touchTouch();
    jQuery('.spinner').animate({
        'opacity': 0
    }, 1000, 'easeOutCubic', function () {
        jQuery(this).css('display', 'none')
    });
});
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
<![endif]-->
</head>
