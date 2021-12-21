<?php include_once('../db_connection.php'); ?>
<?php 

if (isset($_REQUEST["sellloadimageadd"])) {



	$product_name = $_REQUEST["product_name"];
	$product_name = mysqli_real_escape_string($CONN, $product_name);
	$product_name = htmlspecialchars($product_name, ENT_QUOTES, "UTF-8");

	$SQL = "INSERT INTO `products` (`id`, `id_users`, `products_name`) VALUES (NULL, '4', '".$product_name."')";


	if (mysqli_query($CONN, $SQL)) {
		if (!empty($_REQUEST['load_image_name'])) {
			echo "<font color=\"green\">Product Created!</font>"; 
			foreach($_REQUEST['load_image_name'] as $load_image_item) {
				$SQL = "INSERT INTO `products_image` (`id`, `id_users`, `id_products`, `image_name`) VALUES (NULL, '4', '4', '".$load_image_item."');";
				if (mysqli_query($CONN, $SQL)) {
					echo $load_image_item;
				}
			}
		} else {
			echo "Empty";
		}
	}
}


 ?>
<?php include_once('header.php'); ?>
<?php include_once('navbar.php'); ?>


<div class="section"> 
	<div class="container">
		





		<div class="row mb-4">
			<!-- Order Details -->
			<div class="col">
				<div class="section-title text-left">
					<h3 class="title">Seller Center</h3>
					<p>More Opportunity Products</p>
				</div>

				<form>
					<div class="card text-center btn" onclick="document.getElementById('imageupload').click()">
						<div class="card-body">  
							<p class="card-text"><small class="text-muted">Upload | Media</small></p>
						</div>
					</div>
					<input class="d-none" type="file" id="imageupload" accept="image/png, image/jpeg">
				</form>

			</div>
			<!-- /Order Details -->
		</div>






		<!-- Modal -->
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>



					<div class="modal-body">
						<div class="img-container">
							<div class="row">
								<div class="col-md-9">
									<img src="" id="sample_image" />
								</div>
								<div class="col-md-3">
									<div class="preview"></div>
								</div>
							</div>
						</div>
					</div>


					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="crop">Crop</button>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->






		<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="POST">
			<div class="overflow-auto text-nowrap">

 
				<div class="d-inline-block sb-image-wrap">
					<div class="position-relative text-center">
						<img src="upload/upload-cloud-flat.png" style="height: 100px;" alt="" class="img-thumbnail rounded container-image">
					</div> 
				</div>
 

			</div> 



			<div class="col-12 mb-4">
				<label for="product_name" class="form-label">Product Name</label>
				<input name="product_name" type="text" class="form-control" id="product_name" minlength="4" maxlength="50" onkeypress="return /[0-9a-zA-Z ]/i.test(event.key)" required>
				<div class="invalid-feedback">
					Product Name.
				</div>
			</div>


			<button name="sellloadimageadd" type="submit" class="btn btn-primary">Save</button>
		</form>








	</div>
</div>





<script type="text/javascript"> 
	var NumberOfClicks = 0;
	function Delete(button) {

		var myobj = document.getElementById(button);
		console.log(myobj);

		var parent = button.parentNode;
		console.log(parent);
		var grand_father = parent.parentNode;
		console.log(grand_father);
		parent.remove();

		// grand_father.removeChild(parent);
	}

	$(document).ready(function(){

		var $modal = $('#staticBackdrop');
		var image = document.getElementById('sample_image');
		var cropper;

		$('#imageupload').change(function(event){
			var files = event.target.files;

			var done = function(url){
				image.src = url;
				$modal.modal('show');
			};

			if(files && files.length > 0)
			{
				reader = new FileReader();
				reader.onload = function(event)
				{
					done(reader.result);
				};
				reader.readAsDataURL(files[0]);
			}
		});

		$modal.on('shown.bs.modal', function() {
			cropper = new Cropper(image, {
				aspectRatio: 1,
				viewMode: 1,
				preview:'.preview'
			});
		}).on('hidden.bs.modal', function(){
			cropper.destroy();
			cropper = null;
		});

		$('#crop').click(function(){
			canvas = cropper.getCroppedCanvas({
				width:400,
				height:400
			});

			canvas.toBlob(function(blob){
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
				reader.onloadend = function(){
					var base64data = reader.result;
					NumberOfClicks += 1; 

					$.ajax({
						url:'upload.php',
						method:'POST',
						data:{ 
							image:base64data,
							NumberOfClicks:NumberOfClicks
						},
						success:function(data)
						{ 
							$(data).insertBefore(".sb-image-wrap:first");
							$modal.modal('hide');
							// $('#uploaded_image').attr('src', data);
						}
					});
				};
			});
		});

	});
</script>



<?php include_once('footer.php'); ?>