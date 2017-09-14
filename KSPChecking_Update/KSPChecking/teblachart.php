
<!doctype html>
<html lang="en" class="perfect-scrollbar-on">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>THAIEPAY ADMINISTRATIVE SYSTEM</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="http://sandbox.thaiepay.com//assets/css/bootstrap.min.css" rel="stylesheet" />

        <!--  Light Bootstrap Dashboard core CSS    -->
        <link href="http://sandbox.thaiepay.com//assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="http://sandbox.thaiepay.com//assets/css/demo.css" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="http://sandbox.thaiepay.com//assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <link href="http://sandbox.thaiepay.com//assets/css/bootstrap-toggle.min.css" rel="stylesheet" />





    </head>
    <body>

        <div class="wrapper">
            <div class="sidebar" data-color="blue_pay" data-image="../assets/img/full-screen-image-3.jpg">
                <!--

                    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple | blue_pay (blue for paysolution.asia)"
                    Tip 2: you can also add an image using data-image tag

                -->
                <div class="logo">
                    <a class="logo-text">
                        THAIEPAY, Pay All Online
                    </a>
                </div>
                <div class="logo logo-mini">
                    <a class="logo-text">
                        TEP
                    </a>
                </div>

                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img src="../assets/img/default-avatar.png" />
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" class="collapsed"> <!--href="#collapseExample"-->
                                THAIEPAY
                                <!--<b class="caret"></b>-->
                            </a>
                            <!--<div class="collapse" id="collapseExample">
                                <ul class="nav">
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Settings</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <ul class="nav">
                        <li>
                            <a data-toggle="collapse" href="#store">  <!--aria-expanded="true"-->
                                <i class="pe-7s-home"></i>
                                <p>Shop
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="store">
                                <ul class="nav">
                                    <li><a href="shoplist">Shop List</a></li>
                                    <li><a href="approve_shop">Approve Shop</a></li>
                                    <li><a href="shop_change_information">Shop Requesting Change of Information</a></li>
                                    <li><a href="shop_change_bank">Shop Requesting Change of Bank</a></li>
                                    <li><a href="renew_system">Renew System</a></li>
                                    <li><a href="shop_paysocial">Shop Paysocial Network</a></li>
                                    <li><a href="shop_expired">Shop Expired</a></li>
                                    <li><a href="designated_personal_investigate">Designated Personal Investigate</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#shopping_mall">
                                <i class="pe-7s-plugin"></i>
                                <p>Shopping Mall
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="shopping_mall">
                                <ul class="nav">
                                    <li><a href="shopping_shoplist">Shop List</a></li>
                                    <li><a href="sub_category">Sub Categories</a></li>
                                    <li><a href="shop_sub_category">Shop Sub Categories</a></li>
                                    <li><a href="attractions">Attractions</a></li>
                                    <li><a href="themes_template">Themes & Template</a></li>
                                    <li><a href="opinion">Opinion( Themes )</a></li>
                                    <li><a href="add_article">Add Article ( Blog )</a></li>
                                    <li><a href="edit_article">Edit Article ( Blog )</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#hotel_Business_golf">
                                <i class="pe-7s-note2"></i>
                                <p>Hotel-Business-Golf
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="hotel_Business_golf">
                                <ul class="nav">
                                    <li><a href="hotellist">Hotel List</a></li>
                                    <li><a href="reservation_information">Reservation Information</a></li>
                                    <li><a href="hotel_reseller">Reseller</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#thai_epay">
                                <i class="pe-7s-note"></i>
                                <p>Web Pages Thai-epay
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="thai_epay">
                                <ul class="nav">
                                    <li><a href="addnews">Add News</a></li>
                                    <li><a href="editnews">Edit News</a></li>
                                    <li><a href="addtips">Add Tips</a></li>
                                    <li><a href="edittips">Edit Tips</a></li>
                                    <li><a href="adddownload">Add Download</a></li>
                                    <li><a href="editdownload">Edit Download</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#transaction">
                                <i class="pe-7s-paperclip"></i>
                                <p>Transaction
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="transaction">
                                <ul class="nav">
                                    <li><a href="change_status_transaction">Change Status Transaction</a></li>
                                    <li><a href="#">AMEX Transaction</a></li>
                                    <li><a href="#">ตรวจ Card Issuer ( รวม )</a></li>
                                    <li><a href="#">ตรวจ Card Issuer</a></li>
                                    <li><a href="#">Check Order Other China ( Installment )</a></li>
                                    <li><a href="#">เพิ่มเงิน / หักเงิน รายเดือน</a></li>
                                    <li><a href="#">รอ Refund</a></li>
                                    <li><a href="#">Charge Back</a></li>
                                    <li><a href="#">ตรวจ Transaction CounterService</a></li>
                                    <li><a href="update_counterservice">Update Transaction CounterService</a></li>
                                    <li><a href="#">ตรวจ Transaction PaysocialNetwork</a></li>
                                    <li><a href="#">ตรวจ Transaction Internet banking</a></li>
                                    <li><a href="#">GMS MTD</a></li>
                                    <li><a href="post_back">Resend Post back</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#settlement">
                                <i class="pe-7s-graph1"></i>
                                <p>Settlement
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="settlement">
                                <ul class="nav">
                                    <li><a href="settlement">Settlement</a></li>
                                    <li><a href="#">Settlement Manual</a></li>
                                    <li><a href="#">สรุปยอด</a></li>
                                    <li><a href="#">กำหนดค่าเงิน</a></li>
                                    <li><a href="list_of_settled">List Of Settled</a></li>
                                    <li><a href="daily_report">Daily Transaction</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#report">
                                <i class="pe-7s-note2"></i>
                                <p>Report
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="report">
                                <ul class="nav">
                                    <li><a href="sendemail_to_shop">Send E-mail to Shop</a></li>
                                    <li><a href="reportAMEX">Report to AMEX <br/>( Monthly )</a></li>
                                    <li><a href="transfermoney_merchant">Transfer Money <br/>( Merchant )</a></li>
                                    <li><a href="transfermoney_reseller">Transfer Money <br/>( Reseller )</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#admin_users">
                                <i class="pe-7s-add-user"></i>
                                <p>Admin Users
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="admin_users">
                                <ul class="nav">
                                    <li><a href="changepassword">Change Password</a></li>
                                    <li onclick="showLogout('', '')"><a>Logout PopUp</a></li>
                                    <li><a href="http://sandbox.thaiepay.com//account/user/logout">Logout No PopUp</a></li>
                                    <li><a href="#">Manage User</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#add_promotion_GMS">
                                <i class="pe-7s-switch"></i>
                                <p>Add Promotion GMS
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="add_promotion_GMS">
                                <ul class="nav">
                                    <li><a href="promotion_gms">Add Promotion</a></li>
                                    <li><a href="edit_delete_promotion">Edit/Delete Promotion</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#account">
                                <i class="pe-7s-note2"></i>
                                <p>Account
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="account">
                                <ul class="nav">
                                    <li><a href="taxinvoice_otherincome">Tax Invoice<br/>[Other Income]</a></li>
                                    <li><a href="taxinvoice_income_from_service_charge">Tax Invoice<br/>[Income from Service charge]</a></li>
                                    <li><a href="taxinvoice_allincome">Tax Invoice<br/>[All Income]</a></li>
                                    <li><a href="listcompany">Create Tax Invoice<br/>[List Company]</a></li>
                                    <li><a href="newcompany">Create Tax Invoice<br/>[New Company]</a></li>
                                    <li><a href="report">Report</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#sale">
                                <i class="pe-7s-note2"></i>
                                <p>Sale
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="sale">
                                <ul class="nav">
                                    <li><a href="sale">Employee</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#GMS">
                                <i class="pe-7s-note2"></i>
                                <p>GMS
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="GMS">
                                <ul class="nav">
                                    <li><a href="dailyreport">Dailyreport</a></li>
                                    <li><a href="GMS">GMS Favorites</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#COD">
                                <i class="pe-7s-note2"></i>
                                <p>COD
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="COD">
                                <ul class="nav">
                                    <li><a href="COD">COD List</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#t_bank">
                                <i class="pe-7s-note2"></i>
                                <p>T Bank
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="t_bank">
                                <ul class="nav">
                                    <li><a href="movemerchant">Move merchant</a></li>
                                    <li><a href="list_merchant">List merchant</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#reseller">
                                <i class="pe-7s-note2"></i>
                                <p>Reseller
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="reseller">
                                <ul class="nav">
                                    <li><a href="reseller">Reseller</a></li>
                                    <li><a href="additional">Additional</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="MPOS">
                                <i class="pe-7s-note2"></i>
                                <p>M POS</p>
                            </a>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#test">
                                <i class="pe-7s-note2"></i>
                                <p>TEST
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="test">
                                <ul class="nav">
                                    <li><a href="testpdf">CreatePDF / CreatePDF With Password</a></li>
                                    <li><a href="showtable">Showtable</a></li>
                                    <li><a href="form">Form For Credit Card Payment</a></li>
                                    <li><a href="lightbox">Lightbox</a></li>
                                    <li><a href="paysnlogin">Pay.sn Login Form</a></li>
                                    <li><a href="popup_paysolutions">Payment Popup Paysolutions</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                    <script type="text/javascript">

                        function showLogout(number, title) {
                            swal({title: "Are you sure?",
                                text: "Are you sure to quit the program ? [ " + title + " ] !",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Yes, I do!",
                                cancelButtonText: "No, cancel plx!",
                                closeOnConfirm: false,
                                closeOnCancel: false
                            }, function (isConfirm) {
                                if (isConfirm) {
                                    swal("Quit!", "Goodbye.");
                                } else {
                                    swal("Cancelled", "You can continue to work.");
                                }
                            });

                        }
                    </script>            </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand">THAIEPAY Administrative System</a>
                        </div>

                    </div>
                </nav>
                <br>
                <br>
                <br>

                <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

                <link href="http://sandbox.thaiepay.com//assets/css/fresh-bootstrap-table.css" rel="stylesheet" type="text/css"/>
                <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
                <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
                <style>


                    .card .card-content {
                        padding: 15px 20px;
                        border-radius: 10px;
                    }

                    .card .card-header {
                        box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
                        margin: -30px 15px 0;
                        border-radius: 3px;
                        padding: 15px;
                        background-color: #999999;
                        border-radius: 10px;

                    }

                    .card .card-header.card-chart {
                        padding: 0;
                        min-height:160px;
                    }

                    .card .card-header .ct-label {
                        color: rgba(255, 255, 255, 0.7);
                    }
                    .card .card-header .ct-grid {
                        stroke: rgba(255, 255, 255, 0.2);
                    }
                    .card .card-header .ct-series-a .ct-point,
                    .card .card-header .ct-series-a .ct-line,
                    .card .card-header .ct-series-a .ct-bar,
                    .card .card-header .ct-series-a .ct-slice-donut {
                        stroke: rgba(255, 255, 255, 0.8);
                    }

                    .card .table th {
                        color: black;
                    }

                    .card .table tr:first-child td {
                        border-top: none;
                    }
                    .card [data-background-color="blue_pay"] {
                        background: linear-gradient(60deg, #0076CE, #00467b);
                        box-shadow: 0 12px 20px -10px rgba(156, 39, 176, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
                        text-align: right;
                        padding-top: 5px;
                        padding-left: 5px;
                    }
                </style>
                <style type="text/css">
                    .btn.btn-my {
                        color: #FFFFFF;
                        background-color: #0076CE;
                        opacity: 1;
                        filter: alpha(opacity=100);
                        font-size:12px;
                        border-radius: 1.925em;
                    }
                    .btn.btn-my:hover, .btn.btn-fill:focus, .btn.btn-fill:active, .btn.btn-fill.active, .open > .btn.btn-fill.dropdown-toggle {
                        background-color: #007ddb;
                        color: #FFFFFF;
                    }
                </style>

                <style>
                    div.tab {
                        overflow: hidden;
                        border: 1px solid #ccc;
                        background-color: #3472F7;
                        color:#ffffff;
                        border-radius: .925em;
                    }

                    /* Style the buttons inside the tab */
                    div.tab button {
                        background-color: inherit;
                        float: left;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        padding: 14px 16px;
                        transition: 0.3s;
                        font-size: 17px;
                    }

                    /* Change background color of buttons on hover */
                    div.tab button:hover {
                        background-color: #0076CE;
                    }

                    /* Create an active/current tablink class */
                    div.tab button.active {
                        background-color: #0076CE
                    }

                    /* Style the tab content */
                    .tabcontent {
                        display: none;
                        padding: 6px 12px;
                        border-top: none;

                    }
                </style>

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="content">
                                        <table class="table">


                                            <thead><FONT SIZE="3" COLOR="#0076CE"><B>
                                                GMS : GMS Favorites </B></FONT></thead></table>
                                        <br>
                                        <div class="tab">
                                            <button class="tablinks" onclick="openMenu(event, 'mail_paysocial')" id="defaultOpen">GMS Trend</button>
                                            <button><img src="http://sandbox.thaiepay.com//assets/img/line.png" alt=""/></button>
                                            <button class="tablinks" onclick="openMenu(event, 'mail_WSM')">Orders Trend</button>
                                            <button><img src="http://sandbox.thaiepay.com//assets/img/line.png" alt=""/></button>
                                            <button class="tablinks" onclick="openMenu(event, 'mail_other')">AOV</button>
                                        </div><br>

                                        <center><h4>GMS Trend</h4></center>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="fresh-table full-color-blue_pay">
                                                <table id="fresh-table" class="table">
                                                    <thead>
                                                    <th ><center>GMS</center></th>
                                                    <th><center>2012</center></th>
                                                    <th ><center>2013</center></th>
                                                    <th ><center>2014</center></th>
                                                    <th ><center>2015</center></th>
                                                    <th ><center>2016</center></th>
                                                    <th ><center>2017</center></th>
                                                    </thead>
                                                    <tbody align="center" font color="#fff">
                                                        <tr>
                                                            <td>Jan</td>
                                                            <td>43,406,466</td>
                                                            <td>35,658,584</td>
                                                            <td>29,813,547</td>
                                                            <td>26,943,643</td>
                                                            <td>27,999,128</td>
                                                            <td>42,878,730</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fab</td>
                                                            <td>37,896,877</td>
                                                            <td>30,907,994</td>
                                                            <td>26,512,042</td>
                                                            <td>22,596,315</td>
                                                            <td>27,814,500</td>
                                                            <td>40,056,820</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mar</td>
                                                            <td>42,340,417</td>
                                                            <td>30,230,758</td>
                                                            <td>24,689,326</td>
                                                            <td>20,791,829</td>
                                                            <td>35,903,529</td>
                                                            <td>42,357,358</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Apr</td>
                                                            <td>31,910,586</td>
                                                            <td>23,597,956</td>
                                                            <td>23,431,469</td>
                                                            <td>17,079,921</td>
                                                            <td>26,614,066</td>
                                                            <td>29,248,340</td>
                                                        </tr>
                                                        <tr>
                                                            <td>May</td>
                                                            <td>32,912,876</td>
                                                            <td>24,349,873</td>
                                                            <td>21,651,836</td>
                                                            <td>16,500,230</td>
                                                            <td>26,854,946</td>
                                                            <td>34,962,507</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jun</td>
                                                            <td>22,658,614</td>
                                                            <td>25,363,307</td>
                                                            <td>20,651,836</td>
                                                            <td>20,361,647</td>
                                                            <td>30,060,357</td>
                                                            <td>27,762,536</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jul</td>
                                                            <td>24,788,086</td>
                                                            <td>30,075,740</td>
                                                            <td>22,092,336</td>
                                                            <td>20,674,801</td>
                                                            <td>26,654,830</td>
                                                            <td>27,733,635</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Aug</td>
                                                            <td>23,811,070</td>
                                                            <td>26,949,186</td>
                                                            <td>21,584,209</td>
                                                            <td>21,492,212</td>
                                                            <td>26,065,004</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sep</td>
                                                            <td>24,540,216</td>
                                                            <td>25,401,542</td>
                                                            <td>22,276,505</td>
                                                            <td>21,617,464</td>
                                                            <td>27,927,968</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Oct</td>
                                                            <td>31,802,235</td>
                                                            <td>26,677,677</td>
                                                            <td>24,468,364</td>
                                                            <td>24,208,178</td>
                                                            <td>28,050,298</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nov</td>
                                                            <td>32,148,766</td>
                                                            <td>32,139,010</td>
                                                            <td>25,150,158</td>
                                                            <td>24,342,631</td>
                                                            <td>32,266,949</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dec</td>
                                                            <td>29,907,190</td>
                                                            <td>28,586,056</td>
                                                            <td>24,364,538</td>
                                                            <td>26,298,438</td>
                                                            <td>38,994,513</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>378,123,399</td>
                                                            <td>339,937,683</td>
                                                            <td>286,686,166</td>
                                                            <td>262,907,309</td>
                                                            <td>355,206,089</td>
                                                            <td>244,999,926</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><br><br>
                                        </div>
                                        <table class="table">
                                            <tbody align="center" font color="#fff">


                                            <div class="col-md-6">

                                                <div class="card-header card-chart" data-background-color="blue_pay">
                                                    <div id="" class="ct-chart "></div>
                                                </div>
                                            </div>
                                    </div>
                                    </tbody>
                                    </table>
                                    <!---------------------------------------------------------------> 
                                    <center><h4>Orders Trend</h4></center>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="fresh-table full-color-blue_pay">
                                            <table id="fresh-table" class="table">
                                                <thead>
                                                <th ><center>Order</center></th>
                                                <th ><center>2012</center></th>
                                                <th ><center>2013</center></th>
                                                <th ><center>2014</center></th>
                                                <th ><center>2015</center></th>
                                                <th ><center>2016</center></th>
                                                <th ><center>2017</center></th>
                                                </thead>
                                                <tbody align="center" font color="#fff">
                                                    <tr>
                                                        <td>Jan</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>8,613</td>
                                                        <td>13,695</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fab</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>7,289</td>
                                                        <td>9,853</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mar</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>11,311</td>
                                                        <td>12,520</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apr</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>8,607</td>
                                                        <td>10,963</td>
                                                    </tr>
                                                    <tr>
                                                        <td>May</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>8,031</td>
                                                        <td>14,747</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jun</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>11,652</td>
                                                        <td>13,036</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jul</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>12,452</td>
                                                        <td>12,705</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aug</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sep</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Oct</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nov</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dec</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>67,955</td>
                                                        <td>87,519</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><br><br>
                                    </div>
                                    <table class="table">
                                        <tbody align="center" font color="#fff">


                                        <div class="col-md-6">

                                            <div class="card-header card-chart" data-background-color="blue_pay">
                                                <div id="" class="ct-chart "></div>
                                            </div>
                                        </div>
                                </div>
                                </tbody>
                                </table>
                                <!-------------------------------------------------------------->
                                <center><h4>AOV</h4></center>
                                <br>
                                <div class="col-md-12">
                                    <div class="fresh-table full-color-blue_pay">
                                        <table id="fresh-table" class="table">
                                            <thead>
                                            <th ><center>AOV</center></th>
                                            <th ><center>2012</center></th>
                                            <th ><center>2013</center></th>
                                            <th ><center>2014</center></th>
                                            <th ><center>2015</center></th>
                                            <th ><center>2016</center></th>
                                            <th ><center>2017</center></th>
                                            </thead>
                                            <tbody align="center" font color="#fff">
                                                <tr>
                                                    <td>Jan</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>8,613</td>
                                                    <td>13,695</td>
                                                </tr>
                                                <tr>
                                                    <td>Fab</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>7,289</td>
                                                    <td>9,853</td>
                                                </tr>
                                                <tr>
                                                    <td>Mar</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>11,311</td>
                                                    <td>12,520</td>
                                                </tr>
                                                <tr>
                                                    <td>Apr</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>8,607</td>
                                                    <td>10,963</td>
                                                </tr>
                                                <tr>
                                                    <td>May</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>8,031</td>
                                                    <td>14,747</td>
                                                </tr>
                                                <tr>
                                                    <td>Jun</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>11,652</td>
                                                    <td>13,036</td>
                                                </tr>
                                                <tr>
                                                    <td>Jul</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>12,452</td>
                                                    <td>12,705</td>
                                                </tr>
                                                <tr>
                                                    <td>Aug</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Sep</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Oct</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Nov</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Dec</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>67,955</td>
                                                    <td>87,519</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><br><br>
                                </div>
                                <table class="table">
                                    <tbody align="center" font color="#fff">


                                    <div class="col-md-6">

                                        <div class="card-header card-chart" data-background-color="blue_pay">
                                            <div id="" class="ct-chart "></div>
                                        </div>
                                    </div>
                            </div>
                            </tbody>
                            </table>
                            <!--------------------------------------------------------------->    
                            <center><h4>Total Shop - Active Shop Trend 2017</h4></center>
                            <br>
                            <div class="col-md-12">
                                <div class="fresh-table full-color-blue_pay">
                                    <table id="fresh-table" class="table">
                                        <thead>
                                        <th ><center>Total Shop - Active Shop</center></th>
                                        <th ><center>Total Shop</center></th>
                                        <th ><center>total ExistingShop</center></th>
                                        <th ><center>Total NewShop</center></th>
                                        <th ><center>Total Active Shop</center></th>
                                        <th ><center>Active NewShop</center></th>
                                        <th ><center>Active ExistingShop</center></th>
                                        </thead>
                                        <tbody align="center" font color="#fff">
                                            <tr>
                                                <td>Jan</td>
                                                <td>2,900</td>
                                                <td>1,340</td>
                                                <td>1,560</td>
                                                <td>502</td>
                                                <td>100</td>
                                                <td>284</td>
                                            </tr>
                                            <tr>
                                                <td>Fab</td>
                                                <td>3,100</td>
                                                <td>1,505</td>
                                                <td>1,595</td>
                                                <td>405</td>
                                                <td>130</td>
                                                <td>285</td>
                                            </tr>
                                            <tr>
                                                <td>Mar</td>
                                                <td>3,500</td>
                                                <td>1,879</td>
                                                <td>1,621</td>
                                                <td>500</td>
                                                <td>160</td>
                                                <td>285</td>
                                            </tr>
                                            <tr>
                                                <td>Apr</td>
                                                <td>3,767</td>
                                                <td>2,046</td>
                                                <td>1,721</td>
                                                <td>550</td>
                                                <td>190</td>
                                                <td>286</td>
                                            </tr>
                                            <tr>
                                                <td>May</td>
                                                <td>4,067</td>
                                                <td>2,246</td>
                                                <td>1,821</td>
                                                <td>480</td>
                                                <td>220</td>
                                                <td>288</td>
                                            </tr>
                                            <tr>
                                                <td>Jun</td>
                                                <td>4,367</td>
                                                <td>2,544</td>
                                                <td>1,823</td>
                                                <td>408</td>
                                                <td>250</td>
                                                <td>288</td>
                                            </tr>
                                            <tr>
                                                <td>Jul</td>
                                                <td>4,667</td>
                                                <td>2,768</td>
                                                <td>1,899</td>
                                                <td>421</td>
                                                <td>280</td>
                                                <td>288</td>
                                            </tr>
                                            <tr>
                                                <td>Aug</td>
                                                <td>4,967</td>
                                                <td>3,168</td>
                                                <td>1,799</td>
                                                <td>430</td>
                                                <td>310</td>
                                                <td>289</td>
                                            </tr>
                                            <tr>
                                                <td>Sep</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oct</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nov</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Dec</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>31,333</td>
                                                <td>17,494</td>
                                                <td>13,839</td>
                                                <td>3,696</td>
                                                <td>1,640</td>
                                                <td>2,293</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><br><br>
                            </div>
                            <table class="table">
                                <tbody align="center" font color="#fff">


                                <div class="col-md-6">

                                    <div class="card-header card-chart" data-background-color="blue_pay">
                                        <div id="" class="ct-chart "></div>
                                    </div>
                                </div>
                        </div>
                        </tbody>
                        </table>
                        <!---------------------------------------------------------------> 
                        <center><h4>GMS Trend 2017</h4></center>
                        <br>
                        <div class="col-md-12">
                            <div class="fresh-table full-color-blue_pay">
                                <table id="fresh-table" class="table">
                                    <thead>
                                    <th ><center>GMS Trend 2017</center></th>
                                    <th><center>Total GMS</center></th>
                                    <th ><center>GMS Existing </center></th>
                                    <th ><center>GMS New Shop</center></th>
                                    </thead>
                                    <tbody align="center" font color="#fff">
                                        <tr>
                                            <td>Jan</td>
                                            <td>42,878,730</td>
                                            <td>26,075,345</td>
                                            <td>16,803,385</td>
                                        </tr>
                                        <tr>
                                            <td>Fab</td>
                                            <td>40,056,820</td>
                                            <td>25,104,468</td>
                                            <td>14,952,352</td>
                                        </tr>
                                        <tr>
                                            <td>Mar</td>
                                            <td>42,357,358</td>
                                            <td>26,986,842</td>
                                            <td>15,370,516</td>
                                        </tr>
                                        <tr>
                                            <td>Apr</td>
                                            <td>29,248,340</td>
                                            <td>22,528,769</td>
                                            <td>6,719,572</td>
                                        </tr>
                                        <tr>
                                            <td>May</td>
                                            <td>34,962,507</td>
                                            <td>20,935,564</td>
                                            <td>14,026,943</td>
                                        </tr>
                                        <tr>
                                            <td>Jun</td>
                                            <td>27,762,536</td>
                                            <td>19,493,372</td>
                                            <td>8,269,164</td>
                                        </tr>
                                        <tr>
                                            <td>Jul</td>
                                            <td></td>
                                            <td></td>
                                            <td></td
                                        </tr>
                                        <tr>
                                            <td>Aug</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sep</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Oct</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Nov</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Dec</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>217,266,291</td>
                                            <td>141,124,359</td>
                                            <td>76,141,931</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><br><br>
                        </div>
                        <table class="table">
                            <tbody align="center" font color="#fff">


                            <div class="col-md-6">

                                <div class="card-header card-chart" data-background-color="blue_pay">
                                    <div id="" class="ct-chart "></div>
                                </div>
                            </div>
                    </div>
                    </tbody>
                    </table>
                    <!--------------------------------------------------------------->
                    <center><h4>Order Trend 2017</h4></center>
                    <br>
                    <div class="col-md-12">
                        <div class="fresh-table full-color-blue_pay">
                            <table id="fresh-table" class="table">
                                <thead>
                                <th ><center>Order Trend 2017</center></th>
                                <th><center>Total Order</center></th>
                                <th ><center>Order Existing</center></th>
                                <th ><center>Order NewShop</center></th>
                                </thead>
                                <tbody align="center" font color="#fff">
                                    <tr>
                                        <td>Jan</td>
                                        <td>13,695</td>
                                        <td>9,854</td>
                                        <td>3,841</td>
                                    </tr>
                                    <tr>
                                        <td>Fab</td>
                                        <td>9,853</td>
                                        <td>8,627</td>
                                        <td>1,226</td>
                                    </tr>
                                    <tr>
                                        <td>Mar</td>
                                        <td>12,520</td>
                                        <td>9,801</td>
                                        <td>2,719</td>
                                    </tr>
                                    <tr>
                                        <td>Apr</td>
                                        <td>10,963</td>
                                        <td>8,959</td>
                                        <td>2,004</td>
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td>14,747</td>
                                        <td>9,840</td>
                                        <td>4,907</td>
                                    </tr>
                                    <tr>
                                        <td>Jun</td>
                                        <td>13,036</td>
                                        <td>9,153</td>
                                        <td>3,883</td>
                                    </tr>
                                    <tr>
                                        <td>Jul</td>
                                        <td></td>
                                        <td></td>
                                        <td></td
                                    </tr>
                                    <tr>
                                        <td>Aug</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Sep</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Oct</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Nov</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Dec</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>74,814</td>
                                        <td>56,234</td>
                                        <td>18,580</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><br><br>
                    </div>
                    <table class="table">
                        <tbody align="center" font color="#fff">


                        <div class="col-md-6">

                            <div class="card-header card-chart" data-background-color="blue_pay">
                                <div id="" class="ct-chart "></div>
                            </div>
                        </div>
                </div>
                </tbody>
                </table>
                <!--------------------------------------------------------------->
                <center><h4>GMS by  Service Type 2017</h4></center>
                <br>
                <div class="col-md-12">
                    <div class="fresh-table full-color-blue_pay">
                        <table id="fresh-table" class="table">
                            <thead>
                            <th ><center>GMS by  Service Type 2017</center></th>
                            <th><center>Pay.sn GMS</center></th>
                            <th ><center>EPayment GMS</center></th>
                            <th ><center>EShop GMS</center></th>
                            </thead>
                            <tbody align="center" font color="#fff">
                                <tr>
                                    <td>Jan</td>
                                    <td>13,361,171.53</td>
                                    <td>24,903,248.78</td>
                                    <td>5,277,302.99</td>
                                </tr>
                                <tr>
                                    <td>Fab</td>
                                    <td>16,469,091.25</td>
                                    <td>19,827,901.13</td>
                                    <td>3,816,262.46</td>
                                </tr>
                                <tr>
                                    <td>Mar</td>
                                    <td>12,841,330.12</td>
                                    <td>25,233,584.44</td>
                                    <td>5,148,696.49</td>
                                </tr>
                                <tr>
                                    <td>Apr</td>
                                    <td>4,858,691.74</td>
                                    <td>16,667,078.89</td>
                                    <td>2,230,276.71</td>
                                </tr>
                                <tr>
                                    <td>May</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Jun</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Jul</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Aug</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sep</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Oct</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Nov</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Dec</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>47,530,285</td>
                                    <td>86,631,813</td>
                                    <td>16,472,539</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><br><br>
                </div>
                <table class="table">
                    <tbody align="center" font color="#fff">


                    <div class="col-md-6">

                        <div class="card-header card-chart" data-background-color="blue_pay">
                            <div id="" class="ct-chart "></div>
                        </div>
                    </div>

                    </tbody>
                </table>    
                <!--------------------------------------------------------------->
                <center><h4>August 2017 : WeeklyGMS</h4></center>
                <br>
                <div class="col-md-12">
                    <div class="fresh-table full-color-blue_pay">
                        <table id="fresh-table" class="table">
                            <thead>
                            <th ><center>August 2017 : WeeklyGMS </center></th>
                            <th><center>Total GMS</center></th>
                            <th ><center>GMS Existing</center></th>
                            <th ><center>GMS NewShop</center></th>
                            <th ><center>Total Order</center></th>
                            <th ><center>Order Existing</center></th>
                            <th ><center>Order NewShop</center></th>
                            </thead>
                            <tbody align="center" font color="#fff">
                                <tr>
                                    <td>week 1</td>
                                    <td>1,600,000</td>
                                    <td>900,000</td>
                                    <td>300,000</td>
                                    <td>2,400</td>
                                    <td>900</td>
                                    <td>1,500</td>
                                </tr>
                                <tr>
                                    <td>week 2</td>
                                    <td>1,600,000</td>
                                    <td>600,000</td>
                                    <td>70,000</td>
                                    <td>935</td>
                                    <td>700</td>
                                    <td>235</td>
                                </tr>
                                <tr>
                                    <td>week 3</td>
                                    <td>1,600,000</td>
                                    <td>700,000</td>
                                    <td>240,000</td>
                                    <td>755</td>
                                    <td>520</td>
                                    <td>235</td>
                                </tr>
                                <tr>
                                    <td>week 4</td>
                                    <td>1,600,000</td>
                                    <td>600,000</td>
                                    <td>70,000</td>
                                    <td>5,520</td>
                                    <td>520</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <td>week 5</td>
                                    <td>1,600,000</td>
                                    <td>600,000</td>
                                    <td>70,000</td>
                                    <td>755</td>
                                    <td>520</td>
                                    <td>235</td>
                                </tr>

                                <tr>
                                    <td>Total</td>
                                    <td>8,000,000</td>
                                    <td>3,400,000</td>
                                    <td>750,000</td>
                                    <td>10,365</td>
                                    <td>3,160</td>
                                    <td>7,205</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><br><br>
                </div>
                <table class="table">
                    <tbody align="center" font color="#fff">


                    <div class="col-md-6">

                        <div class="card-header card-chart" data-background-color="blue_pay">
                            <div id="" class="ct-chart "></div>
                        </div>
                    </div>
            </div>
        </tbody>
    </table>
    <!--------------------------------------------------------------->
    <center><h4>GMS By Category 2017</h4></center>
    <br>
    <div class="col-md-12">
        <div class="fresh-table full-color-blue_pay">
            <table id="fresh-table" class="table">
                <thead>
                <th ><center>GMS By Category 2017</center></th>
                <th ><center>Travel GMS</center></th>
                <th ><center>Special GMS</center></th>
                <th ><center>Tickets</center></th>
                <th ><center>Sport GMS</center></th>
                <th ><center>Wedding GMS</center></th>
                <th ><center>Fashion GMS</center></th>
                <th ><center>Computer GMS</center></th>
                <th ><center>Others GMS</center></th>

                </thead>
                <tbody align="center" font color="#fff">
                    <tr>
                        <td>Jan</td>
                        <td>10,259,860.24</td>
                        <td>6,155,748.62</td>
                        <td>2,700,000.00</td>
                        <td>842,339.27</td>
                        <td>455,310.67</td>
                        <td>847,528.25</td>
                        <td>1,274,309.48</td>
                        <td>23,706,626.79</td>
                    </tr>
                    <tr>
                        <td>Fab</td>
                        <td>9,107,447.78</td>
                        <td>4,836,619.19</td>
                        <td>2,500,000.00</td>
                        <td>426,871.38</td>
                        <td>214,726.60</td>
                        <td>609,468.05</td>
                        <td>1,526,256.71</td>
                        <td>23,391,865.08</td>
                    </tr>
                    <tr>
                        <td>Mar</td>
                        <td>9,201,849.39</td>
                        <td>5,566,693.30</td>
                        <td>3,000,000.00</td>
                        <td>477,961.02</td>
                        <td>281,079.92</td>
                        <td>911,301.02</td>
                        <td>1,846,734.27</td>
                        <td>24,937,992.17</td>
                    </tr>
                    <tr>
                        <td>Apr</td>
                        <td>5,665,772.86</td>
                        <td>3,572,040.16</td>
                        <td>5,490,578.10</td>
                        <td>567,858.64</td>
                        <td>109,268.32</td>
                        <td>601,773.71</td>
                        <td>1,365,321.04</td>
                        <td>11,874,012.66</td>
                    </tr>
                    <tr>
                        <td>May</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jun</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jul</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Aug</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sep</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Oct</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nov</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Dec</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>34,234,930.27</td>
                        <td>20,131,101.27</td>
                        <td>13,690,578.10</td>
                        <td>2,315,030.31</td>
                        <td>1,060,385.51</td>
                        <td>2,970,071.03</td>
                        <td>6,012,621.50</td>
                        <td>83,910,496.70</td>
                    </tr>
                </tbody>
            </table>
        </div><br><br>
    </div>
    <table class="table">
        <tbody align="center" font color="#fff">


        <div class="col-md-6">

            <div class="card-header card-chart" data-background-color="blue_pay">
                <div id="" class="ct-chart "></div>
            </div>
        </div>

        </tbody>
    </table>
    <!--------------------------------------------------------------->
    <center><h4>GMS By  Card 2017</h4></center>
    <br>
    <div class="col-md-12">
        <div class="fresh-table full-color-blue_pay">
            <table id="fresh-table" class="table">
                <thead>
                <th ><center>GMS By Category 2017</center></th>
                <th ><center>Visa</center></th>
                <th ><center>Master</center></th>
                <th ><center>JCB</center></th>
                <th ><center>Amex</center></th>
                <th ><center>CUP</center></th>
                <th ><center>Counter service</center></th>
                <th ><center>Bill Payment</center></th>
                <th ><center>InstallmentAll</center></th>
                <th ><center>InstallmentKBank</center></th>
                <th ><center>InstallmentBAY</center></th>
                <th ><center>InstallmentKTC</center></th>
                <th ><center>InstallmentBBL</center></th>
                <th ><center>Paypal</center></th>
                <th ><center>COD</center></th>
                <th ><center>MPOS</center></th>
                <th ><center>Direct Debit</center></th>
                <th ><center>DCC</center></th>

                </thead>
                <tbody align="center" font color="#fff">
                    <tr>
                        <td>Jan</td>
                        <td>26,496,487.15</td>
                        <td>10,205,209.95</td>
                        <td>52,818.76</td>
                        <td>2,530,376.39</td>
                        <td>509,779.15</td>
                        <td>1,836,749.05</td>
                        <td>155,491.67</td>
                        <td>1,434,258.72</td>
                        <td>581,942.02</td>
                        <td>423,241.44</td>
                        <td>429,075.25</td>
                        <td></td>
                        <td>18,952.00</td>
                        <td>0</td>
                        <td>590</td>
                        <td>301,010.44</td>
                        <td>5,998,140.72</td>
                    </tr>
                    <tr>
                        <td>Fab</td>
                        <td>26,988,737.53</td>
                        <td>8,460,631.74</td>
                        <td>44,500.00</td>
                        <td>1,803,075.65</td>
                        <td>101,032.10</td>
                        <td>430,185.56</td>
                        <td>38,252.00</td>
                        <td>2,190,580.21</td>
                        <td>1,228,669.32</td>
                        <td>465,229.47</td>
                        <td>496,681.42</td>
                        <td></td>
                        <td>0.00</td>
                        <td>4,085.02</td>
                        <td>0</td>
                        <td>52,175.00</td>
                        <td>4,789,017.46</td>
                    </tr>
                    <tr>
                        <td>Mar</td>
                        <td>26,789,527.29</td>
                        <td>9,696,843.40</td>
                        <td>58,879.00</td>
                        <td>1,982,917.23</td>
                        <td>149,628.08</td>
                        <td>1,379,408.21</td>
                        <td>109,449.31</td>
                        <td>2,586,846.56</td>
                        <td>1,345,979.56</td>
                        <td>791,939.24</td>
                        <td>448,927.76</td>
                        <td></td>
                        <td>927.00</td>
                        <td>11,229.29</td>
                        <td>32,678.00</td>
                        <td>425,277.70</td>
                        <td>5,252,285.91</td>
                    </tr>
                    <tr>
                        <td>Apr</td>
                        <td>13,925,761.00</td>
                        <td>5,969,227.50</td>
                        <td>4,970.00</td>
                        <td>1,269,845.46</td>
                        <td>110,507.33</td>
                        <td>1,015,575.80</td>
                        <td>75,476.30</td>
                        <td>1,194,444.97</td>
                        <td>511,919.71</td>
                        <td>333,152.42</td>
                        <td>349,372.84</td>
                        <td>101,953.00</td>
                        <td>0.00</td>
                        <td>1,284.00</td>
                        <td>0.00</td>
                        <td>171,465.00</td>
                        <td>3,414,797.86</td>
                    </tr>
                    <tr>
                        <td>May</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jun</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jul</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Aug</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sep</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Oct</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nov</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Dec</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>94,200,512.97</td>
                        <td>34,331,912.59</td>
                        <td>161,167.76</td>
                        <td>7,586,214.73</td>
                        <td>870,946.66</td>
                        <td>4,661,918.62</td>
                        <td>378,669.28</td>
                        <td>7,406,130.46</td>
                        <td>3,668,510.61</td>
                        <td>2,013,562.57</td>
                        <td>1,724,057.27</td>
                        <td>101,953.00</td>
                        <td>19,879.00</td>
                        <td>16,598.31</td>
                        <td>33,268.00</td>
                        <td>949,928.14</td>
                        <td>19,454,241.95</td>
                    </tr>
                </tbody>
            </table>
        </div><br><br>
    </div>
    <table class="table">
        <tbody align="center" font color="#fff">


        <div class="col-md-6">

            <div class="card-header card-chart" data-background-color="blue_pay">
                <div id="" class="ct-chart "></div>
            </div>
        </div>

        </tbody>
    </table>
    <!-- --------------------------------------------------------- -->
    <center><h3>GMS By Merchants  แยก ร้านเก่า - ร้านใหม่</h3></center>
    <center><h4>Top 100 Merchants </h4></center>
    <br>
    <div class="col-md-12">
        <div class="fresh-table full-color-blue_pay">
            <table id="fresh-table" class="table">
                <thead>
                <center><h4>GMS 2017 </h4></center>
                <th ><center>No</center></th>
                <th ><center>MerchantID</center></th>
                <th ><center>MerchantCompany</center></th>
                <th ><center>Catgory</center></th>
                <th ><center>ServiceTypeCode</center></th>
                <th ><center>Jan</center></th>
                <th ><center>Feb</center></th>
                <th ><center>Mar</center></th>
                <th ><center>Apr</center></th>
                <th ><center>May</center></th>
                <th ><center>Jun</center></th>
                <th ><center>Jul</center></th>
                <th ><center>Aug</center></th>
                <th ><center>Sep</center></th>
                <th ><center>Oct</center></th>
                <th ><center>Nov</center></th>
                <th ><center>Dec</center></th>


                </thead>
                <tbody align="center" font color="#fff">
                    <tr>
                        <td>1</td>
                        <td>50710805</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>867,266</td>
                        <td>641,316</td>
                        <td>371,155</td>
                        <td>460,637</td>
                        <td>132,080</td>
                        <td>140,400</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>50710806</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>630,000</td>
                        <td>625,000</td>
                        <td>318,000</td>
                        <td>204,000</td>
                        <td>658,000</td>
                        <td>165,000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>50710807</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>747,290</td>
                        <td>464,395</td>
                        <td>722,750</td>
                        <td>354,330</td>
                        <td>272,495</td>
                        <td>82,958</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>50710808</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>310,905</td>
                        <td>991,755</td>
                        <td>262,475</td>
                        <td>224,435</td>
                        <td>367,485</td>
                        <td>342,410</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>50710809</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>435,738</td>
                        <td>395,859</td>
                        <td>394,466</td>
                        <td>374,570</td>
                        <td>388,802</td>
                        <td>417,233</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>6</td>
                        <td>50710810</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>662,391</td>
                        <td>429,316</td>
                        <td>569,821</td>
                        <td>451,021</td>
                        <td>108,540</td>
                        <td>45,050</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>7</td>
                        <td>50710811</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>366,042</td>
                        <td>238,296</td>
                        <td>457,346</td>
                        <td>405,306</td>
                        <td>360,128</td>
                        <td>273,400</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>8</td>
                        <td>50710812</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>662,391</td>
                        <td>429,316</td>
                        <td>569,821</td>
                        <td>451,021</td>
                        <td>108,540</td>
                        <td>45,050</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>9</td>
                        <td>50710813</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>662,391</td>
                        <td>429,316</td>
                        <td>569,821</td>
                        <td>451,021</td>
                        <td>108,540</td>
                        <td>45,050</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>10</td>
                        <td>50710814</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>662,391</td>
                        <td>429,316</td>
                        <td>569,821</td>
                        <td>451,021</td>
                        <td>108,540</td>
                        <td>45,050</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>100</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4,682,195</td>
                        <td>4,443,564</td>
                        <td>4,105,691</td>
                        <td>3,633,306</td>
                        <td>3,340,719</td>
                        <td>2,583,652</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>

                    </tr>
                </tbody>
            </table>
        </div><br><br>
    </div>
    <table class="table">
        <tbody align="center" font color="#fff">


        <div class="col-md-6">

            <div class="card-header card-chart" data-background-color="blue_pay">
                <div id="" class="ct-chart "></div>
            </div>
        </div>

        </tbody>
    </table>
    <!-- ----------------------------------------------------------->
    <center><h3>GMS By Merchants  แยก ร้านเก่า - ร้านใหม่</h3></center>
    <center><h4>Top 100 Merchants </h4></center>
    <br>
    <div class="col-md-12">
        <div class="fresh-table full-color-blue_pay">
            <table id="fresh-table" class="table">
                <thead>
                <center><h4>#Order 2017</h4></center>
                <th ><center>No</center></th>
                <th ><center>MerchantID</center></th>
                <th ><center>MerchantCompany</center></th>
                <th ><center>Catgory</center></th>
                <th ><center>ServiceTypeCode</center></th>
                <th ><center>Jan</center></th>
                <th ><center>Feb</center></th>
                <th ><center>Mar</center></th>
                <th ><center>Apr</center></th>
                <th ><center>May</center></th>
                <th ><center>Jun</center></th>
                <th ><center>Jul</center></th>
                <th ><center>Aug</center></th>
                <th ><center>Sep</center></th>
                <th ><center>Oct</center></th>
                <th ><center>Nov</center></th>
                <th ><center>Dec</center></th>


                </thead>
                <tbody align="center" font color="#fff">
                    <tr>
                        <td>1</td>
                        <td>50710805</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>18</td>
                        <td>58</td>
                        <td>16</td>
                        <td>15</td>
                        <td>21</td>
                        <td>22</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>50710806</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>223</td>
                        <td>188</td>
                        <td>186</td>
                        <td>177</td>
                        <td>214</td>
                        <td>184</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>50710807</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>49</td>
                        <td>39</td>
                        <td>37</td>
                        <td>36</td>
                        <td>7</td>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>50710808</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>83</td>
                        <td>52</td>
                        <td>110</td>
                        <td>86</td>
                        <td>84</td>
                        <td>61</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>50710809</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>130</td>
                        <td>139</td>
                        <td>168</td>
                        <td>174</td>
                        <td>192</td>
                        <td>146</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>6</td>
                        <td>50710810</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>18</td>
                        <td>8</td>
                        <td>3</td>
                        <td>20</td>
                        <td>20</td>
                        <td>12</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>7</td>
                        <td>50710811</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td>5</td>
                        <td>27</td>
                        <td>18</td>
                        <td>12</td>
                        <td>20</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>8</td>
                        <td>50710812</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>54</td>
                        <td>45</td>
                        <td>45</td>
                        <td>41</td>
                        <td>38</td>
                        <td>25</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>9</td>
                        <td>50710813</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>15</td>
                        <td>18</td>
                        <td>10</td>
                        <td>14</td>
                        <td>13</td>
                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>10</td>
                        <td>50710814</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>124</td>
                        <td>122</td>
                        <td>146</td>
                        <td>215</td>
                        <td>174</td>
                        <td>116</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>100</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>716</td>
                        <td>674</td>
                        <td>748</td>
                        <td>796</td>
                        <td>776</td>
                        <td>595</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>

                    </tr>
                </tbody>
            </table>
        </div><br><br>
    </div>
    <table class="table">
        <tbody align="center" font color="#fff">


        <div class="col-md-6">

            <div class="card-header card-chart" data-background-color="blue_pay">
                <div id="" class="ct-chart "></div>
            </div>
        </div>

        </tbody>
    </table>
    <!-------------------------------------------------------------->
    <center><h3>GMS By Merchants  แยก ร้านเก่า - ร้านใหม่</h3></center>
    <center><h4>Top 100 Merchants </h4></center>
    <br>
    <div class="col-md-12">
        <div class="fresh-table full-color-blue_pay">
            <table id="fresh-table" class="table">
                <thead>
                <center><h4>AOV 2017</h4></center>
                <th ><center>No</center></th>
                <th ><center>MerchantID</center></th>
                <th ><center>MerchantCompany</center></th>
                <th ><center>Catgory</center></th>
                <th ><center>ServiceTypeCode</center></th>
                <th ><center>Jan</center></th>
                <th ><center>Feb</center></th>
                <th ><center>Mar</center></th>
                <th ><center>Apr</center></th>
                <th ><center>May</center></th>
                <th ><center>Jun</center></th>
                <th ><center>Jul</center></th>
                <th ><center>Aug</center></th>
                <th ><center>Sep</center></th>
                <th ><center>Oct</center></th>
                <th ><center>Nov</center></th>
                <th ><center>Dec</center></th>


                </thead>
                <tbody align="center" font color="#fff">
                    <tr>
                        <td>1</td>
                        <td>50710805</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>48,181</td>
                        <td>11,057</td>
                        <td>23,197</td>
                        <td>30,709</td>
                        <td>6,290</td>
                        <td>6,382</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>50710806</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2,825</td>
                        <td>3,324</td>
                        <td>1,710</td>
                        <td>1,153</td>
                        <td>3,075</td>
                        <td>897</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>50710807</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>15,251</td>
                        <td>11,908</td>
                        <td>19,534</td>
                        <td>9,843</td>
                        <td>38,928</td>
                        <td>27,653</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>50710808</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3,746</td>
                        <td>19,072</td>
                        <td>2,386</td>
                        <td>2,610</td>
                        <td>4,375</td>
                        <td>5,613</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>50710809</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>3,352</td>
                        <td>2,848</td>
                        <td>2,348</td>
                        <td>2,153</td>
                        <td>2,025</td>
                        <td>2,858</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>6</td>
                        <td>50710810</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>36,800</td>
                        <td>53,665</td>
                        <td>189,940</td>
                        <td>22,551</td>
                        <td>5,169</td>
                        <td>3,754</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>7</td>
                        <td>50710811</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>183,021</td>
                        <td>47,659</td>
                        <td>16,939</td>
                        <td>22,517</td>
                        <td>30,011</td>
                        <td>13,670</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>8</td>
                        <td>50710812</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>4,569</td>
                        <td>7,518</td>
                        <td>6,829</td>
                        <td>7,517</td>
                        <td>7,522</td>
                        <td>15,229</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>9</td>
                        <td>50710813</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>24,027</td>
                        <td>10,261</td>
                        <td>9,100</td>
                        <td>32,700</td>
                        <td>35,085</td>
                        <td>44,478</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>10</td>
                        <td>50710814</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>447</td>
                        <td>1,103</td>
                        <td>4,187</td>
                        <td>1,828</td>
                        <td>1,789</td>
                        <td>4,048</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td>100</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>322,218</td>
                        <td>168,416</td>
                        <td>276,170</td>
                        <td>133,580</td>
                        <td>134,267</td>
                        <td>124,581</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>

                    </tr>
                </tbody>
            </table>
        </div><br><br>
    </div>
    <table class="table">
        <tbody align="center" font color="#fff">


        <div class="col-md-6">

            <div class="card-header card-chart" data-background-color="blue_pay">
                <div id="" class="ct-chart "></div>
            </div>
        </div>

        </tbody>
    </table>
    <!-------------------------------------------------------------->

</div>
</div>
</div>
</div>
</div>
</div>

<script src="http://sandbox.thaiepay.com/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="http://sandbox.thaiepay.com/assets/js/bootstrap-table.js"></script>
<script src="GMS_chart.js"></script>
<script>
                                                $().ready(function () {
                                                    GMS_chart.TotalShopCharts();

                                                });
</script>

<script type="text/javascript">
    var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false;

    $().ready(function () {
        $table.bootstrapTable({
            toolbar: ".toolbar",
            search: true,
            pagination: true,
            striped: true,
            pageSize: 13,
            pageList: [10, 25, 50, 100],

            formatShowingRows: function (pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function (pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });

        $(window).resize(function () {
            $table.bootstrapTable('resetView');
        });
    });
</script>












<script type="text/javascript">
    $().ready(function () {

        // Init DatetimePicker
        demo.initFormExtendedDatetimepickers();
    });
</script>



</div>

<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="http://sandbox.thaiepay.com//assets/js/jquery.min.js" type="text/javascript"></script>
<script src="http://sandbox.thaiepay.com//assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="http://sandbox.thaiepay.com//assets/js/bootstrap.min.js" type="text/javascript"></script>


<!--  Forms Validations Plugin -->
<!--<script src="http://sandbox.thaiepay.com//assets/js/jquery.validate.js" type="text/javascript"></script>-->
<script src="http://sandbox.thaiepay.com//assets/js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="http://sandbox.thaiepay.com//assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="http://sandbox.thaiepay.com//assets/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="http://sandbox.thaiepay.com//assets/js/bootstrap-selectpicker.js"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="http://sandbox.thaiepay.com//assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

<!--  Charts Plugin -->
<script src="http://sandbox.thaiepay.com//assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="http://sandbox.thaiepay.com//assets/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="http://sandbox.thaiepay.com//assets/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="http://sandbox.thaiepay.com//assets/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Wizard Plugin    -->
<script src="http://sandbox.thaiepay.com//assets/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="http://sandbox.thaiepay.com//assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="http://sandbox.thaiepay.com//assets/js/jquery.datatables.js"></script>


<!--  Full Calendar Plugin    -->
<script src="http://sandbox.thaiepay.com//assets/js/fullcalendar.min.js"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="http://sandbox.thaiepay.com//assets/js/light-bootstrap-dashboard.js"></script>

<!--   Sharrre Library    -->
<script src="http://sandbox.thaiepay.com//assets/js/jquery.sharrre.js"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="http://sandbox.thaiepay.com//assets/js/demo.js"></script>

<script src="http://sandbox.thaiepay.com//assets/js/bootstrap-toggle.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        demo.initDashboardPageCharts();
        demo.initVectorMap();

        /*$.notify({
         icon: 'pe-7s-bell',
         message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."
         
         },{
         type: 'warning',
         timer: 4000
         });*/

    });
</script>




</html>
