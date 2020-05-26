<?php
	
	$adate = $_POST['adate'];	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$middlename = $_POST['middlename'];
	$gender = $_POST['gender'];
	$dateofbirth = $_POST['dateofbirth'];
	$mobile1 = $_POST['mobile1'];
	$mobile2 = $_POST['mobile2'];
	$email = $_POST['email'];
	$streetno = $_POST['streetno'];
	$streetname = $_POST['streetname'];
	$area = $_POST['area'];
	$thana = $_POST['thana'];
	$district = $_POST['district'];
	$pstreetno = $_POST['pstreetno'];
	$pstreetname = $_POST['pstreetname'];
	$parea = $_POST['parea'];
	$pthana = $_POST['pthana'];
	$pdistrict = $_POST['pdistrict'];
	$profession = $_POST['profession'];
	$cabinward = $_POST['cabinward'];
	$name = $_POST['name'];
	$relation = $_POST['relation'];
	
	
	if(!empty($adate) || !empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($gender) || !empty($dateofbirth) || !empty($mobile1) || !empty($mobile2) || !empty($email) || !empty($streetno) || !empty($streetname) || !empty($area) || !empty($thana) || !empty($district) || !empty($pstreetno) || !empty($pstreetname) || !empty($parea) || !empty($pthana) || !empty($pdistrict) || !empty($profession) || !empty($cabinward) || !empty($name) || !empty($relation) || ){
		
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "hmsdb";
		
		$conn =new mysqli($host, $dbUsername, $dbPassword, $dbname);	
		
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
	}
	else{
		$INSERT = "INSERT Into admissionform(adate, firstname, middlename, lastname, gender, dateofbirth, mobile1, mobile2, email, streetno, streetname, area,thana,district,pstreetno, pstreetname, parea,pthana,pdistrict, profession, cabinward, name, relation) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
		
		$stmt = $con->prepare($INSERT);
		$stmt->bind_param("sssssssssissssissssssss",$adate, $firstname, $gender, $dateofbirth, $mobile1, $mobile2, $email, $streetno, $streetname, $area, $thana, $district,$pstreetno, $pstreetname, $parea, $pthana,$pdistrict, $profession, $cabinward, $name, $relation );
		$stmt=>execute();
		echo "Patient Admission is Sucessful"; 
	}
	$stmt->close();
	$con->close();	
		
	}
	else{
		echo "All Field are Reuired";
		die();  
	}
	
?>