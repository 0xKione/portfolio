<?php 
/**
 *  Header Page
 * 
 *  Contains the header of the main pages for the site, it loads all stylesheets along
 *  with presenting the header view and opening html/body tags.
 */
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="robots" content="index, nofollow">

        <title><?php echo $title; ?></title>
        
        <base href="<?php echo base_url(); ?>" />

        <link rel="stylesheet" href="css/vendor/bootstrap/css/bootstrap.css">
        <style>
            body {
                padding-top: 50px;
            }
        </style>
        <link rel="stylesheet" href="css/vendor/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><?php echo $projectName; ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="rg-nav-link"><a href="#projectSection">Projects</a></li>
                    <li role="presentation" class="rg-nav-link"><a href="#demoSection">Demos</a></li>
                    <li role="presentation" class="rg-nav-link"><a href="#designSection">Designs</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
          </div>
        </nav>
