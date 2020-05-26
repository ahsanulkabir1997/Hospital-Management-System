<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<style type="text/css">
	#ab1:hover{
		cursor:pointer;
	}
	#ab2{
		width:100%;
	}

</style>


<body style ="background:url('img/2.jpg') no-repeat; background-size:cover;">


<div class="container" style="width:400px; margin-top:100px;">
	<div class="card">
	<img src="img/3.jpg" class="card-img-top" id="ab2" alt="" />
		<div class="card-body">
		<form class="form-group" action="func.php" method="post">
			<label for="">Username :</label><br>
			<input type="text" name="username" class="from-control" placeholder="enter username" /> <br><br>
			<label for="">Password :</label><br>
			<input type="password" name="password" class="from-control" placeholder="enter password" /> <br><br>
		
		<input type="submit" name="login_submit" id="ab1" class="btn btn-primary"/>
		</form>
		</div>
	</div>
</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>