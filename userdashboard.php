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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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

        <?php include 'includes/donornav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <div class="header">
                    <!--waves -->
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
  <p>သင်ရဲ့သွေးတစ်စက်ဟာ ဘဝတစ်ခုရှင်သန်နိုင်ဖို့
အခွင့်အရေးတစ်ခုလည်း ဖြစ်နိုင်ပါတယ်..</p>
</div>
<!-- waves end -->
<!--Content ends-->


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
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
                        <a href="userviewblood.php">
                            <div class="panel-footer">
                                <span class="pull-left">သွေးလှူစာရင်းအားကြည့်ရန်</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning" style="background-color:#ffad2c; border-color:#954e00;">
                        <div class="panel-heading" style="background-color:#ffad2c;">
                            <div class="row" style="color:white; text-shadow: 1px 1px 1px black;">
                                <div class="col-xs-3">
                                    <i class="fa fa-flag fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     
                                <!-- in order to count total donor's record -->
                                        <?php include 'counter/dashboardcampaigncount.php';?> 

                                    <!-- <div class="huge">26</div> -->
                                    <div>ကန်ပိန်းအရေအတွက်</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="userviewcampaigns.php">
                            <div class="panel-footer" style="border-color:#954e00; color:rgba(246,190,0,1);">
                                <span class="pull-left">ကန်ပိန်းများအားကြည့်ရန်</span>
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
                        <a href="userviewannouncement.php">
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
                                    <div >သင့်သွေးဖြင့်</div>
                                    <div ><h2>အသက်ကယ်ပါ..</h2></div>
                                </div>
                            </div>
                        </div>
                        <a href="useraddblood.php">
                            <div class="panel-footer">
                                <span class="pull-left">ယခုသွေးလှူဒါန်းမည်</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="container">
	<div class="row">
	<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong><i class="fa fa-warning"></i> You Are Currently Viewing User's Account</strong> <marquee><p style="font-family: Impact; font-size: 18pt">You Are Currently Viewing User's Account</p></marquee>
</div>
	</div>
</div> -->
            <!-- /.row -->
           
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
    
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
    color: white;
}
	</style>

</html>
