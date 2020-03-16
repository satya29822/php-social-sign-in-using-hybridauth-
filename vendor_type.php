
<?php

include('index.php');
include('config.php');
include('callback.php');
include('config/connection.php');
error_reporting(0);
?>
<?php if ($adapters) : ?>
  <h1>You are logged in:</h1>
  <ul>
      <?php foreach ($adapters as $name => $adapter) : ?>
          <li>
              <strong><?php print $adapter->getUserProfile()->displayName; ?></strong> from
              <i><?php print $name; ?></i>
              <span>(<a href="<?php print $config['callback'] . "?logout={$name}"; ?>">Log Out</a>)</span>
           <?php 
              print $adapter->getUserProfile()->displayName;
              $name = print $adapter->getUserProfile()->displayName;
              $name = $adapter->getUserProfile()->displayName;
              $email = print $adapter->getUserProfile()->email;
              $email = $adapter->getUserProfile()->email;
              $query=mysqli_query($conn,"insert into vendor(name,email_id) values('$name','$email')");
              if($query)
              {
                  echo "<script>alert('You are successfully register');</script>";
              }
              else{
              echo "<script>alert('Not register something went worng');</script>";
              }
              $sql="select id from vendor where email_id='$email'";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      print "id: " . $row["id"].  "<br>";
                  }
              } else {
                  echo "0 results";
              }
              $id= $row["id"];
              print $id;
              if(isset($_POST['RetailVendor'])){
                $sql = "update vendor set vendor_type='5' WHERE email_id='$email'";
                      if (mysqli_query($conn, $sql)) {
                      echo "Record updated successfully";
                      header('Location: signup_vendor.php');
                      } else {
                      echo "Error updating vendor type please enter your email " . mysqli_error($conn);
              }  
            }          
              else if($_POST['Manufacturer']){
                $sql = "update vendor set vendor_type='6' WHERE email_id='$email'";
                  if (mysqli_query($conn, $sql)) {
                  echo "Record updated successfully";
                  header('Location: signup_vendor.php');
                  } else {
                  echo "Error updating vendor type please enter your email " . mysqli_error($conn);
              }
            }
              else if($_POST['VenueOwner']){
                $sql = "update vendor set vendor_type='2' WHERE email_id='$email'";
                if (mysqli_query($conn, $sql)) {
                  echo "Record updated successfully";
                  header('Location: signup_vendor.php');
                  } else {
                  echo "Error updating vendor type please enter your email " . mysqli_error($conn);
              }
            }
              else if($_POST['EventOrganizer']){
                $sql = "update vendor set vendor_type='6' WHERE email_id='$email'";
                if (mysqli_query($conn, $sql)) {
                  echo "Record updated successfully";
                  header('Location: signup_vendor.php');
                  } else {
                  echo "Error updating vendor type please enter your email " . mysqli_error($conn);
              }
            }
              else if($_POST['LeadManager']){
                $sql = "update vendor set vendor_type='6' WHERE email_id='$email'";
                if (mysqli_query($conn, $sql)) {
                  echo "Record updated successfully";
                  header('Location: signup_vendor.php');
                  } else {
                  echo "Error updating vendor type please enter your email " . mysqli_error($conn);
              }
            }
                mysqli_close($conn);
                
              ?>
          </li>
      <?php endforeach; ?>
  </ul>
<?php endif; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
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
  
  <!-- Header -->
  <!-- Header -->
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
                  <li><a href="news-style2.html"><i class="fa fa-building"></i> List Venue</a></li>
                  <li><a href="news-style2.html"><i class="fa fa-wrench"></i> Account Details</a></li>
                  <li><a href="news-single-right-sidebar.html"><i class="fa fa-cog"></i> Settings</a></li>
                  <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                </ul>
              </li>
            </ul>
         </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQsfg8eGzYdOQgwID-r6FUKEi5YtGiiQHFlw8AOS__yUagKKdHW">
      <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content pt-100">
          
        </div>
      </div>      
    </section>

 <section>
  <form enctype="multipart/form-data" action="vendor_type.php" method="POST">
      <div class="container pt-50 pb-50">

          <div class="schedule-tab">
                  
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="home">
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-2 mb-md-50">
            <div class="funfact style-1 pb-15 pt-15 p-20 bg-white" style="border: 1px solid #61892f;">
              <i class="pe-7s-cart text-black-light mt-5 font-40" data-text-color="#ccc" style="color: rgb(204, 204, 204);"></i>
              <div class="clearfix"></div>
              <input type="submit" name="RetailVendor" value="Retail Vendor" />
            </div>
          </div>
          
           <div class="col-xs-12 col-sm-6 col-md-2 mb-md-50">
            <div class="funfact style-1 pb-15 pt-15 p-20 bg-white" style="border: 1px solid #61892f;">
              <i class="pe-7s-box1 text-black-light mt-5 font-40" data-text-color="#ccc" style="color: rgb(204, 204, 204);"></i>
              <div class="clearfix"></div>
              
              <input type="submit" name="Manufacturer" value="Manufacturer" />
            </div>
          </div>
      <div class="col-xs-12 col-sm-6 col-md-2 mb-md-50">
            <div class="funfact style-1 pb-15 pt-15 p-20 bg-white" style="border: 1px solid #61892f;">
              <i class="pe-7s-culture text-black-light mt-5 font-40" data-text-color="#ccc" style="color: rgb(204, 204, 204);"></i>
              <div class="clearfix"></div>
        
              <input type="submit" name="VenueOwner" value="Venue Owner" />
            </div>
          </div>
      <div class="col-xs-12 col-sm-6 col-md-2 mb-md-50">
            <div class="funfact style-1 pb-15 pt-15 p-20 bg-white" style="border: 1px solid #61892f;">
              <i class="pe-7s-gift text-black-light mt-5 font-40" data-text-color="#ccc" style="color: rgb(204, 204, 204);"></i>
              <div class="clearfix"></div>
            
              <input type="submit" name="EventOrganizer" value="Event Organizer" />
            </div>
          </div>
      <div class="col-xs-12 col-sm-6 col-md-2 mb-md-50">
            <div class="funfact style-1 pb-15 pt-15 p-20 bg-white" style="border: 1px solid #61892f;">
              <i class="pe-7s-paper-plane text-black-light mt-5 font-40" data-text-color="#ccc" style="color: rgb(204, 204, 204);"></i>
              <div class="clearfix"></div>
            
              <input type="submit" name="LeadManager" value="Lead Manager" />

            </div>
          </div>
        </div>
    </div>
  </div> 
</div>
  
  

    </div>
    </form>
 </section>
  <!-- end main-content -->
  <?php
?>
  
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#121212">
    <div class="container pt-60 pb-30">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <img src="images/logo-wide-dark.png" alt="">
          <p class="font-12 mt-20 mb-20">NextEvent is a library of corporate and business templates with predefined web elements which helps you to build your own site. Lorem ipsum dolor sit amet elit.</p>
          <ul class="social-icons flat medium list-inline mb-40">
            <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
            <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Quick Links</h6>
            <ul class="list-border list theme-colored angle-double-right">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Donor Privacy Policy</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Copyright Notice</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Latest News</h6>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="images/news/n1.jpg" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="images/news/n2.jpg" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="images/news/n3.jpg" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Tags</h6>
            <ul class="list-inline tags">
              <li><a href="#">Business</a></li>
              <li><a href="#">Venue</a></li>
              <li><a href="#">Event</a></li>
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Meeting</a></li>
              <li><a href="#">conferences</a></li>
              <li><a href="#">Modern</a></li>
              <li><a href="#">Party</a></li>
              <li><a href="#">Music</a></li>
              <li><a href="#">Wedding</a></li>
              <li><a href="#">Ticket</a></li>
              <li><a href="#">convene</a></li>
              <li><a href="#">Schedule</a></li>
              <li><a href="#">Speakers</a></li>
              <li><a href="#">Management</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Quick Contact</h6>
            <form id="quick_contact_form2" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post">
              <div class="form-group">
                <input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-flat btn-xs btn-transparent text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
              </div>
            </form>

            <!-- Quick Contact Form Validation-->
            <script type="text/javascript">
              $("#quick_contact_form2").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="mt-20 mb-30 pt-30 pb-30 text-center" data-bg-color="rgba(0,0,0,0.4)">
            <i class="fa fa-twitter text-theme-colored font-28 mb-10"></i>
            <div class="twitter-feed-carousel text-center" data-username="Envato"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-20" data-bg-color="#181818">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="font-11 m-0" data-text-color="#555">Copyright &copy;2015 <a class="font-11" href="#">ThemeMascot</a>. All Rights Reserved</p>
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
<script>
    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
</script>
</body>
</html>
<?php

?>