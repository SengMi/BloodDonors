<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}

include "dbconnect.php";
$qry="SELECT bloodgroup, count(*) as number FROM blood GROUP BY bloodgroup";
$result= mysqli_query($conn,$qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["bloodgroup"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Total Available Blood According to Blood Groups',  
                      is3D:true,  
                      pieHole: 0.0 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>
    <style>
            @import url(//fonts.googleapis.com/css?family=Lato:300:400);

            body {
                margin:0;
            }
            h1 {
            font-family: 'Lato', sans-serif;
            font-weight:300;
            letter-spacing: 2px;
            font-size:48px;
            z-index: 1;
            }

            p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size:16px;
            
            color: #8A0302;
            }

            .header {
            position:relative;
            text-align:center;
            background: linear-gradient(60deg, rgb(255 255 255) 0%, rgb(255 49 0) 100%);
            border-radius:20px;
            }

            .inner-header {
             height: 50px;
            width:100%;
            margin: 0;
            padding: 0;
            background-color: #666666;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            color: white;
            text-shadow: rgba(255,0,0,0.5) 0px 3px 4px;

            }

            .flex { /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            }

            .waves {
            position:relative;
            width: 100%;
            height: 50px;
            margin-bottom:-7px; /*Fix for safari gap*/
            min-height:80px;
            max-height:100px;
            }

            .content {
            position:relative;
            height:10vh;
            text-align:center;
            border-radius: 10px;
            border-color: red;
            }


            /* Animation */

            .parallax > use {
            animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
            }
            .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
            }
            .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
            }
            .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
            }
            .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
            }
            @keyframes move-forever {
            0% {
            transform: translate3d(-90px,0,0);
            }
            100% { 
                transform: translate3d(85px,0,0);
            }
            }
            /*Shrinking for mobile*/
            @media (max-width: 768px) {
            .waves {
                height:40px;
                min-height:40px;
            }
            .content {
                height:10vh;
            }
            h1 {
                font-size:24px;
            }
            }
                    </style>
</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                <div class="header">

<!--Content before waves-->
<div class="inner-header flex">
<h1>သွေးသည်အသက်</h1>
</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="#8A0302" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,250,0,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(138,3,2,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(285,230,0,0.5)" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
<div class="content flex">
  <p>သွေးလှူရှင်များ၏အချက်အလက်များကို သေချာစွာထိန်းသိမ်းပါရန်..</p>
</div>
<!-- waves end -->
<!--Content ends-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     
                                <!-- in order to count total donor's record -->
                                        <?php include 'counter/dashboardcount.php';?> 

                                    <!-- <div class="huge">26</div> -->
                                    <div>သွေးလှူရှင်စုစုပေါင်း</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="viewdonor.php">
                            <div class="panel-footer">
                                <span class="pull-left">သွေးလှူရှင်စာရင်းအားကြည့်ရန်</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <i class="icofont-blood icofont-5x"></i>
                                    <!-- <i class="fa fa-heartbeat fa-5x"></i> -->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- in order to count total donor's record -->
                                    <?php include 'counter/dashbloodcount.php';?> 
                                    
                                    <div>လှူဒါန်းထားသောသွေးပုလင်းရေ</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewblood.php">
                            <div class="panel-footer">
                                <span class="pull-left">သွေးလှူစာရင်းအားကြည့်ရန်</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bullhorn fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php include 'counter/dashannouncecount.php';?>
                                    <div class="huge"> </div>
                                    <div>ကြေညာချက်များ</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewannouncement.php">
                            <div class="panel-footer">
                                <span class="pull-left">ကြေညာချက်များအားကြည့်ရန်</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <i class="icofont-blood-drop icofont-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">ယခု</div>
                                    <div>လှူဒါန်းမည်</div>
                                </div>
                            </div>
                        </div>
                        <a href="addblood.php">
                            <div class="panel-footer">
                                <span class="pull-left">သွေးလှူဒါန်းခြင်းအားစာရင်းသွင်းမည်။</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
			
				<div class=".col-lg-12">
				
				<div id="content">
					 
					  <div class="container-fluid">
						
						<div class="row-fluid">
						  
						  <div class="span12">
							
							<div id="piechart" style="width: 690px; height: 320px; margin-left:auto; margin-right:auto;"></div>  

						  </div>
						</div>
					  </div>
				</div>
			
				</div>

           </div>
                <!-- /.col-lg-8 -->
                
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By MetaBros</p>
    </footer>
	
	<style>
	footer{
   background-color: #8A0302;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
    }

    footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
    color: white;
    }

	</style>



</html>
