<html>

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
		border-radius:8px;
	}
	td{
		text-align: center;
		
	}
</style>
</head>


<body>
<div id="wrapper">

<?php include 'includes/donornav.php'?>


<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">ထုတ်ပြန်ပြီသောအရေးပေါ်ကြေညာချက်များ။</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
								ကြေညာချက်များကိုအောက်ပါဇယားတွင်အသေးစိတ်ဖော်ပြထားသည်။
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "../pages/dbconnect.php";

						$qry="select * from announce";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
												
						<tr>
							<th>အကြောင်းအရာ</th>
							<th>သွေး</th>
							<th>ရက်စွဲ</th>
							<th>ဆေးရုံအမည်</th>
							<th>အသေးစိတ်အချက်အလက်များ</th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['announcement']."</td>
						  <td>".$row['bloodneed']."</td>
						  <td>".$row['dat']."</td>
						  <td>".$row['organizer']."</td>
						  <td>".$row['requirements']."</td>

						</tr>
						</tbody>";
						}

						?>
						</table>
									
				</div>
				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>
</div>

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