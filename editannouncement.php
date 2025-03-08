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
		radius:8px;
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
                    <h1 class="page-header">အရေးပေါ်ကြေညာချက်များအားပြင်ဆင်မည်။</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        ကြေညာချက်များကိုအောက်ပါဇယားတွင်အသေးစိတ်ဖော်ပြထားသည်။
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

								<?php
									include 'dbconnect.php';
									$id=$_GET['id'];
									$qry= "select * from announce where id='$id'";
									$result=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($result)){
								?> 

                                    <form role="form" action="editedannounce.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>အကြောင်းအရာ</label>
                                            <input class="form-control" name="announcement" type="text" value='<?php echo $row['announcement']; ?>' required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>လိုအပ်သောသွေးအမျိုးအစား</label>
                                            <input class="form-control" type="text" name="bloodneed" value='<?php echo $row['bloodneed']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>ရက်စွဲ</label>
                                            <input class="form-control" name="dat" type="date" value='<?php echo $row['dat']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                                <label>ဆေးရုံအမည်</label>
                                                <input class="form-control" type="text" name="organizer" value='<?php echo $row['organizer']; ?>' required>
                                            </div>

                                        <div class="form-group">
                                                <label>အသေးစိတ်အချက်အလက်များ</label>
                                                <textarea class="form-control" rows="4" name="requirements" type="text" required><?php echo $row['requirements']; ?></textarea>
                                            </div>
                                       
                                     <!-- id hidden grna input type ma "hidden" -->
            <input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
                                
                                        <button type="submit" class="btn btn-success">ပြင်ဆင်မည်။</button>
                
                                    </form>
                                </div>

                                <?php
}
?>
                                
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
