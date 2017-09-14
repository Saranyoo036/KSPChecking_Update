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
	div.tableClass {
    float:left; 
    height: 350px;
     position:relative;
     left:375;

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
 	<center><h3>รายงานการเข้าโรงเรียนวันนี้</h3></center><br>
		<center>

<div class="table-responsive tableClass" >
                <table class="table table-hover" width="800" border="1" align="center" bordercolor="#666666" style="width:200px;">
                    <tr width="200px;" class='active'>
                        <th width="150"> <div align="center">ห้อง</div></th>
                       
                    </tr>
<?php
include ("connectDB.php");
$strSQL = mysqli_query($mysqli,"SELECT * FROM class where classID != 999 and classID != 0 and classID between 100 and 299");
while ($objResult = mysqli_fetch_array($strSQL)) {

    ?>
                        <tr class='active'>
                        <td border="0"><center><a href="chartCheckin2.php?classID=<?php echo $objResult["classID"]; ?>"><?php echo $objResult["class"]; ?></a></center></td>
                        
                        </tr>
    <?php
}
?>
                </table>
            </div>

            <div class="table-responsive tableClass" >
                <table class="table table-hover" width="800" border="1" align="center" bordercolor="#666666" style="width:200px;">
                    <tr width="200px;" class='active'>
                        <th width="150"> <div align="center">ห้อง</div></th>
                        
                    </tr>
<?php
include ("connectDB.php");
$strSQL2 = mysqli_query($mysqli,"SELECT * FROM class where classID != 999 and classID != 0 and classID between 300 and 499");

while ($objResult2 = mysqli_fetch_array($strSQL2)) {

    ?>
                        <tr class='active'>
                        <td border="0"><center><a href="chartCheckin2.php?classID=<?php echo $objResult2["classID"]; ?>"><?php echo $objResult2["class"]; ?></a></center></td>
                        
                        </tr>
    <?php
}
?>
                </table>
            </div>


            <div class="table-responsive tableClass" >
                <table class="table table-hover" width="800" border="1" align="center" bordercolor="#666666" style="width:200px;">
                    <tr width="200px;" class='active'>
                        <th width="150"> <div align="center">ห้อง</div></th>
                        
                    </tr>
<?php
include ("connectDB.php");

$strSQL3 = mysqli_query($mysqli,"SELECT * FROM class where classID != 999 and classID != 0 and classID between 500 and 699");
while ($objResult3 = mysqli_fetch_array($strSQL3)) {

    ?>
                        <tr class='active'>
                        <td border="0"><center><a href="chartCheckin2.php?classID=<?php echo $objResult3["classID"]; ?>"><?php echo $objResult3["class"]; ?></a></center></td>
                        
                        </tr>
    <?php
}
?>
                </table>
            </div>
<br>
<div id="txtHint"></div>
</center>
</form>
	</body>
</html>
<?php }?>
