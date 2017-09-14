
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
	</style>

<br><br>

             
            <div class="table-responsive">
                <table class="table" width="800" border="1" align="center" bordercolor="#666666" >
                    <tr>
                        <td width="100" align="center" bgcolor="#CCCCCC"><strong><font color='#003366'>รหัสนักเรียน</font></strong></td>
                        <td width="200"align="center" bgcolor="#CCCCCC"><strong><font color='#003366'>ชื่อ - สกุล</font></strong></td>
                        <td width="200"align="center" bgcolor="#CCCCCC"><strong><font color='#003366'>ห้อง</font></strong></td>
                        <td width="200" align="center" bgcolor="#CCCCCC"><strong><font color='#003366'>มาสาย(ครั้ง)</font></strong></td>

                    </tr>
                    <?php
//connect db
                    include ("connectDB.php");

                    date_default_timezone_set("Asia/Bangkok");
                    $date = date("Y-m-d");


                    $strSLQ2 = "SELECT (count(checkinout.studentID)) as countLate,checkinout.studentID,studentName,studentLastname,class from checkinout,student,typecheckinout,class
                    where student.studentID=checkinout.studentID
                    and student.classID='" . $_GET['classID'] . "'
                    and typecheckinout.typeCheckInID=checkinout.typeCheckInID
                    and class.classID=student.classID
                    and checkinout.typeCheckInID='60002' group by checkinout.studentID ";

                    //echo $strSLQ2;
                    $result = mysqli_query($mysqli, $strSLQ2);  //เรียกข้อมูลมาแสดงทั้งหมดaa
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr class='active'>";
                        echo "<td align='center'><font color='#จจ0000'>" . $row["studentID"] . "</font></font></td>";
                        echo "<td align='center'><font color='#003366'>" . $row["studentName"] . "&nbsp" . $row['studentLastname'] . "</font></td>";
                        echo "<td align='center'><font color='#จจ0000'>" . $row["class"] . "</font></td>";
                        echo "<td align='center'><font color='#จจ0000'>" . $row["countLate"] . "</font></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div><div>
                <br><center>
                    <a href="ceopage.php"><button type="button" class="btn btn-success"><font color="#000000">เสร็จสิ้น</font></button></a> &nbsp;
                    <a ><button type="button" onclick="javascript:window.print()" class="btn btn-warning"><font color="#000000">พิมพ์</font></button></a>   &nbsp;
                </center></div><br><br>

	</body>

</html>
<?php }?>
