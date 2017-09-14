<?php session_start(); ?>
<?php
if (!$_SESSION["uname"]) {  //check session
    Header("Location: Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
} else {
    ?>
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
        <div class="abcd">
            <body background="/images/bg.jpg">
                <!-- ล็อคเอ้าท์ -->
                <div align="right" class="a" ><br>
                    <table border="1" bordercolor="#000000" cellpadding="5">
                        <tr>
                            <td>
                        <center><font color='#003366'> ลงชื่อเข้าใช้โดยรหัส :
                            <?php echo($_SESSION['userID']); ?><br>
                            ประเภทผู้ใช้งาน : <?php echo($_SESSION['typeUser']); ?> </font>
                            <?php //session_destroy();?>
                            <a href="logout.php"><font color="#CC0000">ออกจากระบบ</font></a></center>
                        </tr></td>
                    </table>
                    <hr>

                </div> <!-- จบล็อคเอ้าท์ -->

                <div align="right">
                    <a href="teacherpage.php"><button type="button" class="btn btn-primary"><font color="#000000">หน้าหลัก</font></button></a>	&nbsp;

                </div>
                <br>
                <br>
<form method="post" action="confirmSubject.php">
		<center><h3>เพิ่มรายวิชาสอน</h3><center>
		<center><table >
		<tr>
        <td width="90px;"><label for="ex3">รหัสวิชา :</label></td>
        <td width="400px;"><input class="form-control"  type="text" name="subjectID"></td>
        </tr><tr><td>&nbsp;</td></tr>
        <tr>
		<td><label for="ex3">วิชา :</label></td>
		<td><input class="form-control"  type="text" name="subject"></td>
		</tr><tr><td>&nbsp;</td></tr>
		<tr>
		<td><label for="ex3">ห้องเรียน :</label></td>
		<td><select class="form-control" name="class" style="width: 200px">
					<option value="">เลือกห้องเรียน</option>
						<?php
							include ("connectDB.php");
							$strSQL = mysqli_query($mysqli,"SELECT * FROM class");
							//$objResult = mysqli_fetch_array($strSQL);
									while($objResult = mysqli_fetch_array($strSQL)){
						?>
					<option value="<?php echo $objResult["class"];?>"><?php echo "ม.".$objResult["class"];?></option>
			 <?php
			 }
			 ?>
		 </select></td>
		 </tr><tr></tr>
		 </table>
		  <br>
				<button type="submit" class="btn btn-success">ตกลง</button></center>

			
</form>

	</body>

</html>
<?php }?>
