<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Free One Page Theme for Bootstrap 3</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="<?php echo asset_url();?>grayscale/css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" class="<?php echo $site['settings_id']; ?>" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a id="logo" class="navbar-brand" href="#page-top">
		<?php echo $site['logo']; ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
		    <?php foreach($sections as $section) : ?>
		    <?php if ($loggedin): ?>
			<li>
		    <?php else: ?>
			<li class="page-scroll">
		    <?php endif; ?>
		    <a id="<?= $section['content_id'] ?>" href="#<?= $section['content-name'] ?>"><?= $section['content-name'] ?></a> 
                    </li>
		    <?php endforeach; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="intro-header"><?php echo $site['intro-header']; ?></h1>
                        <p class="intro-text"><?php echo $site['intro-text']; ?></p>
                        <div class="intro-content"><?php echo $site['intro-content']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php foreach($sections as $section) : ?>
	<?php if($section['content-type'] == "text") { ?>
          <section id="<?= $section['content-name'] ?>" class="container content-section text-center">
           <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
	 <h2 id="<?= $section['content_id'] ?>" class="header"><?= $section['header'] ?></h2>  
	 <div id="<?= $section['content_id'] ?>" class="text"><?= $section['text'] ?></div>
             </div>
	     </div>
           </section> 
	<?php } else {
	   if($section['content-type'] == "beauty"){ ?>
     <section id="<?= $section['content-name'] ?>" class="content-section text-center">
	<div class="download-section">
           <div class="container">
              <div class="col-lg-8 col-lg-offset-2">
		<h2 id="<?= $section['content_id'] ?>" class="header"><?php echo $section['header']; ?></h2>
		<div id="<?= $section['content_id'] ?>" class="text"><?php echo $section['text']; ?></div>
		<a href="http://startbootstrap.com/grayscale" class="btn btn-default btn-lg">Visit Download Page</a>
	      </div>
	   </div>
	 </div>
     </section>
         <?php
          }
       } ?>
 <?php endforeach; ?>

    <div id="map"></div>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo asset_url();?>grayscale/js/grayscale.js"></script>
    <script src="<?php echo asset_url();?>jquery.jeditable.js"></script>

<?php if ($loggedin): ?>
<script src="<?php echo asset_url();?>grayscale/js/jeditable.content.js"></script>
<?php else: ?>
<?php endif; ?>
</body>
</html>
