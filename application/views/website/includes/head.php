<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo meta_info($meta); ?>
    <title><?php echo $site['title']; ?></title>

    <!-- Core CSS -->
    <?php echo core_css($site); ?>

    <!-- Fonts -->
    <?php echo core_fonts($site); ?>
</head>
<body id="page-top" class="<?php echo $site['settings_id']; ?>" data-spy="scroll" data-target=".navbar-custom" style="font-family:<?php echo $site['font']; ?>; background:#eee;">
