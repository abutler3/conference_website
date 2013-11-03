<!DOCTYPE html>
<html>
  <head>
    <title>Roux Academy Conference</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home">

		<section class="container">
			<div class="content row">
        <?php include "_/components/php/header.php"; ?>
        <?php include "_/components/php/snippet-carousel.php"; ?>

				<section class="main col col-lg-8">
          <?php include "_/components/php/article_intro.php"; ?>
          <?php include "_/components/php/article_abouttheartists.php"; ?>

				</section><!-- main -->

				<section class="sidebar col col-lg-4">

				</section><!-- sidebar -->

			</div> <!-- content -->
		<?php include "_/components/php/footer.php"; ?>
		</section> <!-- container -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
