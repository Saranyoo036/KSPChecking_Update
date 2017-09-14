<?php session_start();?>
<?php

if (!$_SESSION["uname"]){  //check session

	  Header("Location: Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>
<html>
	<head>
		<title>KSP CHECKING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script>

                function showUser(str) {
                    if (str == "") {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    }
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    }

                    xmlhttp.open("GET", "ReportAbsentDaily2.php?classID=" + str, true);
                    xmlhttp.send();
                }
            </script>

	</head>
	<style>
	div.abcd{
		font-family: "FontAwesome",sans-serif;

	}div.abcd img{
		border-radius:5px;
	}div.abcd h1,h2,h3,h4,h5{
		display: block;
		font-weight: 600;
		letter-spacing: 0.2rem;
		line-height: 1.5;
		margin: 0 0 1rem 0;
		text-transform: uppercase;
	}
	</style>
<div class="abcd">
	<body background="/images/bg.jpg">
<!-- ล็อคเอ้าท์ -->
    <div align="right" class="a" ><br>
      <table border="1">
      		<td>
    		  <center> ลงชื่อเข้าใช้โดยรหัส :
    			<?php echo($_SESSION['userID']);?><br>
          ประเภทผู้ใช้งาน : <?php echo($_SESSION['typeUser']);?>
    			<?php //session_destroy();?>
    			<a href="logout.php"><font color="#CC0000">ออกจากระบบ</font></a></center>
        </td>
        </table>
				<br><hr>

		</div> <!-- จบล็อคเอ้าท์ -->

<div align="right">
	<a href="chartAB.php"><button type="button" class="btn btn-success"><font color="#000000">กราฟ</font></button></a>	&nbsp;
	<a href="ceopage.php"><button type="button" class="btn btn-primary"><font color="#000000">หน้าหลัก</font></button></a>	&nbsp;

</div>
    </div> <!-- จบล็อคเอ้าท์ -->
<br><br>
<form method="post" action="" enctype="multipart/form-data">

		<?php
		//connect db
		date_default_timezone_set("Asia/Bangkok");
		include ("connectDB.php");
				?>
 	<center><h3>รายงานการขาดเรียน</h3></center>
		<center>
		<table>
		<tr>
		<td width="110px;"><label for="ex3">ห้องเรียน :</label></td>
		<td width="400px;"><select  class="form-control" onchange="showUser(this.value)" name="classID" >
			<option value="">เลือกห้องเรียน</option>
				<?php
					include ("connectDB.php");
					$strSQL = mysqli_query($mysqli,"SELECT * FROM class where classID != 999 and classID != 0");
					//$objResult = mysqli_fetch_array($strSQL);
							while($objResult = mysqli_fetch_array($strSQL)){
				?>
			<option value="<?php echo $objResult["classID"];?>"><?php echo "ม.".$objResult["class"];?></option>
	 <?php
	 }
	 ?>
 </select> </td>
 </tr>
</table>

<div id="txtHint"></div>
</center>
</form>

	</body>

</html>
<?php }?>
