<?php
include 'connect.php';

$select_fur = "select Order_fixed_id,total,tax_rate,grand_total,order_fixed.name,address,payment_type,mobile,email,driver.name as driver_name, driver.mobile_No as driver_no from order_fixed,driver where driver.id = order_fixed.d_id order by order_fixed_id desc limit 1";
	$select_fur_exe = $connection->query($select_fur);
	$select_furfetch = $select_fur_exe->fetch_object();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Food on wheels</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Spicy Bite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!--about-bottom -->
	<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
	<!--about-bottom -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
		<div class="header-main">
				<div class="container">
					<nav class="navbar navbar-default">
						
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="scroll hvr-underline-from-center">
									<a href="index.html">Home</a>
								</li>
								
								<li>
									<a class="scroll hvr-underline-from-center" href="#menu">Menu</a>
								</li>
								
							</ul>
							<ul class="list-right">
								<li>
									<span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
									<a href="mailto:info@example.com">foodonwheels@gmail.com</a>
								</li>
								<li>
									<span class="fa fa-phone list-icon" aria-hidden="true"></span>
									<p> 647 126 2325 </p>
								</li>
                                <li style="color:#FFF">
                                <a href="checkout.php">CHECKOUT</a>
                                </li>
							</ul>
						</div>


						<div class="clearfix"> </div>
					</nav>
					<div class="clearfix"> </div>
				</div>
			</div>
	
	<div class="menu-agileits_w3layouts section">
		<div class="container">

			<div class="load_more">
				<b style="font-size:36px;">
					special dishes</b>
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">
								<div class="col-md-6 menu-grids">
                                <table width="100%">
                                <tr>
                                <td><strong>Order ID</strong></td>
                                <td>&nbsp;&nbsp;&nbsp;</td>
                                <td><?php echo $select_furfetch->Order_fixed_id;?></td>
                                </tr>
                                <tr>
                                <td><strong>Driver Assigned</strong></td>
								<td>:</td>
								<td><?php echo $select_furfetch->driver_name;?></td>
                                <td><strong>Mobile No. :</strong> <?php echo $select_furfetch->driver_no;?></td>
                                </tr>
                                <tr>
                                <td><strong>Status</strong></td>
                                <td>&nbsp;&nbsp;&nbsp;</td>
                                <td>Confirmed, being process further!</td>
                                </tr>
                                <tr>
                                <td><a href="index.php"><input type="button" value="Go To Home Page"/></a></td>
                                </tr>
                                </table>
                                </div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					
				</ul>
				
			</div>
		</div>

	</div>
		<div class="footer-cpy text-center">
		<div class="container">
				<div class="footer_grid_bottom contact">
					<ul>

						<li>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<a href="mailto:info@example.com">foodonwheels@gmail.com</a>
						</li>
						<li>
							<span class="fa fa-phone" aria-hidden="true"></span>
							<p> 647 126 2325 </p>
						</li>
						<li>
							<span class="fa fa-map-marker" aria-hidden="true"></span>
							<p>121,Brunel road,Mississauga ON</p>
						</li>
					</ul>
					<p text>© 2017 Food on wheels. All rights reserved</p>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!--//footer-->



	<!-- Tooltip -->
	
	<!-- //Tooltip -->

	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!--/js-->
	<!-- //gallery -->
	<script src="js/jquery.tools.min.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/jquery.cm-overlay.js"></script>

	<script>
		$(document).ready(function () {
			$('.cm-overlay').cmOverlay();
		});
	</script>
	<!-- //gallery -->
	<!--start-date-piker-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
	<!-- /End-date-piker -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--//end-smooth-scrolling-->
	<!-- smooth-scrolling-of-move-up  -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>


	<script src="js/SmoothScroll.min.js"></script>

	<script>
		$(document).ready(function () {
			size_li = $("#myList li").size();
			x = 1;
			$('#myList li:lt(' + x + ')').show();
			$('#loadMore').click(function () {
				x = (x + 1 <= size_li) ? x + 1 : size_li;
				$('#myList li:lt(' + x + ')').show();
			});
			$('#showLess').click(function () {
				x = (x - 1 < 0) ? 1 : x - 1;
				$('#myList li').not(':lt(' + x + ')').hide();
			});
		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>


</body>

</html>