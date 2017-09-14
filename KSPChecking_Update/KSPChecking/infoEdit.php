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
                    <a href="adminpage.php"><button type="button" class="btn btn-primary"><font color="#000000">หน้าหลัก</font></button></a>	&nbsp;

                </div>
                <form method="post" action="updateInfo.php">
                    <br>
    <?php
    include ("connectDB.php");
//echo "select * from teacher,user,class where teacher.userID='".$_GET['userID']."' and teacher.classID=class.classID and teacher.userID=user.userID";

    $strSQL = mysqli_query($mysqli, "select * from teacher,user,class where teacher.userID='" . $_GET['userID'] . "' and teacher.classID=class.classID and teacher.userID=user.userID");
    $objResult = mysqli_fetch_array($strSQL);
    ?>
        <center><h3>แก้ไขข้อมูลอาจารย์</h3><br>
                    <table>
                    <tr>
                        <td width="130px;" ><label for="ex3">รหัส :</label></td>
                        <td><input class="form-control"   type="text" value="<?php echo $objResult['teacherID'] ?>" name="teacherID" disabled></td>
                    </tr><tr><td>&nbsp;</td></tr>
                    <tr>
                        <td><label for="ex3">ชื่อ :</label></td>
                        <td><input class="form-control"  type="text" value="<?php echo $objResult['teacherName'] ?>" name="teacherName"></td>
                     </tr><tr><td>&nbsp;</td></tr>
                     <tr>
                        <td><label for="ex3">นามสกุล :</label></td>
                        <td><input class="form-control"  type="text" value="<?php echo $objResult['teacherLastname'] ?>" name="teacherLastname"></td>
                    </tr><tr><td>&nbsp;</td></tr>
                    <tr>
                        <td><label for="ex3">เบอร์โทรศัพท์ :</label></td>
                        <td><input class="form-control"  type="text" value="<?php echo $objResult['teacherPhone'] ?>" name="teacherPhone"></td>
                    </tr><tr><td>&nbsp;</td></tr>
                    <tr> 
                        <td><label for="ex3">ประจำชั้น :</label></td>
                        <td><input class="form-control"  type="text" value="<?php echo $objResult['classID'] ?>" name="classID"><font color="#CC0000"><b>(* กรุณาใส่เป็นรหัสห้อง เช่น 1/1 คือ 101 เป็นต้น <br> 999 คือ ผู้บริหาร และ 0 คือ ผู้ดูแลระบบ)</b></font></td>
                    </tr><tr><td>&nbsp;</td></tr>
                    <tr>
                        <td><label for="ex3">ชื่อผู้ใช้งาน :</label></td>
                        <td><input class="form-control"  type="text" value="<?php echo $objResult['user'] ?>" name="user"></td>
                    </tr><tr><td>&nbsp;</td></tr>
                    <tr>
                        <td><input class="form-control"  type="hidden" value="<?php echo $objResult['userID'] ?>" name="userID"></td>
                    <tr>
                        <td><label for="ex3">รหัสผ่าน :</label></td>
                        <td><input class="form-control" type="text" value="<?php echo $objResult['password'] ?>" name="password"></td>
                        </tr><tr><td>&nbsp;</td></tr>
                  </table>

                    <br>
                    <center>
                        <button type="submit" class="btn btn-success"><font color="#000000">บันทึก</font></button>
                        <a href="teacherInfo.php"><button type="button" class="btn btn-danger"><font color="#000000">ยกเลิก</font></button></a>
                    </center>
                </form>
            </body>

    </html>
<?php } ?>
