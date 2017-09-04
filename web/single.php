
<!DOCTYPE html>
<html>
<head>
<title>Recharge</title>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	

<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
									$(document).ready(function () {
										//Initialize tooltips
										$('.nav-tabs > li a[title]').tooltip();
										
										//Wizard
										$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

											var $target = $(e.target);
										
											if ($target.parent().hasClass('disabled')) {
												return false;
											}
										});

										$(".next-step").click(function (e) {

											var $active = $('.wizard .nav-tabs li.active');
											$active.next().removeClass('disabled');
											nextTab($active);

										});
										$(".prev-step").click(function (e) {

											var $active = $('.wizard .nav-tabs li.active');
											prevTab($active);

										});
									});

									function nextTab(elem) {
										$(elem).next().find('a[data-toggle="tab"]').click();
									}
									function prevTab(elem) {
										$(elem).prev().find('a[data-toggle="tab"]').click();
									}
								</script>
</head>
<body>

<div class="banner page-head">
	<div class="header">	
			<div class="logo">
			   <h1><a href="index.php"><i><img src="images/cell.png" alt=" " /></i> Recharge GO</a></h1>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=" " /></span>
				<ul class="nav1">
					<li><a href="#" data-toggle="modal" data-target="#myModal">Mobile</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal2">datacard</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal1">DTH</a></li>
					
					<li><a href="#" data-toggle="modal" data-target="#myModal4">login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal5">Signup</a></li>
				</ul>
						<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.nav1" ).slideToggle( 300, function() {
							
							  });
							 });
						</script>
						<!-- /script-for-menu -->
			</div>
			<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search item..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					
			<div class="clearfix"> </div>
	</div>
	<div class="container">
		<!-- dropdown -->
		<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.png) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Your Profile</p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#" data-toggle="modal" data-target="#myModal6"> Edit</a> </li> 
									<li> <a href="settings.php"> View Profile</a> </li>
									<li> <a href="orders.php">Your orders</a> </li>
																	
									<li> <a href="#" data-toggle="modal" data-target="#myModal4"> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
		</div>
		<!-- //dropdown -->
			<div class="clearfix"> </div>
	</div>
	<!-- edit -->
			<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="edit-pro">
								<form>
									<div class="edit-for-sett">				
										<h5>name</h5>													
											<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
										<h5>Email address</h5>													
											<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
										<h5>mobile no.</h5>													
											<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
										<h5>date of birth</h5>	
											<input type="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
										<h5>Gender</h5>
										<div class="swit-radio-thre">								
											<div class="check_box_thre"> <div class="radio_thre"> <label><input type="radio" name="radio" checked=""><i></i>MALE</label> </div></div>
											<div class="check_box_thre"> <div class="radio_thre"> <label><input type="radio" name="radio"><i></i>FEMALE</label> </div></div>	
											<div class="clearfix"></div>
										</div>
										<input type="submit" value="UPDATE">										
									</div>	
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- edit -->
</div>
<div class="banner-bottom">
	<div class="container">
		<div class="view_plans">
			<h4 class="view_title">Our Latest Recharge Plans</h4>
			<div class="section_room_single">
				<select id="country" onchange="change_country(this.value)" class="frm-field required">
					<option value="null">Andhra Pradesh</option>
					<option value="null">Assam</option>         
					<option value="AX">Bihar</option>
					<option value="AX">Chennai</option>
					<option value="AX">Delhi</option>
					<option value="AX">Gujarat</option>
					<option value="AX">Haryana </option>
					<option value="AX">Himachal Pradesh</option>
					<option value="AX">Karnataka</option>
					<option value="AX">Madhya Pradesh</option>
					<option value="AX">Mumbai</option>
					<option value="AX">Tamil Nadu</option>
					<option value="AX">Uttar Pradesh</option>
				</select>
			</div>
			<div class="clearfix"> </div>
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default'           
									width: 'auto'
									fit: true   
								});
							});
							
				</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="col-md-3 recharge-left">
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Full talktime</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Recharge</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>2G Data</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>3G Data</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Roaming</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-5" role="tab"><span>Top up</span></li> 
									  </ul>	
								</div>
								<div class="col-md-9 recharge-right">
									<div class="price-gds">
										<div class="rchge-one">
											<h3>Price</h3>
										</div>
										<div class="rchge-two">
											<h3>Talktime</h3>
										</div>
										<div class="rchge-three">
											<h3>Description</h3>
										</div>
										<div class="rchge-four">
											<h3>Validity</h3>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="resp-tabs-container">
									<!-- full talktime -->
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="recharge_plans">
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>69</p>
														</div>
														<div class="rchge-two">
															<p>69</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime Rs 69 For 28 days</p>
														</div>
														<div class="rchge-four">
															<p>28 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>140</p>
														</div>
														<div class="rchge-two">
															<p>140</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime + Additional 100 Local Sms</p>
														</div>
														<div class="rchge-four">
															<p>30 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>222</p>
														</div>
														<div class="rchge-two">
															<p>222</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime + Additional 150 L / N Sms</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>333</p>
														</div>
														<div class="rchge-two">
															<p>333</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime Rs 333</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">555</p>
														</div>
														<div class="rchge-two">
															<p>555</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime + Additional 200 Local Sms</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">22</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>200 L+N SMS (28 days)</p>
														</div>
														<div class="rchge-four">
															<p>28 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">11</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>100 L+N SMS (15 days)</p>
														</div>
														<div class="rchge-four">
															<p>15 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">777</p>
														</div>
														<div class="rchge-two">
															<p>777</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime + Additional 500 Local Sms</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
											</div>																			 
										</div>
									<!-- //full talktime -->
									<!-- special recharge -->
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="recharge_plans">
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">20</p>
														</div>
														<div class="rchge-two">
															<p>10</p>
														</div>
														<div class="rchge-three">
															<p>Rs 10 Talktime + 100 L/N Sms</p>
														</div>
														<div class="rchge-four">
															<p>1 Day</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">69</p>
														</div>
														<div class="rchge-two">
															<p>45</p>
														</div>
														<div class="rchge-three">
															<p>Rs 45 Talktime + 2000sec L / N </p>
														</div>
														<div class="rchge-four">
															<p>5 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">100</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>NR tariffs - IC @ 1p/min; Local OG @ 5p/min</p>
														</div>
														<div class="rchge-four">
															<p>28 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">125</p>
														</div>
														<div class="rchge-two">
															<p>50</p>
														</div>
														<div class="rchge-three">
															<p>Rs 45 Talktime + 2000sec L / N +  Local OG @ 5p/min</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">140</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>5000sec L/N for 15 Days</p>
														</div>
														<div class="rchge-four">
															<p>15 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">150</p>
														</div>
														<div class="rchge-two">
															<p>10</p>
														</div>
														<div class="rchge-three">
															<p>5000sec L / N for 5 Days</p>
														</div>
														<div class="rchge-four">
															<p>5 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">169</p>
														</div>
														<div class="rchge-two">
															<p>30</p>
														</div>
														<div class="rchge-three">
															<p>7000sec L / N for 5 Days</p>
														</div>
														<div class="rchge-four">
															<p>15 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">228</p>
														</div>
														<div class="rchge-two">
															<p>100</p>
														</div>
														<div class="rchge-three">
															<p>2000sec L / N + NR tariffs - IC @ 8p/min; Local OG @ 1p/min</p>
														</div>
														<div class="rchge-four">
															<p>30 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
											</div>										 
										</div>
									<!-- //special recharge -->
									<!-- 2G data -->
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
											<div class="recharge_plans">
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">5</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>16MB 2G Data For 1 Day</p>
														</div>
														<div class="rchge-four">
															<p>1 Day</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">7</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>32MB 2G Data For 1 Day</p>
														</div>
														<div class="rchge-four">
															<p>1 Day</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">16</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>50MB 2G Data For 3 Days</p>
														</div>
														<div class="rchge-four">
															<p>3 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">100</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>500MB 2G Data For 10 Days</p>
														</div>
														<div class="rchge-four">
															<p>10 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">125</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>600MB 2G Data For 15 Days</p>
														</div>
														<div class="rchge-four">
															<p>15 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">150</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>1GB 2G Data For 30 Days</p>
														</div>
														<div class="rchge-four">
															<p>30 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">169</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>1.5GB 2G Data For 30 Days</p>
														</div>
														<div class="rchge-four">
															<p>28 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">228</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>2GB 2G Data</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
											</div>										 
										</div>
									<!-- //2G data -->
									<!-- 3G data -->
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
											<div class="recharge_plans">
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">5</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>16MB 3G Data For 1 Day</p>
														</div>
														<div class="rchge-four">
															<p>1 Day</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">7</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>32MB 3G Data For 1 Day</p>
														</div>
														<div class="rchge-four">
															<p>1 Day</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">16</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>50MB 3G Data For 3 Days</p>
														</div>
														<div class="rchge-four">
															<p>3 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-two">100</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>500MB 3G Data For 10 Days</p>
														</div>
														<div class="rchge-four">
															<p>10 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>125</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>600MB 3G Data For 15 Days</p>
														</div>
														<div class="rchge-four">
															<p>15 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>150</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>1GB 3G Data For 30 Days</p>
														</div>
														<div class="rchge-four">
															<p>30 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>169</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>1.5GB 3G Data For 30 Days</p>
														</div>
														<div class="rchge-four">
															<p>28 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p>228</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>2GB 3G Data</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
											</div>
										</div>
									<!-- //3G data -->
									<!-- roaming -->
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
											<div class="recharge_plans">
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">20</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>NR tariffs - IC @ 10p/min; Local OG @ 80p/min</p>
														</div>
														<div class="rchge-four">
															<p>5 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">40</p>
														</div>
														<div class="rchge-two">
															<p>0</p>
														</div>
														<div class="rchge-three">
															<p>NR tariffs - IC @ 1p/min; Local OG @ 5p/min</p>
														</div>
														<div class="rchge-four">
															<p>7 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">50</p>
														</div>
														<div class="rchge-two">
															<p>20</p>
														</div>
														<div class="rchge-three">
															<p>NR tariffs - IC @ 1p/min; Local OG @ 5p/min</p>
														</div>
														<div class="rchge-four">
															<p>2 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-five">100</p>
														</div>
														<div class="rchge-two">
															<p>30</p>
														</div>
														<div class="rchge-three">
															<p>NR tariffs - IC @ 1p/min; Local OG @ 5p/min</p>
														</div>
														<div class="rchge-four">
															<p>10 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">125</p>
														</div>
														<div class="rchge-two">
															<p>50</p>
														</div>
														<div class="rchge-three">
															<p>NR tariffs - IC @ 8p/min; Local OG @ 1p/min</p>
														</div>
														<div class="rchge-four">
															<p>15 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">150</p>
														</div>
														<div class="rchge-two">
															<p>10</p>
														</div>
														<div class="rchge-three">
															<p>5000sec L / N for 5 Days</p>
														</div>
														<div class="rchge-four">
															<p>5 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">169</p>
														</div>
														<div class="rchge-two">
															<p>30</p>
														</div>
														<div class="rchge-three">
															<p>7000sec L / N for 5 Days</p>
														</div>
														<div class="rchge-four">
															<p>15 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-six">228</p>
														</div>
														<div class="rchge-two">
															<p>100</p>
														</div>
														<div class="rchge-three">
															<p>2000sec L / N + NR tariffs - IC @ 8p/min; Local OG @ 1p/min</p>
														</div>
														<div class="rchge-four">
															<p>30 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
											</div>
										</div>
									<!-- //roaming -->
									<!-- topup -->
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-5">
											<div class="recharge_plans">
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">10</p>
														</div>
														<div class="rchge-two">
															<p>Rs 6.75</p>
														</div>
														<div class="rchge-three">
															<p>Rs 6.75 Talktime</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">20</p>
														</div>
														<div class="rchge-two">
															<p>Rs 16.45</p>
														</div>
														<div class="rchge-three">
															<p>Rs 16.45 Talktime</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">50</p>
														</div>
														<div class="rchge-two">
															<p>Rs 47.5</p>
														</div>
														<div class="rchge-three">
															<p>Rs 47.5 Talktime</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-four">100</p>
														</div>
														<div class="rchge-two">
															<p>Rs 82.5</p>
														</div>
														<div class="rchge-three">
															<p>Rs 82.5 Talktime</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">125</p>
														</div>
														<div class="rchge-two">
															<p>125</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime Rs 69 For 28 days</p>
														</div>
														<div class="rchge-four">
															<p>28 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">150</p>
														</div>
														<div class="rchge-two">
															<p>150</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime + Additional 100 Local Sms</p>
														</div>
														<div class="rchge-four">
															<p>30 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">222</p>
														</div>
														<div class="rchge-two">
															<p>222</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime Rs 222</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
												<div class="validity">
													<a href="payment.php">
														<div class="rchge-one">
															<p class="col-three">333</p>
														</div>
														<div class="rchge-two">
															<p>333</p>
														</div>
														<div class="rchge-three">
															<p>Full Talktime Rs 333</p>
														</div>
														<div class="rchge-four">
															<p>0 Days</p>
														</div>
														<div class="clearfix"></div>
													</a>
												</div>
											</div>											 
										</div>
									<!-- //topup -->
									</div>
								</div>
							</div>
						</div>
		</div>
	</div>
</div>
<!-- mobile -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
								<section>
									<div class="wizard">
										<div class="wizard-inner">
											<ul class="nav nav-tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
														<span class="round-tab">
															<i class="glyphicon glyphicon-folder-open"></i>
														</span>
													</a>
												</li>

												<li role="presentation" class="disabled">
													<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
														<span class="round-tab">
															<i class="glyphicon glyphicon-pencil"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
														<span class="round-tab">
															<i class="glyphicon glyphicon-ok"></i>
														</span>
													</a>
												</li>
											</ul>
										</div>

										<form role="form" action="orders.php" method="post">
											<div class="tab-content">
												<div class="tab-pane active" role="tabpanel" id="step1">
													<div class="mobile-grids">
														<!--<div class="mobile-left text-center">
															<img src="images/mobile.png" alt="" />
														</div>-->
														<div class="mobile-right">
															<h4>Enter your mobile number</h4>
															<label>+91</label><input type="text" class="mobile-text" value="number" name="order" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
														<!--</div>-->
														
													<!--</div>-->
													<!--<ul class="list-inline pull-right">
                                                        <li><button type="button" class="mob-btn btn btn-primary next-step" value="Next">Next</button></li>
													</ul>-->
												<!--</div>-->
												<!--<div class="tab-pane" role="tabpanel" id="step2">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/mobile.png" alt="" />-->
														<!--</div>-->
														<div class="mobile-right ">
															<h4>Prepaid or Postpaid?</h4>
															<div class="radio-btns">
																<div class="swit">								
																	<div class="check_box"> 
																		<!--<img src="images/card.png" alt="" />-->
																		<div class="clearf-ix"></div>
																		<div class="radio"> 
																			<label>
																				<input type="radio" name="radio" checked=""><i></i>Prepaid
																			</label> 
																		</div>
																	</div>
																	<div class="check_box"> 
																		<!--<img src="images/card.png" alt="" />-->
																		<div class="clearfix"></div>
																		<div class="radio"> 
																			<label>
																				<input type="radio" name="radio"><i></i>Postpaid
																			</label> 
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
													</div>
													<!--<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>
														<li><button type="button" class="mob-btn btn btn-primary next-step">Next</button></li>
													</ul>-->
								             <!--</div>-->
												<!--<div class="tab-pane" role="tabpanel" id="step3">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/mobile.png" alt="" />-->
														</div>
														<div class="mobile-right ">
															<h4>Operator?</h4>
															<ul class="rchge-icons">
																<li><a href="#">Airtel</a></li>
																<li><a href="#">Aircel</a></li>
																<li><a href="#">Bsnl</a></li>
																<li><a href="#">Idea</a></li>
																<li><a href="#">Vodafone</a></li>
																<li><a href="#">Reliance</a></li>
																<li><a href="#">Uninor</a></li>
															</ul>
															<div class="section_room">
																<select id="country" onchange="change_country(this.value)" class="frm-field required">
																	<option value="null">Airtel</option>
																	<option value="null">Aircel</option>         
																	<option value="AX">Bsnl</option>
																	<option value="AX">Idea</option>
																	<option value="AX">Tata Docomo</option>
																	<option value="AX">Reliance</option>
														
																
																	<option value="AX">Vodafone</option>
																	
																</select>
															</div>	
														</div>
														
													<!--</div>-->
													<!--<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>
														<li><button type="button" class="mob-btn btn btn-primary btn-info-full next-step">Next</button></li>
													</ul>-->
												<!--</div>-->
												<!--<div class="tab-pane" role="tabpanel" id="step4">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/mobile.png" alt="" />
														</div>-->
														<div class="mobile-right ">
															<h4> Circle?</h4>
															<!--<div class="map-image">
																<img src="images/map.png" alt="" />-->
															</div>
															<div class="section_room">
																<select id="country" onchange="change_country(this.value)" class="frm-field required">
																	<option value="null">Andhra Pradesh</option>
																	<option value="null">Assam</option>         
																	<option value="AX">Bihar</option>
																	<option value="AX">Chennai</option>
																	<option value="AX">Delhi</option>
																	<option value="AX">Gujarat</option>
																	<option value="AX">Haryana </option>
																	<option value="AX">Himachal Pradesh</option>
																	<option value="AX">Karnataka</option>
																	<option value="AX">Madhya Pradesh</option>
																	<option value="AX">Mumbai</option>
																	<option value="AX">Tamil Nadu</option>
																	<option value="AX">Uttar Pradesh</option>
																</select>
															</div>	
														<!--</div>
														
													</div>
													<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>
														<li><button type="button" class="mob-btn btn btn-primary btn-info-full next-step">Next</button></li>
													</ul>
												</div>-->
												<div class="tab-pane" role="tabpanel" id="step5">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<!--<img src="images/mobile.png" alt="" />-->
														</div>
														<div class="mobile-right ">
															<h4>Amount</h4>
															<div class="mobile-rchge">
																<input type="text" value="amount" name="amount" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '10';}" required>	
															</div>
															<div class="mobile-rchge">
																<a href="single.php">VIEW PLANS</a>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<ul class="list-inline pull-right">
														<!--<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>-->
														<li><input type="submit" class="mob-btn btn btn-primary btn" value="FINISH" name="submit"></li>
													</ul>
												</div>	
												<div class="clearfix"></div>
											</div>
										</form>
									</div>
								</section>
						</div>
					</div>
				</div>
			</div>
			<!-- //mobile -->
			<!-- Dth -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
								<section>
									<div class="wizard">
										<div class="wizard-inner">
											<ul class="nav nav-tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="Step 6">
														<span class="round-tab">
															<i class="glyphicon glyphicon-folder-open"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" title="Step 7">
														<span class="round-tab">
															<i class="glyphicon glyphicon-pencil"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" title="Step 8">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
													</a>
												</li>
												
											</ul>
										</div>
										<form role="form">
											<div class="tab-content">
												<div class="tab-pane active" role="tabpanel" id="step6">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/dth.png" alt="" />
														</div>
														<div class="mobile-right ">
															<h4>Pay your DTH bill. Which operator?</h4>
															<div class="section_room">
																<select id="country" onchange="change_country(this.value)" class="frm-field required">
																	<option value="null">Select DTH Operator</option>
																	<option value="null">Dish TV</option>  
																	<option value="null">Sun Direct</option> 
																	<option value="AX">Reliance</option>
																	<option value="AX">Airtel</option>
																</select>
															</div>
														</div>
													</div>
													<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-primary next-step">Next</button></li>
													</ul>
												</div>
												<div class="tab-pane" role="tabpanel" id="step7">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/dth.png" alt="" />
														</div>
														<div class="mobile-right">
															<h4>What's your DTH Number?</h4>
															<div class="dth-rchge">
																<input type="text" value="Enter Smart Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Smart Card Number';}" required="">	
															</div>
														</div>
													</div>
													<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>
														<li><button type="button" class="mob-btn btn btn-primary next-step">Next</button></li>
													</ul>
												</div>
												<div class="tab-pane" role="tabpanel" id="step8">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/dth.png" alt="" />
														</div>
														<div class="mobile-right ">
															<h4>How Much To Recharge?</h4>
															<div class="dth-rchge">
																<input type="text" value="100" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '100';}" required="">	
															</div>
														</div>
													</div>
													<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>
														<li><button type="button" class="mob-btn btn btn-primary btn-info-full" data-dismiss="modal">Finish</button></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</form>
									</div>
								</section>
						</div>
					</div>
				</div>
			</div>
			<!-- //Dth -->
			<!-- datacard -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
								<section>
									<div class="wizard">
										<div class="wizard-inner">
											<ul class="nav nav-tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#step9" data-toggle="tab" aria-controls="step9" role="tab" title="Step 9">
														<span class="round-tab">
															<i class="glyphicon glyphicon-folder-open"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step10" data-toggle="tab" aria-controls="step10" role="tab" title="Step 10">
														<span class="round-tab">
															<i class="glyphicon glyphicon-pencil"></i>
														</span>
													</a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step11" data-toggle="tab" aria-controls="step11" role="tab" title="Step 11">
														<span class="round-tab">
															<i class="glyphicon glyphicon-picture"></i>
														</span>
													</a>
												</li>
												
											</ul>
										</div>
										<form role="form">
											<div class="tab-content">
												<div class="tab-pane active" role="tabpanel" id="step9">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/usb.png" alt="" />
														</div>
														<div class="mobile-right ">
															<h4>Enter your data card number</h4>
															<label>+91</label><input type="text" class="mobile-text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
															
														</div>
													</div>
													<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-primary next-step">Next</button></li>
													</ul>
												</div>
												<div class="tab-pane" role="tabpanel" id="step10">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/usb.png" alt="" />
														</div>
														<div class="mobile-right ">
															<h4>Which operator?</h4>
															<ul class="rchge-icons">
																<li><a href="#">Airtel</a></li>
																<li><a href="#">Aircel</a></li>
																<li><a href="#">Bsnl</a></li>
																<li><a href="#">Idea</a></li>
																<li><a href="#">Vodafone</a></li>
																<li><a href="#">Reliance</a></li>
																<li><a href="#">Uninor</a></li>
															</ul>
															<div class="section_room">
																<select id="country" onchange="change_country(this.value)" class="frm-field required">
																	<option value="null">Airtel</option>
																	<option value="null">Aircel</option>         
																	<option value="AX">Bsnl</option>
																	<option value="AX">Idea</option>
																	<option value="AX">Tata Docomo</option>
																	<option value="AX">Reliance</option>
																	<option value="AX">Tata Indicom</option>
																	<option value="AX">Uninor</option>
																	<option value="AX">Vodafone</option>
																	<option value="AX">MTS</option>
																</select>
															</div>	
														</div>
														
													</div>
													<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>
														<li><button type="button" class="mob-btn btn btn-primary next-step">Next</button></li>
													</ul>
												</div>
												<div class="tab-pane" role="tabpanel" id="step11">
													<div class="mobile-grids">
														<div class="mobile-left text-center">
															<img src="images/usb.png" alt="" />
														</div>
														<div class="mobile-right ">
															<h4>How much to recharge?</h4>
															<div class="dth-rchge">
																<input type="text" value="100" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '100';}" required="">	
															</div>
														</div>
													</div>
													<ul class="list-inline pull-right">
														<li><button type="button" class="mob-btn btn btn-default prev-step">Previous</button></li>
														<li><button type="button" class="mob-btn btn btn-primary btn-info-full" data-dismiss="modal">Finish</button></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</form>
									</div>
								</section>
						</div>
					</div>
				</div>
			</div>
			<!-- //datacard -->
			
			<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									
									<div class="login-right">
										<form>
											<h3>Signin with your account </h3>
											<input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
			<!-- signup -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									
									<div class="login-right">
										<form>
											<h3>Create your account </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
<div class="content-bottom-two">
		<div class="col-md-6 content-left text-center">
			<img src="images/bbb5.png" alt="" />
		</div>
		<div class="col-md-6 content-right text-center">
			<img src="images/bbb3.png" alt="" />
		</div>
		<div class="clearfix"></div>
		<div class="btm-pos">
			<h3>Exclusive Offers</h3>
	
		</div>
</div>
<div class="footer-top">
	<div class="container">
		<div class="foo-grids">
			<div class="col-md-3 foo-grid">
				<h3>MOBILE RECHARGES</h3>
				<ul>
					<li><a href="#">Airtel</a></li>
					<li><a href="#">Aircel</a></li>
					<li><a href="#">BSNL</a></li>
					<li><a href="#">Idea</a></li>
					<li><a href="#">MTNL</a></li>
					<li><a href="#">MTS</a></li>
				</ul>
			</div>
			<div class="col-md-3 foo-grid">
				<h3>DTH RECHARGES</h3>
				<ul>
					<li><a href="#">Airtel Digital TV Recharges</a></li>
					<li><a href="#">Dish TV Recharges</a></li>
					<li><a href="#">Tata Sky Recharges</a></li>
					<li><a href="#">Reliance Digital TV Recharges</a></li>
					<li><a href="#">Sun Direct Recharges</a></li>
					<li><a href="#">Videocon D2H Recharges</a></li>
				</ul>
			</div>
			<div class="col-md-3 foo-grid">
				<h3>DATACARD RECHARGES</h3>
				<ul>
					<li><a href="#">Airtel 2G Service</a></li>
					<li><a href="#">Aircel 2G Service</a></li>
					<li><a href="#">BSNL 2G Service</a></li>
					<li><a href="#">MTS MBlaze Recharges</a></li>

					<li><a href="#">Reliance NetConnect Recharges</a></li>
				</ul>
			</div>
			<div class="col-md-3 foo-grid">
				<h3>PAYMENT OPTIONS</h3>
				<ul>
					<li>Credit Cards</li>
					<li>Debit Cards</li>
					<li>Any Visa Debit Card</li>
					<li>Direct Bank Debits</li>
					<li>Cash Cards</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
</div>

<div class="footer">
	<div class="container">
		<h2><a href="index.php"> Recharge GO</a></h2>
		
		<ul>
			<li><a class="face1" href="#"></a></li>
			<li><a class="face2"href="#"></a></li>
			<li><a class="face3" href="#"></a></li>
			<li><a class="face4" href="#"></a></li>
		</ul>
	</div>
</div>
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>