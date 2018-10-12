<!DOCTYPE html>
<html>
<head>
	<title>Web Final Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <script type="text/javascript" src="js/jquery.1.11.2.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <!--  <span class="sr-only">Toggle navigation</span> -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Product</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

		<li>
			<form class="form-inline" action="login.php" method="post">  
			  <button type="submit" class="btn btn-default">Sign in </button> OR 
			 </form>
		</li>
 
       	<li>
	      	<form class="form-inline" action="registration.php" method="post" >
	      		<button type="submit" class="btn btn-primary"> Sign up</button>	
	      	</form>
      	</li>
 
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


       <div class="container" style="margin-top: 100px">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Sign In</h1>
                    </div>
                    <div class="panel-body">
                        
                        <form class="form-signin" action="submit_login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" required="required" autofocus="autofocus"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required="required" />
                                </div>
                                
                                 <button type="submit" class="btn btn-sm btn-success">Sign in</button> OR
                                  <a href="registration.php" class="text-center new-account">Create an account </a>
                    
                            </fieldset>
                        
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>

</body>
</html>