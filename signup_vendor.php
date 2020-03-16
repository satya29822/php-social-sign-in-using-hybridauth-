<?php

include('config.php');
include('index.php');
include('callback.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css");

.social-btns{
    font-size: 22px;
    list-style: none;
}

.social-btns li{
    margin-bottom: 5px;
}

.social-btns li i{
    font-size: 22px;
}

.social-btns .btn-facebook {
  background-color: #38519f;
  border-color: #293b75;
  color: #ffffff;
  min-width: 250px;
}

.social-btns .btn-facebook:hover {
  color: #ffffff;
  background-color: #293b75;
}

.social-btns .btn-twitter {
  background-color: #00a8fa;
  border-color: #048cce;
  color: #ffffff;
  min-width: 250px;
}

.social-btns .btn-twitter:hover {
  color: #ffffff;
  background-color: #048cce;
}

.social-btns .btn-linkedin {
  background-color: #00629e;
  border-color: #044a75;
  color: #ffffff;
  min-width: 250px;
}

.social-btns .btn-linkedin:hover {
  color: #ffffff;
  background-color: #044a75;
}

.social-btns .btn-google {
  background-color: #df270b;
  border-color: #a01b03;
  color: #ffffff;
  min-width: 250px;
}

.social-btns .btn-google:hover {
  color: #ffffff;
  background-color: #a01b03;
}

.social-btns .btn-tumblr{
    background-color: #274665;
    border-color: #182b3d;
    color: #ffffff;
    min-width: 250px;
}

.social-btns .btn-tumblr:hover {
  color: #ffffff;
  background-color: #182b3d;
}

.social-btns .btn-pinterest{
    background-color: #cc0000;
    border-color: #9b0404;
    color: #ffffff;
    min-width: 250px;
}

.social-btns .btn-pinterest:hover {
  color: #ffffff;
  background-color: #9b0404;
}
</style>
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="NextEvent - Conference & Event Responsive HTML5 Template" />
<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Seller Network</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
    <header class="header">
    <div class="header-nav navbar-fixed-top navbar-dark navbar-transparent navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
             <nav id="menuzord-right" class="menuzord green">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)"><img src="https://res.cloudinary.com/karbi/image/upload/c_scale,w_200/v1551966462/PNG_1.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="index.php">Home</a></li>
              <li class=""><a href="about-us.html">About Us</a></li>
              <li class=""><a href="http://media.mintlime.in/">Media</a></li>
              <li class=""><a href="/jobs">Jobs</a></li>
              <li class=""><a href="http://media.mintlime.in/products/shop">Shop</a></li>
              <li class=""><a href="event_marketpl.php">Marketplace</a>
			   <ul class="dropdown">
                  <li><a href="news-style2.html"><i class="fa fa-birthday-cake"></i> Event Marketplace</a></li>
                  <li><a href="news-single-right-sidebar.html"><i class="fa fa-users"></i> Manpower Marketplace</a></li>
                  <li><a href="news-single-right-sidebar.html"><i class="fa fa-building"></i> Venue Marketplace</a></li>

                </ul>
			  </li>
			  <li><a href="#"><i class="fa fa-user"></i></a>
                <ul class="dropdown">
                  <li><a href="news-style2.html"><i class="fa fa-wrench"></i> Account Details</a></li>
                  <li><a href="news-single-right-sidebar.html"><i class="fa fa-cog"></i> Settings</a></li>
                  <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                </ul>
              </li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                <ul class="dropdown">
                  <li><a href="#">No Items <i class="fa fa-close"></i> </a></li>


                </ul>
              </li>
            </ul>
         </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- start main-content -->
  <div class="main-content"> 
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="http://www.tourismsaskatchewan.com/-/media/things-to-do/events/sasktel-centre-concert-events.ashx">
      <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h5 class="title text-white">Vendor SignUp</h5>
            </div>
          </div>
        </div>
      </div>      
    </section>
    <!-- Section: home -->
    <section id="home">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
			<div class="col-md-6 mt-50">
			 <ul class="social-btns center-block">
            <li> <!--?php echo $output; ?></li-->
            <!--li><button class="btn btn-twitter"><i class="fa fa-twitter pull-left" aria-hidden="true"></i>Sign in with Twitter</button></li-->          
                    <ul>
            <?php foreach ($hybridauth->getProviders() as $name) : ?>
                <?php if (!isset($adapters[$name])) : ?>
                    <li>
                        <a href="<?php print $config['callback'] . "?provider={$name}"; ?>">
                            Sign in with <strong><?php print $name; ?></strong>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

			</div>
      
              <div class="col-md-6 p-20">
                <form id="register_form" name="register_form" class="register-form p-50 pt-80 pb-80 mb-0 bg-theme-colored" method="post" action="" novalidate="novalidate">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <input type="text" placeholder="Username" id="" name="" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <input type="text" placeholder="Password" id="" name="" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-10 text-center">
                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-colored btn-theme-colored btn-xl btn-submit" data-loading-text="Please wait...">Login</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<!-- Footer -->
  <footer id="footer" class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0">Copyright ©2016 ThemeMascot. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

</html>