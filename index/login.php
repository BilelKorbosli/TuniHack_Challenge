<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8"/>
<title>TuniH4ck</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!--
						<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
									-->
									<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
									<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
										<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
													<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
									<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
			<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
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



<!--
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
-->




<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-container-bg-solid page-md">

<?php 
include("navbar.php");
?>


<style type="text/css">
	#pp{

padding-top: 8%;
padding-bottom: 15%;
	}
</style>


<div class="container"  id="pp">
	


<div class="panel panel-default">
	<div class="panel-body">
<strong>Login</strong><br>	
<?php 
if (isset($_GET['password'])&& $_GET['password']=="false")
{
?>
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>WRONG PASSWORD</strong>
</div>

<?php 
}
?>

<form action="../controllers/CrudClient.php?id=1" method="POST" role="form" >

	<div class="form-group">
		<label for="">Username</label>
		<input type="text" name="username" class="form-control" id="" placeholder="User Name">
	</div>
<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" id="" placeholder="Password">
	</div>
	

	<button type="submit" class="btn btn-danger btn-block">Login</button>
<button type="button" class="btn btn-success btn-block" onclick="red()">Create an account</button>
</form>


<script type="text/javascript">
	function red()
	{
		document.location.href = "register.php";
	}

</script>





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
</body>
</html>
 