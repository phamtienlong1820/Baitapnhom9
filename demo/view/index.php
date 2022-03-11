<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
   <?php include "layout/headerpage.php";?>

</head>
 <!-- khai báo JQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
        // function F1(){
            $.ajax({
                url: "https://api.covid19api.com/summary",
                type: "GET",
                dataType: "JSON",
                success : function(data){
                    console.log(data);
                    console.log(data.Global);

                  
                    // console.log(data.Countries);
                    $.each(data.Countries, function(key, value){
                        //Ghi log thử xuất từng phần tử con trong Countries
                        //console.log(key + " : " + value);
                        
                        $("#country-wise").append("<tr>"+ 
                                                "<td>" +  value.Country + " </td>"+
                                                "<td>" +  value.NewConfirmed + " </td>"+
                                                "<td>" +  value.NewDeaths + " </td>"+
                                                "<td>" +  value.NewRecovered + " </td>"+
                                                "<td>" +  value.TotalConfirmed + " </td>"+
                                                "<td>" +  value.TotalDeaths + " </td>"+
                                                "<td>" +  value.TotalRecovered + " </td>"+
                                                "</tr> ")
                    });

                }
            });
        // }
    </script>
<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php";?>
   
        <!-- Header-->
        <?php //Trang chủ index  với table Người dùng mã giả ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Covid 19 API</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Covid 19 API</a></li>
                                    <li class="active">Hiển thị</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Covid 19 API</strong>&nbsp;
                            </div>
                            <div class="card-body">
                        
                                <table id="country-wise" class="table table-striped table-bordered">
                                    <thead >
                                        <tr>
                                        <th>Country</th>
            <th>NewConfirmed</th>
            <th>NewDeaths</th>
            <th>NewRecovered</th>
            <th>TotalConfirmed</th>
            <th>TotalDeaths</th>
            <th>TotalRecovered</th>
                                        </tr>
                                    </thead>
                                    <tbody id="country-wise">
                                    

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>


                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->

        <?php include "layout/footerpage.php";?>


</body>

</html>