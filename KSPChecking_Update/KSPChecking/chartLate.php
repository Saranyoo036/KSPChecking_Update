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

                    xmlhttp.open("GET", "ReportDailyCEO2.php?classID=" + str, true);
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
    div.tableClass {
    float:left; 
    height: 350px;
     position:relative;
     left:375;

}

    </style>
<div class="abcd">
    <body background="/images/bg.jpg" style="background-attachment: fixed;">
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
<a href="ReportLateRoom.php"><button type="button" class="btn btn-danger"><font color="#000000">ย้อนกลับ</font></button></a> &nbsp;
    <a href="ceopage.php"><button type="button" class="btn btn-primary"><font color="#000000">หน้าหลัก</font></button></a>  &nbsp;

</div>
    </div> <!-- จบล็อคเอ้าท์ -->
<br><br>
<?php
// Database credentials
$mysqli = mysqli_connect("localhost", "root", "", "attendance");
$mysqli->set_charset("utf8"); 
 date_default_timezone_set("Asia/Bangkok");
                    $date = date("Y-m-d");
// Get data from database
$result = $mysqli->query("SELECT count(checkinout.typeCheckInID) as counttype , typecheckinout.typeCheckIn,class from checkinout,student,typecheckinout,class where student.studentID=checkinout.studentID and checkinout.typeCheckInID=60002 and typecheckinout.typeCheckInID=checkinout.typeCheckInID and class.classID=student.classID and class.classID between 100 and 399 group by class.classID");
$result2 = $mysqli->query("SELECT count(checkinout.typeCheckInID) as counttype , typecheckinout.typeCheckIn,class from checkinout,student,typecheckinout,class where student.studentID=checkinout.studentID and checkinout.typeCheckInID=60002 and typecheckinout.typeCheckInID=checkinout.typeCheckInID and class.classID=student.classID and class.classID between 400 and 699 group by class.classID");

?>

<html lang="en">
<head>
<meta charset="utf-8" />
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['class', 'counttype'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['class']."', ".$row['counttype']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'การขาดเรียนของนักเรียน ม.ต้น',
        width: 900,
        height: 500,
        is3D: true,
       backgroundColor: 'none',
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
//------------------------------------------------------------------------------------//
    var data2 = google.visualization.arrayToDataTable([
      ['class', 'counttype'],
      <?php
      if($result2->num_rows > 0){
          while($row = $result2->fetch_assoc()){
            echo "['".$row['class']."', ".$row['counttype']."],";
          }
      }
      ?>
    ]);
    
    var options2 = {
        title: 'การขาดเรียนของนักเรียน ม.ปลาย',
        width: 900,
        height: 500,
        is3D: true,
       backgroundColor: 'none',
    };
    
    var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
    
    chart2.draw(data2,options2);


}
</script>
</head>
<body>
  
    <center><div id="piechart"></div>
    <hr>
    <center><div id="piechart2"></div>
                    
</body>
</html>
    </body>
</html>
<?php }?>
