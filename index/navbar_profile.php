<?php 
include '../../../models/Client.php';
session_start();


//echo $_SESSION['CLIENT']->getName();

?>
	<!-- BEGIN HEADER -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/appTuni/index/">Litsy</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-center">
                <li ><a href="/appTuni/index/">HOME</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">OUR mission</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
<button type="button" class="btn btn-success"><?php  echo $_SESSION['CLIENT']->getUsername(); ?></button>
<button type="button" class="btn btn-danger">Logout</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>



<script type="text/javascript" >
    
function gotmelogin()
{
    document.location.href = "login.php";
}



</script>