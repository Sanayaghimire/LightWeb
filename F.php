
<!DOCTYPE html> 
<html>
<head>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="header.css">

<script type="text/javascript">

	    	$(function(){
		
			$(document.body).on('click', '.changeType' ,function(){
				$(this).closest('.phone-input').find('.type-text').text($(this).text());
				$(this).closest('.phone-input').find('.type-input').val($(this).data('type-value'));
			});
			
			$(document.body).on('click', '.btn-remove-phone' ,function(){
				$(this).closest('.phone-input').remove();
			});
			
			
			$('.btn-add-phone').click(function(){

				var index = $('.phone-input').length + 1;
				
				$('.phone-list').append(''+
						'<div class="input-group phone-input">'+
							'<input type="number" name="phone['+index+'][number]" value="" class="form-control" placeholder="+1 (999) 999 9999" />'+
							'<input type="hidden" name="phone['+index+'][type]" class="type-input" value="'+index+'" />'+
							'<span class="input-group-btn">'+
								'<button class="btn btn-danger btn-remove-phone" type="button"><span class="glyphicon glyphicon-remove"></span></button>'+
							'</span>'+
						'</div>'
				);

			});
			
		});
</script>




	
</head>

<body>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="header.css">




<div class="container">



<div class="con">
	<div class="logo">
		<img src="img/logo.png" alt="">
</div>

		
		<div class="main">
		<div class="light">LIGHTWEB </div>
		<div class="group">  GROUP</div>
		
		</div>
		<div class="info">
	   IT Solution and Services <br>
	   Gangabu, Kathmandu <br>
	   </div>
	   <div class="cont">
	   9861584767 ,9813272728<br>
	   info@lightwebgroup.com
	   </div>
</div>


	<div class="page-header">
		<h3>Employee Details</h3>
	</div>



	

	<form onsubmit="myPage.php" class="form-horizontal" method="Post" action="myPage.php">
		<div class="form-group">



			<label class="col-sm-2 control-label">First Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="fname">
			</div>
<br><br><br>
			<label class="col-sm-2 control-label">Middle Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="mname">
			</div>
<br><br><br>
			<label class="col-sm-2 control-label">Last Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="lname">
			</div>
<br><br><br>
			<label class="col-sm-2 control-label">Email Address</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" name="email">
			</div>
<br><br><br>
			<label class="col-sm-2 control-label">Permanent Address</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="paddress">
			</div>
<br><br><br>

			<label class="col-sm-2 control-label">Temporary Address</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="taddress">
			</div>
			<br><br><br><br>

				<label class="col-sm-2 control-label" name="gender">Gender</label>
			<div class="col-sm-10">
				<input type="radio"  name="gender" value="Male"> Male <br/>
				<input type="radio"  name="gender" value="Female"> Female <br/>
				<input type="radio"  name="gender" value="Other"> Other <br/>
				<br/>
			</div>
		<label class="col-sm-2 control-label">Education</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="education">
				<br/>
			</div>
		<br>


			<label class="col-sm-2 control-label">College</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="college">
				<br/>
			</div>


				<label class="col-sm-2 control-label">Working Field</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="workingfield">
				<br/>
			</div>
			<br/>
		

			<label class="col-sm-2 control-label" name="maritalStatus" >Marital Status</label>
			<div class="col-sm-10">
				<input type="radio"  name="maritalStatus" value="Married">Married <br/> 
				<input type="radio"  name="maritalStatus" value="Unmarried">Unmarried<br/>
				<input type="radio"  name="maritalStatus" value="Divorced">Divorced<br/>
				<br/><br/>
			</div>
			<br><br><br>


			<label class="col-sm-2 control-label">Admit Date</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" name="admitdate">
				<br>
			</div>
			


			<label class="col-sm-2 control-label">Choose a Profile : </label>
			<div class="col-sm-10">
				<input type="file" class="img" name="image" >
			</div>
			<br><br><br>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Contact Number</label>
			<div class="col-sm-10">
			
				<div class="phone-list">
				
					<div class="input-group phone-input">
						<!-- <span class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="type-text">Type</span> <span class="caret"></span></button> -->
<!-- 							<ul class="dropdown-menu" role="menu">
								<li><a class="changeType" href="javascript:;" data-type-value="NTC">NTC</a></li>
								
								<li><a class="changeType" href="javascript:;" data-type-value="Ncell">NCELL</a></li>
							</ul> -->
						<!-- </span> -->
						<!-- <input type="hidden" name="phone[1][type]" class="type-input" value="" /> -->
						<!-- <input type="hidden" name="type[]" class="type-input" value="" /> -->
						<input type="Number" name="phone[1][number]" class="form-control" placeholder="+1 (999) 999 9999" />
					</div>
					
				</div>

				
				
				<button type="button" class="btn btn-success btn-sm btn-add-phone"><span class="glyphicon glyphicon-plus"></span> Add Phone</button>
			</div>
				
			<button type="submit" class="button" onclick="myfunction" >Print</button>
		</div>
		
	</form>
    <hr>
    
</div>





</body>
</html>