<!DOCTYPE html>
<?php
$userName='';
/*if($this->session->userdata('logged_in'))
{
	$userName=$this->session->userdata('logged_in')['username'];
}*/
//echo 'Controller : '.$this->router->fetch_class(); exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MY HEALTH TRACKER </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo AD_CSS_PATH; ?>bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo AD_FONTS_PATH; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo AD_CSS_PATH; ?>animate.min.css" rel="stylesheet">
	<link href="<?php echo AD_CSS_PATH; ?>journals.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="<?php echo AD_CSS_PATH; ?>custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo AD_CSS_PATH; ?>maps/jquery-jvectormap-2.0.1.css" />
    <link href="<?php echo AD_CSS_PATH; ?>icheck/flat/green.css" rel="stylesheet" />
    <link href="<?php echo AD_CSS_PATH; ?>floatexamples.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo AD_JS_PATH; ?>jquery.min.js"></script>
	<!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">