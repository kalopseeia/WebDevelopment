<?php 

if (isset($_REQUEST["sellloadimageadd"])) {
	echo "shitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshitshit";
 
	foreach($_POST['load_image_name'] as $item)
	{
		echo "$item <br>";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	<link href="css/fontawesome.css" rel="stylesheet">
	<link href="css/brands.css" rel="stylesheet">
	<link href="css/solid.css" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" rel="stylesheet">



	<link href="https://unpkg.com/dropzone/dist/dropzone.css" rel="stylesheet"/>
	<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
	<script src="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone.js"></script>
	<script src="https://unpkg.com/cropperjs@1.5.12/dist/cropper.js"></script>
	
	<title></title>
	<style type="text/css">
		.container-image {
			opacity: 1; 
			transition: .5s ease;
			backface-visibility: hidden;
		}
		.container-image-text {
			transition: .10s ease;
			opacity: 0;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			text-align: center;
		}	
		#container-image-parent:hover .container-image {
			opacity: 0.3;
		}
		#container-image-parent:hover .container-image-text {
			opacity: 1;
		}
		.container-image-plain-text { 
			color: grey;
			font-size: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div>
			<header class="d-flex justify-content-center py-3">
				<ul class="nav nav-pills">
					<li class="nav-item"><a href="#" class="nav-link">SELL ON ELECTRO</a></li>
					<li class="nav-item"><a href="help.php" class="nav-link">HELP</a></li>
					<li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
					<li class="nav-item"><a href="register.php" class="nav-link">REGISTER</a></li>
				</ul>
			</header>
		</div>
		<div>
			<header class="py-3 mb-4 border-bottom">

				<div class="row">
					<div class="col">
						<a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
							<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
							<span class="fs-4">BOOTSTRAP</span>
						</a>
					</div>
					<div class="col">
						<form class="col-12 col-lg-auto mb-3 mb-lg-0">
							<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
						</form>
					</div>
					<div class="col">

					</div>
				</div>
			</header>



		</div>
		<div>
			<nav class="py-2 bg-light border-bottom">
				<div class="container d-flex flex-wrap">
					<ul class="nav me-auto">
						<li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">HOME</a></li>
						<li class="nav-item"><a href="#" class="nav-link link-dark px-2">HOT DEALS</a></li>
						<li class="nav-item"><a href="#" class="nav-link link-dark px-2">CATEGORIES</a></li>
						<li class="nav-item"><a href="#" class="nav-link link-dark px-2">LAPTOPS</a></li>
						<li class="nav-item"><a href="#" class="nav-link link-dark px-2">SMARTPHONES</a></li>
					</ul> 
				</div>
			</nav>
		</div>
	</div>

	<div class="section"> 
		<div class="container">



			<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="POST">
				<input name="load_image_name[]" value=""  hidden />
				<input name="load_image_name[]" value="sad1" hidden />
				<input name="load_image_name[]" value="sad2"  />
				<input name="load_image_name[]" value="sad3"  />
				<input name="load_image_name[]" value="sad4"  />
				<input name="load_image_name[]" value="sad5"  />
				<input name="load_image_name[]" value="sad6"  />
				<input name="load_image_name[]" value="sad7"  />
				<input name="load_image_name[]" value="sad8"  />
				<input name="load_image_name[]" value="sad9"  />
				<input name="load_image_name[]" value="sad10"  />
				<input name="load_image_name[]" value="sad11"  />


				<button name="sellloadimageadd" type="submit" class="btn btn-primary">Primary</button>
			</form>









		</div>
	</div> 
	<?php include_once('footer.php'); ?>