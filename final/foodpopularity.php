<?php
include 'includes/connect.php';
include 'includes/wallet.php';

	if($_SESSION['customer_sid']==session_id())
	{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Order Food</title>

  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	
	
	<!-- Bootstrap CSS -->
  
   <style type="text/css">
  .input-field div.error{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
  .left-alert input[type=text] + label:after, 
  .left-alert input[type=password] + label:after, 
  .left-alert input[type=email] + label:after, 
  .left-alert input[type=url] + label:after, 
  .left-alert input[type=time] + label:after,
  .left-alert input[type=date] + label:after, 
  .left-alert input[type=datetime-local] + label:after, 
  .left-alert input[type=tel] + label:after, 
  .left-alert input[type=number] + label:after, 
  .left-alert input[type=search] + label:after, 
  .left-alert textarea.materialize-textarea + label:after{
      left:0px;
  }
  .right-alert input[type=text] + label:after, 
  .right-alert input[type=password] + label:after, 
  .right-alert input[type=email] + label:after, 
  .right-alert input[type=url] + label:after, 
  .right-alert input[type=time] + label:after,
  .right-alert input[type=date] + label:after, 
  .right-alert input[type=datetime-local] + label:after, 
  .right-alert input[type=tel] + label:after, 
  .right-alert input[type=number] + label:after, 
  .right-alert input[type=search] + label:after, 
  .right-alert textarea.materialize-textarea + label:after{
      right:70px;
  }
  </style> 
</head>

<body >
	<div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

<!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="logo"></a> <span class="logo-text">Logo</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="#" class="waves-effect waves-block waves-light"><i class="mdi-editor-attach-money"><?php echo $balance;?></i></a>
                        </li>
                    </ul>					
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->


  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
				 <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="routers/logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $name;?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><?php echo $role;?></p>
                </div>
            </div>
            </li>
            <li class="bold active"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i>Food Items</a>
            </li>
			<li class="bold active"><a href="food popularity.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i>Order</a>
            </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Orders</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="orders.php">All Orders</a>
                                </li>
								<?php
									$sql = mysqli_query($con, "SELECT DISTINCT status FROM orders WHERE customer_id = $user_id;");
									while($row = mysqli_fetch_array($sql)){
                                    echo '<li><a href="orders.php?status='.$row['status'].'">'.$row['status'].'</a>
                                    </li>';
									}
									?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-question-answer"></i> Tickets</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="tickets.php">All Tickets</a>
                                </li>
								<?php
									$sql = mysqli_query($con, "SELECT DISTINCT status FROM tickets WHERE poster_id = $user_id AND not deleted;");
									while($row = mysqli_fetch_array($sql)){
                                    echo '<li><a href="tickets.php?status='.$row['status'].'">'.$row['status'].'</a>
                                    </li>';
									}
									?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>					
            <li class="bold"><a href="details.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Edit Details</a>
            </li>
			<li class="bold"><a href="details.php" class="waves-effect waves-cyan"><i class="mdi-action-info-outline"></i> Feedback</a>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
		
	  </div>
	
      <!-- END LEFT SIDEBAR NAV-->

		
		<div class="container"  data-ng-app ="signUpForm" data-ng-controller ="myCtrl">
				<div class="row">
					<div class="col-md-12">
						<h4>Food Order</h4>
							<div class="col-sm-12">
								<form action="foodpopularity.php" method="post" id="coupon_form">

									<!-- Name row -->
									<div class="form-row">
										<div class="form-group col-sm-4">
											<!-- angSalution is the selected item -->
											<label for="csalutation">Chinese</label>
												<select name="salutation" id="csalutation" class="form-control" data-ng-model="angChinese"  required>
													<!-- salutationLists is initialized once loaded -->
													<option data-ng-repeat="sal in Chinese">{{sal}}</option>
												</select>
											
										</div>

										<div class="form-group col-sm-4">
											<!-- angSalution is the selected item -->
											<label for="csalutation">Malay</label>
												<select name="salutation" id="csalutation" class="form-control" data-ng-model="angMalay"  required>
													<!-- salutationLists is initialized once loaded -->
													<option data-ng-repeat="sal in Malay">{{sal}}</option>
												</select>
											
										</div>
										
										 <div class="form-group col-sm-4">
											<!-- angSalution is the selected item -->
											<label for="csalutation">Indian</label>
												<select name="salutation" id="csalutation" class="form-control" data-ng-model="angIndian"  required>
													<!-- salutationLists is initialized once loaded -->
													<option data-ng-repeat="sal in Indian">{{sal}}</option>
												</select>
										</div>

									</div>

								</form>
							</div>
					</div>	
				</div>		

					<div class="col-sm-12">
						<div class ="row">
							<div class="col-sm-6">
							<h4>Order: </h4>

							{{angChinese}} <button type="button" class="btn btn-info btn-sm"  ng-click ="a=a+1">Add</button> <button type="button" class="btn btn-info btn-sm"   ng-click ="a=a-1">Delete</button><p>Quantity:{{a}}</p><br>
							{{angMalay}} <button  type="button" class="btn btn-info btn-sm" ng-click ="b=b+1">Add</button> <button type="button" class="btn btn-info btn-sm"   ng-click ="b=b-1">Delete</button><p>Quantity:{{b}}</p> <br> 
							{{angIndian}} <button  type="button" class="btn btn-info btn-sm" ng-click ="c=c+1">Add</button> <button type="button" class="btn btn-info btn-sm"   ng-click ="c=c-1">Delete</button><p>Quantity:{{c}}</p> <br>						
							</p>
						   <!-- <p class="text-success" data-ng-if="myForm.$valid">If your infos are right. You're all good to go !</p> -->
								<div class="form-row">
									<div class="form-group col-sm-12">
										<div class ="col-sm-6">
											  <!-- Trigger the modal with a button -->
											<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Confirm order</button>
												<!-- Modal -->
											<div class="modal fade" id="myModal" role="dialog">
												<div class="modal-dialog">
														<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Order Confirmation</h4>
														</div>
													<div class="modal-body">
														
																{{angChinese}},{{a}} <button ng-click="remove($item)" onclick="return confirm('Are you sure you want to delete this item?')">Remove</button><br> 
																{{angMalay}},{{b}}	<button ng-click="remove()" onclick="return confirm('Are you sure you want to delete this item?')">Remove</button><br>
																{{angIndian}} {{c}}	<button ng-click="remove()" onclick="return confirm('Are you sure you want to delete this item?')">Remove</button><br>
														
															
													</div>
												<div class="modal-footer">
													<input type="submit" value="submit" class="btn btn-primary my-1" ng-disabled="myForm.$invalid"/>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
								<!-- Modal -->
							</div>
						</div>
					</div>	
			</div>

	
	
 <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      
    </div>
  </footer>
    <!-- END FOOTER -->




    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>       
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
	<script src="js/CustomerOrder.js"></script>
	
</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:all-orders.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>