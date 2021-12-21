<!DOCTYPE html>
<html>
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Name" name="name">
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Phone:</label>
			<input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
		</div>
		<div class="form-group" >
			<label for="pwd">City:</label>
			<select name="city" id="city" class="form-control">
				<option value="">Select</option>
				<option value="Delhi">Delhi</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Pune">Pune</option>
			</select>
		</div>
		<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
	</form>
</div>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var city = $('#city').val();

		console.log(name)
		console.log(email)
		console.log(phone)
		console.log(city)

		if(name!="" && email!="" && phone!="" && city!=""){
			$.ajax({
				url: "insertRegister.php",
				type: "POST",
				data: {
					name: name,
					email: email,
					phone: phone,
					city: city				
				},
				cache: false,
				success: function(data){ 
					var data = JSON.parse(data);
					console.log("var1");
					if(data.statusCode==200){
						console.log("200");
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(data.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>
