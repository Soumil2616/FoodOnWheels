<?php
include 'connect.php';
include 'controlleritem.php';
$selfix = "select * from fixed_item";
$selfixexe = $connection->query($selfix);
while($selfixfetch = $selfixexe->fetch_object())
{
	$numin = $selfixfetch->id;
	$pass = "add".$numin;
if(isset($_REQUEST[$pass]))
{
	//echo $pass.'<br/>';
	$Sizeset = "Size".$numin;
	$Qtyset = "Qty".$numin;
	$item_idset = "item_id".$numin;
	$Size = $_REQUEST[$Sizeset];
	$Quantity = $_REQUEST[$Qtyset];
	$item_id = $_REQUEST[$item_idset];
	if($Size=='S')
	{
		$total_amt = $Quantity * 10;
		
	$ins_item = "insert into checkout(C_id,CC_id,f_id,size,qty,amt) values(NULL,'0','$item_id','$Size','$Quantity','$total_amt')";
	$ins_item_exe = $connection->query($ins_item);
	echo '<script>alert("Successfully added to cart");</script>';
		
	}
	else if($Size=='M')
	{
		$total_amt = $Quantity * 12;
	
	$ins_item = "insert into checkout(C_id,CC_id,f_id,size,qty,amt) values(NULL,'0','$item_id','$Size','$Quantity','$total_amt')";
	$ins_item_exe = $connection->query($ins_item);
	echo '<script>alert("Successfully added to cart");</script>';	
	
	}
	else if($Size=='L')
	{
		$total_amt = $Quantity * 14;
		
	$ins_item = "insert into checkout(C_id,CC_id,f_id,size,qty,amt) values(NULL,'0','$item_id','$Size','$Quantity','$total_amt')";
	$ins_item_exe = $connection->query($ins_item);
	echo '<script>alert("Successfully added to cart");</script>';	
	
	}
	
}

}
?>
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
	<!-- //banner -->

	
	<div class="section w3ls-banner-btm-main" id="about">
		<div class="container">
			<div class="banner-btm">
				<div class="col-md-6 banner-btm-g1">
					<img src="images/about.jpg" class="img-responsive" alt="" />
				</div>
				<div class="col-md-6 banner-btm-g2">
					<h3 class="title-main">Welcome to Food on Wheels!</h3>
					
					<p>Over The years Our Restaurant has been known in the community and has been cooking delicious authentic Indian food.We pride ourselves in our food quality and service. Its fast and easy to order your food online and save money. <br>
											Should you wish, we would take great pleasure in delivering your meal so that in the comfort of your home, you may enjoy subtle tastes that gently transport you on an exotic journey to the East.We hope that the food we provide is an enjoyable and enriching experience and that you, by favouring us with your custom, will in turn enrich our lives.
					</p>
									</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- //testimonials -->
	<form method="post">
	<div class="menu-agileits_w3layouts section" id="menu">
		<div class="container">

			<div class="load_more">
				<b style="font-size:36px">
					Menu</b>
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">
								<div class="col-md-12 menu-grids">
                                 <?php 
									foreach($ob_special_item as $result)
									{
										?>
									<div class="w3l-menu-text">
                                    <div class="menu-text-left">
											<img src="images/<?php echo $result->image ?>" alt="" class="img-responsive" />
										</div>
										<div class="menu-text-right">
											<div class="menu-title">
												<h4><?php echo $result->description; ?></h4><input type="hidden" name="item_id<?php echo $result->id;?>" value="<?php echo $result->id; ?>"/>
                                                <center>Quantity&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<select name="Qty<?php echo $result->id;?>">
                                                <?php 
												for($i=1;$i<=7;$i++)
												{ ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                                </select>
                                                &nbsp;&nbsp;&nbsp;&nbsp;Size&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<select name="Size<?php echo $result->id;?>">
                                                <option value="S">250 gm</option>
                                                <option value="M">500 gm</option>
                                                <option value="L">1 kg</option>
                                            
                                                </select></center>

											</div>
                                            <div class="menu-price">
												<h4 class="price-clr">Price: <br> 250 gm : $10 <br> 500gm : $12 <br> 1 kg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $14<br/>
                                              <input type="submit" name="add<?php echo $result->id;?>" value="ADD<?php echo $result->id;?>"/></h4>
											</div>
											<div class="clearfix"></div>
                                            <p><?php echo $result->ingredients; ?></p>
										</div>
										<div class="clearfix"> </div>
									</div>
                                    <?php }?>
									
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