<?php
//Bắt đầu Session cho Masterpage quản trị


?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
    <script src="js/all.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">


    
<head>
   <?php include "layout/headerpage.php";?>

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php";?>
   
        <!-- Header-->

        <?php
        //Thiết lập Masterpage
        if(isset($_GET["page_layout"])){
            switch ($_GET["page_layout"]) {
                case "thoitiet": include_once "thoitiet.php";
                break;
                case "globaldata": include_once  "globaldata.php";
                break;
            }
        }
        else{
            include_once  "index.php";
        }


        
         ?>

        <?php include "layout/footerpage.php";?>


</body>

</html>