<!DOCTYPE html>
<html lang="en">

<head>

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
                    <h1 class="page-header">အချက်အလက်များပြင်ဆင်ပြီးပါပြီ။</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Message Box.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="#" method="post">

								<?php
									include 'dbconnect.php';
										$name = $_POST["name"];    
										$gender = $_POST["gender"];
										$dob = $_POST["dob"];
										$weight = $_POST["weight"];
										$bloodgroup = $_POST["bloodgroup"];
										$address = $_POST["address"];
										$contact = $_POST["contact"];
										$bloodqty = $_POST["bloodqty"];
										$collection = $_POST["collection"];
										$id=$_POST['id'];
										//update query
										$qry = "update blood set name='$name', gender='$gender', dob='$dob', weight='$weight', bloodgroup='$bloodgroup', address='$address', contact='$contact', bloodqty='$bloodqty', collection='$collection' where id='$id'";
										$result = mysqli_query($conn,$qry); //query executes
										if(!$result){
											echo"ERROR". mysqli_error();
										}else {
											echo"SUCCESSFULLY UPDATED";
											echo" <a href='index.php' div style='text-align: center'><h3>ထွက်မည်</h3>";
										}
								?>

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
