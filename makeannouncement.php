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

    <style>
	th{
		white-space: nowrap;
		background: rgb(225,97,97,56%);
		border: radius 8px;
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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ကြေညာချက်ထုတ်ပြန်ရန်</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        ကြေညာချက်ထုတ်ပြန်ရန်အောက်ပါဖောင်အားဖြည့်ပါ။
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="announce.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>အကြောင်းအရာ</label>
                                            <input class="form-control" type="text"  name="announcement" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>လိုအပ်သောသွေးအမျိုးအစား</label>
                                            <input class="form-control" type="text"  name="bloodneed" required>
                                        </div>

                                        <div class="form-group">
                                            <label>ရက်စွဲ</label>
                                            <input class="form-control" type="date" name="dat" required>
                                        </div>

                                        <div class="form-group">
                                                <label>ဆေးရုံအမည်</label>
                                                <input class="form-control"  type="text" name="organizer" required>
                                            </div>

                                        <div class="form-group">
                                                <label>အသေးစိတ်အချက်အလက်များ</label>
                                                <textarea class="form-control" rows="4" type="text" name="requirements" required></textarea>
                                            </div>
                                       
                                    
                                
                                        <button type="submit" style="border-radius: 8px"  class="btn-success btn btn-default">အတည်ပြုမည်။</button>
                
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
