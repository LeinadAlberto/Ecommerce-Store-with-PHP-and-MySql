<?php 
$path = TemplateController::path();
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Top Navigation + Sidebar</title>

        <link rel="shortcut icon" href="#" type="image/x-icon">
        <!-- Google Font: Source Sans Pro -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
        <!-- =============
                CSS
        ============== -->
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- JDSlider -->
        <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/jdSlider/jdSlider.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/adminlte/adminlte.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/template.css">

        <!-- =============
                JS
        ============== -->
        <!-- jQuery -->
        <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- JDSlider -->
         <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
        <script src="<?php echo $path ?>views/assets/js/plugins/jdSlider/jdSlider.js"></script>

    </head>

    <body class="hold-transition sidebar-collapse layout-top-nav">

        <div class="wrapper">

            <?php 
            
                include "modules/top.php"; 

                /* Navbar */
                include "modules/navbar.php"; 
                /* /.navbar */
                
                /* Main Sidebar Container */
                include "modules/sidebar.php";
                /* /.main sidebar container */

                /* Content Wrapper. Contains page content */
                include "pages/home/home.php";
                /* /.content-wrapper */
            
                /* Main Footer */
                include "modules/footer.php"; 
                /* /.main footer */

            ?>

        </div><!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- AdminLTE App -->
        <script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>

    </body>

</html>
