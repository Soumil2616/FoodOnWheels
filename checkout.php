<?php
include ("connect.php");

$select_check = "select C_id,CC_id,fixed_item.description,f_id,size,qty,amt from checkout, fixed_item where fixed_item.id = checkout.f_id;";
$select_checkexe = $connection->query($select_check);
$select_checknum = $select_checkexe->num_rows;
if(isset($_REQUEST['ahead']))
{
	$count_order_id = "select count(order_fixed_id)+1 as order_no from order_fixed";
	$count_order_idexe = $connection->query($count_order_id);
	$count_order_idfetch = $count_order_idexe->fetch_object();
	
	$select_fur = "select * from checkout";
	$select_fur_exe = $connection->query($select_fur);
	while($select_furfetch = $select_fur_exe->fetch_object())
	{
	$ins_fur = "insert into order_detail (order_detail_id,order_fixed_id,fixed_item_id,size,quantity,amount) values(NULL,'".$count_order_idfetch->order_no."','".$select_furfetch->f_id."','".$select_furfetch->size."','".$select_furfetch->qty."','".$select_furfetch->amt."')";
	$ins_furexe = $connection->query($ins_fur);
	
	
}
$select_furtotal = "select sum(amt) as total_amount from checkout";
	$select_furtotal_exe = $connection->query($select_furtotal);
	$select_furtotalfetch = $select_furtotal_exe->fetch_object();
	
	$del_fur = "delete from checkout";
$del_furexe = $connection->query($del_fur);
	
	header('location:paybill.php?amt='.$select_furtotalfetch->total_amount);

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
					
		<form method="post">
	<div class="menu-agileits_w3layouts section">
		<div class="container">

			<div class="load_more" id="checkout">
				<b style="font-size:36px">
					special dishes</b>
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">
								<div class="col-md-12 menu-grids">
                                <?php 
								if($select_checknum==0)
								{
									echo "<center><b style='font-size:24px;'>Cart empty, <a href='index.php'>Order now</a> </b></center>";
								}
								else
								{
									while($select_checkfetch = $select_checkexe->fetch_object()) { ?>
									<div class="w3l-menu-text">
                                    <div class="menu-text-left">
											<img src="images/m1.jpg" alt="" class="img-responsive" />
										</div>
										<div class="menu-text-right">
											<div class="menu-title">
												<h4><?php echo $select_checkfetch->description;?></h4>

											</div>
											<div class="menu-price">
												<h4 class="price-clr">$ <?php echo $select_checkfetch->amt;?></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="deletecheckout.php?id=<?php echo $select_checkfetch->C_id;?>&chk=chk">DEL</a>
											</div>
											<div class="clearfix"></div>
											<p><?php echo $select_checkfetch->size.' , Quantity : '.$select_checkfetch->qty;?></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<?php } ?>
									
									<input type="submit" name="ahead" value="GO"/><?php } ?>
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					
				</ul>
				
			</div>
		</div>

	</div>
    </form>
	<div class="footer-cpy text-center">
		
		<div class="footer-copy">
			<p>© 2017 Food on wheels. All rights reserved
			</p>
		</div>
	</div>
	<!--//footer-->



	
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