<!DOCTYPE html>
<html>
  <head>
   
      
      
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Admin</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
            <form action="signup-validate.php" method="post">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Daftar Admin </h6>
			                <input class="form-control" type="text"  name="namapengguna" placeholder="Nama Pengguna">
			                <input class="form-control" type="password" name="katalaluan" placeholder="Kata Laluan">
			                <input class="form-control" type="password" name="sahkatalaluan" placeholder="Sah Kata Laluan">
			                <div class="action">
                                
                                <button type="submit" name="submit" class="btn btn-primary signup">
                                <i class=""></i> Masuk
                                </button>
                                
			                    
			                </div>                
			            </div>
			        </div>
                

			        <div class="already">
			            <p>Sudah mempunyai akaun?</p>
			            <a href="login.php">Log Masuk</a>
			        </div>
			    </div>
			</div>
            </form>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>