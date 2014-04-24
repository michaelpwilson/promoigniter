<!doctype html>
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
    <link href="<?php echo asset_url();?>404.css" rel="stylesheet">

</head>
<body>
<div class="container">
  <div class="row">
        <div class="col-md-12">
            <div class="error-template">
<?php echo form_open("auth/login");?>
<h1><?php echo lang('login_heading');?></h1>
<div class="alert alert-info"><?php echo lang('login_subheading');?></div>
<?php echo $message;?>
  <div class="form-group">
    <?php echo lang('login_identity_label', 'identity');?><br>
    <?php echo form_input($identity);?>
  </div>
  <div class="form-group">
    <?php echo lang('login_password_label', 'password');?><br>
    <?php echo form_input($password);?>
  </div>
  <div class="form-group">
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </div>
  <div class="form-group"><?php echo form_submit('submit', lang('login_submit_btn'));?></div>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>
</div>
</div>
</body>
</html>
