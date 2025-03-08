<html>

<head>


<title>BDMS</title>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
 <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
 
<!-- DataTables Responsive CSS -->
<link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">
<style>
	th{
		white-space: nowrap;
		background: rgb(225,97,97,56%);
		border:1px;
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
<div class=".col-lg-12">
               <h1 class="page-header">လှူဒါန်းထားသောသွေးစာရင်း</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
								ရရှိနိုင်သောသွေးများနှင့်အလှူရှင်များစာရင်းကိုအောင်ပါဇယားတွင်ဖော်ပြထားသည်။
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from blood";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
						<tr>
							<th>သွေးအုပ်စု</th>
							<th>အမည်</th>
							<th>လိင်</th>
							<th>မွေးနေ့</th>
							<th>ကိုယ်အလေးချိန်</th>
							<th>နေရပ်လိပ်စာ</th>
							<th>ဖုန်းနံပါတ်</th>
							<th>အရေအတွက်</th>
							<th>ရက်စွဲ</th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr class='gradeA'>
						  <td>".$row['bloodgroup']."</td>
						  <td>".$row['name']."</td>
						  <td>".$row['gender']."</td>
						  <td>".$row['dob']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['address']."</td>
						  <td>".$row['contact']."</td>
						  <td>".$row['bloodqty']."</td>
						  <td>".$row['collection']."</td>

						</tr>
						<tbody>
						";
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

<!-- DataTables JavaScript -->
<script src="../js/dataTables/jquery.dataTables.min.js"></script>
<script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

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