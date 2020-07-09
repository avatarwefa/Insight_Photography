<?php 
include "config.php";
if(!isset($_GET["code"])){
	exit("can't find page");
}
$code = $_GET["code"];
$getEmailQuery = mysqli_query($con,"SELECT email FROM resetPassword WHERE code = '$code'");
if(mysqli_num_rows($getEmailQuery) == 0){
	exit("can't find page");

}


if(isset($_POST["password"])){
	$pw = $_POST["password"];
	$pw = md5($pw);

	$row = mysqli_fetch_array($getEmailQuery);
	$email = $row["email"];
	$query = mysqli_query($con,"UPDATE user SET password = '$pw' WHERE email = '$email'");

	if($query){
		$query = mysqli_query($con,"DELETE FROM resetPassword WHERE code = '$code'");
		echo "<script>
		alert('Password Updated!');
		window.location.href='../pages/index.php';
		</script>";
	}
	else{
		echo "<script>
		alert('Something went wrong!');
		window.location.href='../pages/index.php';
		</script>";
	}
}
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style type="text/css">
	.form-gap {
		padding-top: 70px;
	}
</style>
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="text-center">
						<h3><i class="fa fa-lock fa-4x"></i></h3>
						<h2 class="text-center">Update Password?</h2>
						<p>You can update your password here.</p>
						<div class="panel-body">

							<form id="register-form" role="form" autocomplete="off" class="form" method="post">

								<!-- <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
										<input id="email" name="email" placeholder="email address" class="form-control"  type="email">
									</div>
								</div>
								<div class="form-group">
									<input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
								</div>

								<input type="hidden" class="hide" name="token" id="token" value="">  -->
								<input type="password" name="password" placeholder="New Password">
								<br>
								<br>
								<div class="form-group">
									<input class="btn btn-primary btn-block" type="submit" name="submit" value="Update Password">
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>