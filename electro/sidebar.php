

<div class="col-md-3" id="side-left-cd">
	<!-- Billing Details -->
	<div class="billing-details">
		<div class="form-group">
			<div class="footer"> 
				<h4 class="title"><i class="fa fa-user" aria-hidden="true"></i> My Account</h4>
				<!-- <h3 class="footer-title">Categories</h3> -->
				<ul class="main-nav footer-links">
					<li hidden="true" disabled><a href="#" disabled> </a></li>
					<li <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; if(strpos($url, 'profile', 0)) { echo 'class="active"'; } ?>><a href="profile.php">Profile</a></li>
					<li><a href="#">Address</a></li>
					<li><a href="#">Wallet</a></li>
					<li><a href="#">Electro Voucher</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Billing Details -->

	<!-- Billing Details -->
	<div class="billing-details">
		<div class="form-group">
			<div class="footer"> 
				<h4 class="title"><i class="fa fa-truck" aria-hidden="true"></i> My Orders</h4>
				<!-- <h3 class="footer-title">Categories</h3> -->
				<ul class="main-nav footer-links">
					<li hidden="true" disabled><a href="#" disabled> </a></li>
					<li><a href="#">Orders Updates</a></li>
					<li><a href="#">Retuns</a></li>
					<li><a href="#">Cancellations</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Billing Details -->

	<!-- Billing Details -->
	<div class="billing-details">
		<div class="form-group">
			<div class="footer"> 
				<h4 class="title"><i class="fa fa-bell" aria-hidden="true"></i> My Notifications</h4>
				<!-- <h3 class="footer-title">Categories</h3> -->
				<ul class="main-nav footer-links">
					<li hidden="true" disabled><a href="#" disabled> </a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="#">Comment</a></li>
					<li><a href="#">Ratings</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Billing Details -->

	<!-- Billing Details -->
	<div class="billing-details">
		<div class="form-group">
			<div class="footer"> 
				<h4 class="title"><i class="fa fa-bell" aria-hidden="true"></i> My Products</h4>
				<!-- <h3 class="footer-title">Categories</h3> -->
				<ul class="main-nav footer-links">
					<li hidden="true" disabled><a href="#" disabled> </a></li>
					<li <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; if(strpos($url, 'addproductitem', 0)) { echo 'class="active"'; } ?>><a href="addproductitem.php">Add Products</a></li> 
				</ul>
			</div>
		</div>
	</div>
	<!-- /Billing Details -->

</div>


