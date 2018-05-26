<?php
include 'connect.php';

$amt = $_REQUEST['amt'];
	$per1 = "1.13";
	$per = "13";
	$grand = $per1 * $amt;
	$seldriver = "select id from driver order by rand()";
	$seldriverexe = $connection->query($seldriver);
	$seldriverfetch = $seldriverexe->fetch_object();
	
if(isset($_REQUEST['order_final']))
{
	$Name = $_REQUEST['Name'];
	$Address = $_REQUEST['Address'];
	$amt = $_REQUEST['amt'];
	$Mobile = $_REQUEST['Mobile'];
	$Email_Id = $_REQUEST['Email_Id'];
	$Pay_Type = $_REQUEST['Pay_Type'];
	$per = "1.13";
	$grand = $per * $amt;
	
	
	
	$ins_final = "insert into order_fixed(order_fixed_id,total,tax_rate,grand_total,name,address,payment_type,mobile,email,d_id) values(NULL,'$amt','13','$grand','$Name','$Address','$Pay_Type','$Mobile','$Email_Id','".$seldriverfetch->id."')";
	$ins_finalexe = $connection->query($ins_final);
	
	echo '<script>alert("Order Successfully placed and in process futher for delivery in 20 minutes");</script>';
	echo '<script>window.location="order_status.php";</script>';
	 
	
}
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
	<title>Spicy Bite a Restaurant Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
		function isNumberKey(evt) 
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
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
								<li>
									<a href="index.php">Home</a>
								</li>
								
							</ul>
							<ul class="list-right">
								<li>
									<span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
									<a href="mailto:info@example.com">info@example.com</a>
								</li>
								<li>
									<span class="fa fa-phone list-icon" aria-hidden="true"></span>
									<p> 1234 423 23 </p>
								</li>
							</ul>
						</div>


						<div class="clearfix"> </div>
					</nav>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //menu -->
			<!-- banner -->
			
	
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
                                <form method="post">
									<table width="100%">
                                    <tr>
                                    <td>Name</td>
                                    <td> : </td>
                                    <td><div class="contact-input"><input type="text" name="Name" class="name" required/></div></td>
                                    </tr>
                                    <tr>
                                    <td><br/></td>
                                    </tr>
                                    <tr>
                                    <td>Address</td>
                                    <td> : </td>
                                    <td><textarea name="Address" class="name" required></textarea></td>
                                    </tr>
                                    <tr>
                                    <td><br/></td>
                                    </tr>
                                    <tr>
                                    <td>Mobile</td>
                                    <td> : </td>
                                    <td><input type="text" name="Mobile" maxlength="10" onkeypress="return isNumberKey(event)" required/></td>
                                    </tr>
                                    <tr>
                                    <td><br/></td>
                                    </tr>
                                    <tr>
                                    <td>Email ID</td>
                                    <td> : </td>
                                    <td><input type="email" name="Email_Id" required/></td>
                                    </tr
                                    ><tr>
                                    <td><br/></td>
                                    </tr>
                                    <tr>
                                    <td>Total</td>
                                    <td> : </td>
                                    <td><input type="text" name="Total" value="<?php echo $amt;?>" required readonly/></td>
                                    </tr>
									<tr>
                                    <td><br/></td>
                                    </tr>
                                    <tr>
                                    <td>Per. 13%</td>
                                    <td> : </td>
                                    <td><input type="text" name="Per" value="<?php echo $per;?>" required readonly/></td>
                                    </tr>
									<tr>
                                    <td><br/></td>
                                    </tr>
                                    <tr>
                                    <td>Grand Total</td>
                                    <td> : </td>
                                    <td><input type="text" name="Grand_Total" value="<?php echo $grand;?>" required readonly/></td>
                                    </tr>
                                    <tr>
                                    <td><br/></td>
                                    </tr>
                                    <tr>
                                    <td>Pay Type</td>
                                    <td> : </td>
                                    <td><select name="Pay_Type" id="Pay_Type">
                                    <option value="COD">COD</option>
                                    <option value="CARD">CARD</option>
                                    </select></td>
                                    </tr>
                                    <tr align="center">
                                    <td colspan="3"><br/><input type="submit" name="order_final" value="Place Order" /></td>
                                    </tr>
                                    </table>
									</form>
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					
				</ul>
				
			</div>
		</div>

	</div>
	<!--//menu-->
	
	<!--reservation-->
	
	<!--//reservation-->
	<!--chef-->
	
	<!-- //chef -->
	<!-- slid -->
	
	<!-- //slid -->



	<!--.testimonials-->
	
	<!-- contact -->
	
	<!-- //contact -->
	<!--footer-->
	
	
	<div class="footer-cpy text-center">
		
		<div class="footer-copy">
			<p>© 2017 Spicy Bite. All rights reserved | Design by
				<a href="http://w3layouts.com">W3layouts</a>
			</p>
		</div>
	</div>
	<!--//footer-->



	<!-- Tooltip -->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">
							<img src="images/logo.png" class="img-responsive img1" alt="" />Spicy Bite</h3>
					</div>
					<div class="modal-body">
						<img src="images/modal.jpg" class="img-responsive" alt="image">
						<h4>Tasty experience in every bite!</h4>
						<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum
							felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam
							egestas et mi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
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