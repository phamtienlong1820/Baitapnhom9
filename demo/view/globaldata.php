<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // function F1(){
    $.ajax({
        url: "https://api.covid19api.com/summary",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            console.log(data);
            console.log(data.Global);

            //Ghi log thử truy cập phần tử trong dãy JSON từ API covid19api 
            //console.log(data.Global.NewConfirmed);

            //Xuất dữ liệu vào bảo Global Data
            $.each(data.Global, function(key, value) {
                //Ghi log thử xuất từng phần tử con trong Global
                //console.log(key + " : " + value);
                $("#global-wise").append("<tr><td> " + key + "</td><td>" + value + " </td></tr> ")
            });

          
        }
    });
    // }
</script>


        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Global Data</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Global Data</a></li>
                                    <li class="active">Hiển thị </li>
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
                <?php //Table hiển thị các thông tin sản phẩm trong database ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Global Data</strong>&nbsp;
                            </div>
                            <div class="card-body">

                           
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead id="global-wise">
                                       
                                    </thead>
                                

                                </table>

                            </div>

                        </div>

                    </div>


                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->

