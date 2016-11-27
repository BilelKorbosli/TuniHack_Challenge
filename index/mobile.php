<?php 
include ('../controllers/CrudOffre.php');

$crudoffre = new CrudOffre();
$listProducts = $crudoffre->getAllOffers($crudoffre->conn);
$count = $crudoffre->getNumberOffre($crudoffre->conn);

if(isset($_POST['search'])){
  $search=$_POST['search'];
  $listProducts = $crudoffre->searchAllOffersByBrand($crudoffre->conn, $search);
    $count = $crudoffre->getNumberOffreByBrand($crudoffre->conn, $search);
}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8"/>
<title>TuniH4ck</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<style type="text/css">
	
	/* The alert message box */
.alert {
    padding: 20px;
    background-color: #2196F3; /* Red */
    color: white;
    margin-bottom: 15px;
    width: 30%;
    margin-left: 70%;
}

/* The close button */
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
    color: black;
}
</style>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
									<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
									<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
										<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
													<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
									<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
			<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
 <link href="../assets/global/plugins/jquery-notific8/jquery.notific8.min.css" rel="stylesheet" type="text/css" />




										<link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
															<link href="../assets/global/plugins/mapplic/mapplic/mapplic.css" rel="stylesheet" type="text/css"/>
												<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css"/>
		<link href="../assets/global/css/plugins-md.min.css" rel="stylesheet"  type="text/css"/>
<!-- END THEME GLOBAL STYLES -->


<!-- BEGIN THEME LAYOUT STYLES -->
			<link href="../assets/layouts/layout7/css/layout.min.css" rel="stylesheet" type="text/css"  />
			<link href="../assets/layouts/layout7/css/custom.min.css" rel="stylesheet" type="text/css"  />
	<!-- END THEME LAYOUT STYLES -->




<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/semantic.min.css">





<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD --><body class="page-container-bg-solid page-md">
 
	
<?php 
include("navbar.php");

?>



<div class="alert" id="notif" style="display : none;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  This is an alert box.
</div>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<form action="mobile.php" method="POST">
	<input type="search" name="search" id="input" class="form-control" value="" placeholder="Serach for item" required="required" title="">
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<button type="submit" class="btn btn-success btn-block">search</button>
	</form>
</div>



<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Region
  <span class="caret"></span></button>
  <ul class="dropdown-menu dropdown-block">
    <li><a href="#">Tunis</a></li>
    <li><a href="#">Ariana</a></li>
    <li><a href="#">Jerba</a></li>
  </ul>


</div>

</div>


<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Categories
  <span class="caret"></span></button>
  <ul class="dropdown-menu dropdown-block">
    <li><a href="#">Mobile</a></li>
    <li><a href="#">Games</a></li>
    <li><a href="#">Home</a></li>
  </ul>
</div>
</div>





		</div>
	</div>




</div>



<div class="container">
	
<div class="tabbable tabbable-tabdrop">
                                        <ul class="nav nav-pills">
 <li class="dropdown pull-right tabdrop">

                                     <span class="label label-danger">   <?php 
                                  echo  "Items: ". $count;
                                  ?></span>

                                            </li>
                               
                                            <li class="">
                                                <a href="#tab11" data-toggle="tab" aria-expanded="false">All mobile</a>
                                            </li>
                                            <li class="">
                                                <a href="#tab12" data-toggle="tab" aria-expanded="false">Cars</a>
                                            </li>
                                            <li class="active">
                                                <a href="#tab13" data-toggle="tab" aria-expanded="true">Computers</a>
                                            </li>
                                            <li>
                                                <a href="#tab14" data-toggle="tab">Other products</a>
                                            </li>
                                            
                                            
                                            
                                            
                                        </ul>
                                       
                                    </div>






</div>








<div class="container">
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
<div class="row">
	<?php
foreach($listProducts as $list)
{
	?>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	<div class="ui card">
  <div class="image">
    <img src="img/iphone-6s-plus-home-screen-hero.jpg">
  </div>
  <div class="content">
    <a class="header"><?php echo $list['NAME'];?></a>
    <div class="meta">
    	<span class="date">Published by <strong><?php echo $list['USERNAME'];?> </strong></span>
    </div>
    <div class="description">
    	<?php echo 'Status:     <span class="label label-danger">' . $list['STATUS'] . '</span></br> Used Period:  <span class="label label-info">'.$list['AGE'] .' days</span> </br>' .$list['DESCRIPTION'] ;?>
    </div>
  </div>
  <div class="extra content">
    <a>
<span class="glyphicon glyphicon-bitcoin" style=" text-align: right;
" aria-hidden="true"></span>
      <?php echo 'Price: ' . $list['PRICE']; ?>
    </a>
  </div>
  <button type="button" class="btn btn-warning">Report</button>
</div><br>
</div>
 <?php
}
 ?>

	</div>













</div>










</div>

















<div class="page-footer">
    <div class="page-footer-inner container-fluid container-lf-space">
        <p class="page-footer-copyright">2016 &copy; coorporation. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank"></a></p>
    </div>
    <div class="go2top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->

<!-- END QUICK SIDEBAR TOGGLER -->
	<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
									<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
									<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
									<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
									<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
									<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
									<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
									<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
									<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
			<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
										<script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
							<script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
															<script src="../assets/global/plugins/mapplic/js/hammer.min.js" type="text/javascript"></script>
							<script src="../assets/global/plugins/mapplic/js/jquery.easing.js" type="text/javascript"></script>
							<script src="../assets/global/plugins/mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
							<script src="../assets/global/plugins/mapplic/mapplic/mapplic.js" type="text/javascript"></script>
															<script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
							<script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
															<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
						<!-- END PAGE LEVEL PLUGINS -->


	


<!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->


		


<!-- BEGIN PAGE LEVEL SCRIPTS -->
			<script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
			<script src="../assets/layouts/layout7/scripts/layout.min.js" type="text/javascript"></script>
			<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
			
	<!-- END THEME LAYOUT SCRIPTS -->
	<script>
		$( document ).ready(function() {
		setTimeout(function(){
			<?php if($list['NAME']=="j2 / 4G"){echo "var prod = 1;";}else{echo "var prod = 0;";}?>
			if(prod==1){
            $('#notif').show();
        }
         },5000);

$('#notif').click(function(){
location.href = "#";

			


});

		/*$('#jquery-notific8-notification-1').click(function() {
			location.href = 'www.facebook.com';
		});*/

	});


	</script>
</body>
</html>
 