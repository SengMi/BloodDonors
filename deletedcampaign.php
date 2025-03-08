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

<?php include 'includes/nav.php'?>

		<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">ပွဲအချက်အလက်များအားဖျက်မည်။</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
								လာရောက်လှူဒါန်းနိုင်သောသွေးလှူပွဲများ
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from campaigndb";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
												
						<tr>
						<th><i class='fa fa-pencil'></i></th>
						<th>ကျင်းပမည့်ခေါင်းစဉ်</th>
						<th>အဖွဲ့အစည်းအမည်</th>
						<th>ဆက်သွယ်ရန်ဖုန်းနံပါတ်</th>
						<th>ကျင်းပမည့်ရက်</th>
						<th>ကျင်းပမည့်နေရာနှင့်ကန်ပိန်းအကြောင်းအသေးစိတ်</th>
						
					</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td><a href='finaldeletecampaign.php?id=".$row['id']."'><i class='fa fa-trash' style='color:red'></i></a></td>
						  <td>".$row['cname']."</td>
						  <td>".$row['oname']."</td>
						  <td>".$row['phn']."</td>
						  <td>".$row['cdate']."</td>
						  <td>".$row['descp']."</td>
						  
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