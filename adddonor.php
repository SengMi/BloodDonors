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
        th{
		white-space: nowrap;
		background: rgb(225,97,97,56%);
		border-radius:8px;
	}
	td{
		text-align: center;
	}
    
    .form-control{
        box-shadow: 10px 10px 5px rgb(225,97,97,56%);
    }
    </style>
</head>

<body>

    <div id="wrapper">

    <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">သွေးလှူရှင်အားစာရင်းသွင်းမည်</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        ကျေးဇူးပြု၍ အောက်ပါဖောင်အားပြည့်စုံစွာဖြည့်ပေးပါ။
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="added.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>နာမည် အပြည့်အစုံ</label>
                                            <input class="form-control" name="name" type="text" placeholder="မောင်ဇော်ဇော်" required>
                                        </div>
                                        <div class="form-group">
                                            <label>အုပ်ထိန်းသူအမည်</label>
                                            <input class="form-control" placeholder="ဦးထင်ကျော်" name="guardiansname" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>လိင် [ M/F ]</label>
                                            <input class="form-control" placeholder="M or F" name="gender" required>
                                        </div>

                                        <div class="form-group">
                                            <label>မွေးနေ့</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>ကိုယ်အလေးချိန်</label>
                                            <input class="form-control" type="number" placeholder="---kg" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                            <label>သွေးအမျိုးအစား</label>
                                            <input class="form-control" placeholder="Eg: B+" name="bloodgroup" required>
                                        </div>

                                        <div class="form-group">
                                            <label>အီးမေးလ်လိပ်စာ</label>
                                            <input class="form-control" type="email" placeholder="zawzaw@email.com" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label>နေရပ်လိပ်စာ</label>
                                            <input class="form-control" type="text" placeholder="နေရပ်လိပ်စာ အပြည့်အစုံ" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>ဆက်သွယ်ရန်ဖုန်းနံပါတ်</label>
                                            <input class="form-control" type="number" placeholder="09123456789" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>အကောင့်နာမည်</label>
                                            <input class="form-control" placeholder="Enter Here" name="username" required>
                                            <p class="help-block">သွေးလှူရှင်အကောင့်ဖွင့်ရန်။</p>
                                            <p class="help-block">Example: zawzaw</p>
                                        </div>

                                        <div class="form-group">
                                            <label>လျှို့ဝှက်နံပါတ်</label>
                                            <input class="form-control" name="password" type="password" id="myInput" required>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:8px";>စာရင်းသွင်းမည်။</button>

                
                                    </form>


                                </div>                      

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

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
}
	</style>

</html>
