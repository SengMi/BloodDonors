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

</head>

<body>

    <div id="wrapper">

    <?php include 'includes/donornav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <div id="share"><img style="width:672.97px; border-radius: 20px;" src="../img/share.png" alt="background"></div>
                    
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
                                    <form role="form" action="useraddedblood.php" method="POST">
                                     
                                        <div class="form-group">
                                            <label>နာမည် အပြည့်အစုံ</label>
                                            <input class="form-control" placeholder="မောင်ဇော်ဇော်" type="text" name="name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>လိင် [M/F]</label>
                                            <input class="form-control" placeholder="M for ကျား & F for မ" type="text" name="gender" required>
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
                                            <input class="form-control" type="text" placeholder="B+, O-, B-" name="bloodgroup" required>
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
                                            <label>လှူဒါန်းမည့်အရေအတွက်</label>
                                            <input class="form-control" type="number" placeholder="လှူဒါန်းမည့်သွေးပုလင်းရေ" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                                <label>သွေးလှူမည့်ရက်စွဲ</label>
                                                <input class="form-control" type="date" name="collection" required>
                                            </div>
                                       
                                    
                                
                                        <button type="submit"  class="btn btn-success">စာရင်းပေးမည်။</button>
                
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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
