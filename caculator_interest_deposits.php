<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Credit - Loan &amp; Credit Company HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script>
            function calculate()
            {
                p = document.getElementById("amount").value;
                n = document.getElementById("nums").value;
                r = document.getElementById("rate").value;
                result = document.getElementById("result");
                
                result.innerHTML = "Tổng Lãnh:" + (p*n*r/100);
            }
        </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <?php
    include("base/top.php");
    ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Công Cụ</li>
                                <li class="breadcrumb-item active" aria-current="page">Tính lãi tiền gửi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <section class="contact-area section-padding-10-0">
    <div class="container">
        <div class="row">
    <!-- ========== Icon Boxes ========== -->
            <div class="col-12">
                <div class="elements-title mb-30">
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
    <section class="contact-area section-padding-2-0">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-15">
                        <h2>Tính lãi tiền gửi</h2>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-10-0">
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <!-- <h4 class="mb-50">Tính lãi khoản vay</h4> -->
                               
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name = "txtSoTienGui" class="form-control" id="amount" placeholder="Số tiền gửi:">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name ="txtKyHan" class="form-control" id="nums" placeholder="Kỳ hạn:">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name ="txtLaiSuat" class="form-control" id="rate" placeholder="Lãi suất gửi tiết kiệm:">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <p id="result"></p>
                                            </div>
                                         </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button class="btn credit-btn mt-30" onclick="calculate()">Tính Lãi</button>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name ="txtLaiNhan" class="form-control" id="email" placeholder="Lãi:">
                                            </div>
                                        </div>
                                         -->    
                                        <!-- <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name= "txtTongLanh" class="form-control" id="subject" placeholder="Tổng Lãnh:">
                                                </div>
                                        </div> -->
                                      
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   <?php
        include("base/footer.php")
   ?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>