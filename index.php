<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="AdMOar">

    <title>AdMoar - coming soon</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="wrapper">

	<div >
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<h1>AdMoar</h1>
					<h2 class="subtitle">We're working hard to bring our website and we'll be ready to launch soon.</h2>
					<div id="countdown"></div>

					<?php /*if(isset($_GET['m']) && $_GET['m'] =='success'){?>
					<div class="alert alert-success" role="alert">Thanks for your interest, we will notify you soon.<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></div>
					<?php }?>
					<?php if(isset($_GET['m']) && $_GET['m'] =='invalid'){?>
					<div class="alert alert-danger" role="alert">Please enter a valid email address.<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></div>
					<?php }?>

					<form class="form-inline signup" role="form" action="/email.php" method="post">
					  <div class="form-group">
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
					  </div>
					  <button type="submit" class="btn btn-theme">Get notified!</button>
					</form>		
					*/?>
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						<p class="copyright">Copyright &copy; 2015 - <a href="http://admoar.com">AdMoar.com</a></p>
				</div>
			</div>		
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
  $('#countdown').countdown('2015/03/10', function(event) {
    $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
  });
</script>
  </body>
</html>
