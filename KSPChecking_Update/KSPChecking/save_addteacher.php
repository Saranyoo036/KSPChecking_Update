<html>
		<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<center>
<?php
	include("connectDB.php");
	
	if(trim($_POST["teacherName"]) == "")
	{
		echo "กรอกชื่อ";
		exit();	
	}
	
	if(trim($_POST["teacherLastname"]) == "")
	{
		echo "กรอกนามสกุล";
		exit();	
	}	
		
	if(trim($_POST["teacherPhone"]) == "")
	{
		echo "กรอกเบอร์โทรศัทพ์";
		exit();	
	}	

	if(trim($_POST["classID"]) == "")
	{
		echo "กรอกชั้นเรียน";
		exit();	
	}	
		
	
	
	$strSQL = "SELECT * FROM teacher WHERE teacherName = '".trim($_POST['teacherName'])."' ";
	$objQuery = mysqli_query($mysqli,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo "<table>";
		    echo "<br><br><br>";
			echo "ลงทะเบียนผิดพลาด!";
			echo "<br><a href='addteacher.php'>ย้อนกลับ</a>";
			echo "</table>";
	}
	else
	{	
		
		$sqluser = mysqli_query($mysqli,"SELECT MAX(userID) as userID FROM `user`");
		$objuser = mysqli_fetch_array($sqluser);
		$strSQL = "INSERT INTO teacher (teacherName,teacherLastname,teacherPhone,classID,userID) VALUES ('".$_POST["teacherName"]."', 
		'".$_POST["teacherLastname"]."','".$_POST["teacherPhone"]."','".$_POST["classID"]."','".$objuser['userID']."')";
		$objQuery = mysqli_query($mysqli,$strSQL);
        
		
		//echo $strSQL;
		echo "<table>";
		echo "<br><br><br>";
		echo "ลงทะเบียนเสร็จสมบูรณ์!<br>";		
	
		echo "<br> Go to <a href='adminpage.html'>หน้าหลัก</a>";
		echo "</table>";
	}

?>
</center>
</html>
