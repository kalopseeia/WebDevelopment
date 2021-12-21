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



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	



	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" rel="stylesheet">



	<link href="https://unpkg.com/dropzone/dist/dropzone.css" rel="stylesheet"/>
	<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
	<script src="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone.js"></script>
	<script src="https://unpkg.com/cropperjs@1.5.12/dist/cropper.js"></script>
	

	<title></title>
	<style type="text/css"> 
		img {
			display: block;
			max-width: 100%;
		}
		.preview {
			overflow: hidden;
			width: 160px; 
			height: 160px;
			margin-left: 40px;
			border: 1px solid red;
		}
		.modal-lg{
			max-width: 1000px !important;
		}
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
		.-nHXdi {
			-webkit-user-select: none; 
			-webkit-tap-highlight-color: transparent;
		}
		.-PwVcI {
			width: 1em;
			height: 1em;
			margin-top: 0.25em;
			vertical-align: top;
			background-color: #fff;
			background-repeat: no-repeat;
			background-position: center;
			background-size: contain;
			border: 1px solid rgba(0,0,0,.25);
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			-webkit-print-color-adjust: exact;
		}
		.-PwVcI[type=checkbox] {
			border-radius: 0.25em;
		}
		#c-r-c-gender {
			padding-top: 7px!important;
			padding-bottom: 5px!important; 
		} 
		.-cRHiL {
			padding-right: 25px!important;
		}
	</style>
</head>
<body>