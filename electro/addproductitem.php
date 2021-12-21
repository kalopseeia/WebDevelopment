<?php include_once('db_connection.php'); ?>
<?php session_start(); ?>
<?php if (!isset($_SESSION['id'])) header("Location: 404.php"); ?>
<?php 


?>
<?php include_once('navbar.php'); ?> 

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">


















			<?php include_once('sidebar.php'); ?>




















			<!-- Order Details -->
			<div class="col-md-9">
				<div class="section-title text-left">
					<h3 class="title">Seller Center</h3>
					<p>More Opportunity Products</p>
				</div>
				<div class="order-details">
					<div class="billing-details" id="fontcolorstate">
						<div>
							<div class="form-group">
								<h4>Basic Information</h4>
								<p>Product Images</p>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</span>
							</div>
							<div style="margin-bottom: 3em">
								<div id="uploadtriggersa" onclick="$('sexampleInputFileupload').click()" class="form-group" style="margin-bottom: 3rem;">
									<div  style="cursor: pointer;align-content: center;text-align: center;border: 1px dotted #ccc;padding: 10% 0;width: 100%;">
										<i class="fa fa-cloud-upload" style="cursor: pointer;font-size: 30px;"></i>
										<br>
										<span>Upload | Media</span> 
										<input style="display: none;" type="file" id="kdsaorema" accept="image/png, image/jpeg">
									</div>
								</div>

								<div style="align-content: center;align-items: center;text-align: center;">
									<img style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22) ;" id="blah" src="#" alt="" />
								</div> 

							</div>

							<div style="color: #2B2D42">
								<div class="form-group">
									<label  class="form-check-label" for="login">Product Name</label>
									<input id="firstnamestate" minlength="3" maxlength="50" type="text" name="firstname" class="input" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required>
								</div>

								<div class="form-group">
									<label  class="form-check-label" for="login">Category</label>
									<input id="firstnamestate" minlength="3" maxlength="50" type="text" name="firstname" class="input" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required>
								</div>
							</div>

							<script type="text/javascript">
								document.getElementById("uploadtriggersa").onclick = function() {
									document.getElementById("kdsaorema").click();
									console.log("Nice");		
								}


								kdsaorema.onchange = evt => {
									const [file] = kdsaorema.files
									if (file) {
										blah.src = URL.createObjectURL(file)
									}
								}
							</script>
							<!-- 

							<script type="text/javascript">
								// document.getElementById("uploadtrigger").onclick = function() { 
								// 	$("#korema").trigger('click');
								// }
								// $("#uploadtriggersa").click(function(e){
								// 	e.preventDefault();
								// 	$("#kdsaorema").trigger('click');
								// });

								$("#uploadtriggersa").click(function() {
							        // creating input on-the-fly
							        var input = $(document.getElementById("kdsaorema"));
							        input.attr("type", "file");
							        // add onchange handler if you wish to get the file :)
							        input.trigger("click"); // opening dialog
							        return false; // avoiding navigation
							    });
							</script> -->

						</div>

					</div>

				</div>
			</div>
			<!-- /Order Details -->











		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->



<?php include_once('footer.php'); ?>