	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	

	<script type="text/javascript">

		$(function() {
			$('#users_birthdate').datepicker({
				format: 'yyyy-mm-dd'
			});
		}); 


		$(document).ready(function(){
			$("#users_country").on('change', function(){
				var countryID=$(this).val();
				$.ajax({
					method: "POST",
					url: "ajax.php",
					data: {id:countryID},
					dataType: "html",
					success:function(data) {
						$("#users_state").html(data); 
						// console.log(data);
					}
				});
			});
		});


		$(document).ready(function(){
			$("#users_state").on('change', function(){
				var stateID=$(this).val();
				$.ajax({
					method: "POST",
					url: "ajax.php",
					data: {stateID:stateID},
					dataType: "html",
					success:function(data) {
						$("#users_cities").html(data); 
						// console.log(data);
					}
				});
			});
		});


	</script>
	
</body>
</html>