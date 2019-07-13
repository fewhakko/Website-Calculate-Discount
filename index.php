<html lang="en">
    <head>
        <title>Few Dev</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Kanit');

            body {
                font-family: 'Kanit', sans-serif;
            }
        </style>

    </head>
  <body>
            <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                <div class="container">
                    <a href="../" class="navbar-brand">คำนวนเปอร์เซ็น</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/Few.Hakkoz">facebook</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="https://wrapbootstrap.com/?ref=bsw" target="_blank">WrapBootstrap</a>
                        </li>
                    </ul>

                    </div>
                </div>
            </div>
            
            <div class="container">

            <br>

                <div class="card text-dark bg-light mb-3" style="margin-top : 100px;">
                <div class="card-header">เครื่องมือคำนวณการค้นหา%</div>
                <div class="card-body">

    


                  <div class="panel panel-info">
                    <div class="panel-body">
                    <form class="form-horizontal">

                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4 class="alert-heading">คำอธิบาย</h4>
                        <p class="mb-0"> </b>ตัวคำนวณหา%อัตโนมัติ วิธีการใช้เช่น
                    30 เป็นเปอร์เซนต์เท่าไรของ 1000 กดคำนวณโปรแกรมจะช่วยหาคำตอบให้ซึ่งนั่นคือ 3% 
                    <br>
                    ตัวอย่างการใช้เครื่องช่วยคำนวณ : อยากรู้ว่ากำไร 30 บาท จากการลงทุน 1,000 บาท เท่ากับกำไรกี่% กดคำนวณจะได้ 3%</p>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="form-group">
                                <label class="control-label">จำนวนเงิน</label>
                                <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">฿</span>
                                    </div>
                                    <input type="text" id="money" class="form-control" placeholder="10000">
                                    <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 offset-lg-2">
                            <div class="form-group">
                                <label class="control-label">เปอร์เซนต์</label>
                                <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" id="percent" class="form-control" placeholder="199.40">
                                    <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <button onclick="javascript:pexxrcent();" type="button" class="btn btn-success">คำนวณเงิน</button>

                    </form>
                    </div>
                    </div>
                </div>
              </div>

              
              </div>
              <br>
              <h6><center>COPYRIGHT © 2019 ALL SYSTEM BY FEWEIEI</center></h6>
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/func.js"></script>
        <script src="asset/js/sweetalert.min.js"></script>
</body>
</html>