<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/gif" href="img/icon/favicon.gif" >

  <title>Giới thiệu thành viên nhóm PikaShipper</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Ad Muncher content start --><style type="text/css">#in_ad_col_a, .wsj-responsive-nav-circ-wrap, .displayAd, .adSummary, .footer_bar, .mdcSponsors, #main-quotes-ad, .wideAd, #subscribeNowSmallBarCnt, .nc-exp-ad {display:none;} .ad-frame, .textAd, .video-adContainer {display:none !important;}</style><style type="text/css">#in_ad_col_a, .wsj-responsive-nav-circ-wrap, .displayAd, .adSummary, .footer_bar, .mdcSponsors, #main-quotes-ad, .wideAd, #subscribeNowSmallBarCnt, .nc-exp-ad {display:none;} .ad-frame, .textAd, .video-adContainer {display:none !important;}</style><link rel="stylesheet" href="/helper.css" type="text/css" media="all"><!-- Ad Muncher content end -->

  <script src="js/ie-emulation-modes-warning.js.download"></script>

  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
  <style type="text/css">
  :root .carbonad,
  :root #carbonads-container,
  :root #content > #right > .dose > .dosesingle,
  :root #content > #center > .dose > .dosesingle
  { display: none !important; }
  </style>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/form_1.css">
  <!-- Theme CSS -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="js/jquery.js"></script>
  <script src="js/uploadimg.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/gotop.js"></script>
  <script src="js/validador.js"></script>
  <script language="javascript" src="js/jquery-3.1.1.min.js" ></script>
  <script language="javascript" src="js/ajax_loadingpost.js" ></script>
</head>


<!-- NAVBAR
  ================================================== -->
  <body id="page-top" class="index">
    
    <?php
    include('nav.php');
    ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/uit1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Những Sinh Viên Sáng Tạo </h1>
              <p>Có Ý Tưởng Hay Nhất Năm 2016</p>
              <p><a class="btn btn-lg btn-primary" href="http://www.dut.udn.vn/index.php?option=com_content&view=article&id=1537:nhan-tai-t-vit-b-phong-thanh-cong-ca-startup-vit-nam&catid=67:tin-sinh-vien-trong-nuoc" role="button">Chi Tiết</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/uit2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>StartUp Thành Công</h1>
              <p>Vậy Bí Quyết Là Gì?.</p>
              <p><a class="btn btn-lg btn-primary" href="http://thebusiness.vn/bai-viet/sao-chep-y-tuong-99-startup-thanh-cong-deu-da-tung-lam_135.html" role="button">Tìm Hiểu Thêm</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/uit3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Những Bài Học Của Người Nổi Tiếng StartUp Thành Công.</h1>
              <p>Họ Đã Làm Gì?.</p>
              <p><a class="btn btn-lg btn-primary" href="http://www.proview.vn/bai-viet/startup-nhung-bai-hoc-cua-mot-ceo-da-10-lan-khoi-nghiep-that-bai" role="button">Tìm Hiểu Thêm</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRA4-91t1O1HOKWFqNQ6gA0388RnlOQhEo15VaqNaH7zCHrmRi0" alt="Ảnh cá nhân Quốc Anh" width="140" height="140">
          <h2>Nguyễn Quốc Anh</h2>
          <p>Quốc Anh hiện tại là sinh viên năm 3 tại UIT . Có đam mê design từ nhỏ. Và thành công nhờ theo đuổi kiên trì và có người thầy hướng dẫn . Vai trò của cậu ta là làm cho website của nhóm độc đáo hơn.</p>
          <p><a class="btn btn-default" href="https://www.facebook.com/nguyen.quocanh.775" role="button">Xem Thêm »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6AkzLTEh0Z90L7jBRvfkZWwQyBA0c6-zdF-NicaOuvxXgU3lZ" alt="Ảnh cá nhân Xuân Mai" width="140" height="140">
          <h2>Phạm Xuân Mai</h2>
          <p>Là thành viên nữ duy nhất của nhóm. Mai có khả năng giao tiếp cực chuẩn. Cô ấy kiêm 2 vị trí là Seller + Makerter . </p>
          <p><a class="btn btn-default" href="https://www.facebook.com/pham.xuanmai.7" role="button">Xem Thêm »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/jpeg;base64,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" alt="Ảnh cá nhân Văn Hiền" width="140" height="140">
          <h2>Giáp Văn Hiền</h2>
          <p>Cùng lớp với Quốc Anh, Hiền là một sinh viên khá trầm tính những không phải vì thế mà tài năng của cậu ta được giới hạn. Là coder chính của nhóm , vai trò của Hiền khá quan trọng trong việc đưa người dùng gần lại hơn với Website .<p>
            <p><a class="btn btn-default" href="https://www.facebook.com/icarus.jap" role="button">Xem Thêm. »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Môi trường học tập và nghiên cứu với đầy đủ tiện nghi. <span class="text-muted">Đó là một yếu tố quan trọng ảnh hưởng tới sự thành công.</span></h2>
            <p class="lead"></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-responsive center-block"  src="https://tuyensinh.uit.edu.vn/sites/default/files/uploads/images/uit_2015.jpg" width = "3000" height="3000" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading"><font size = "50" >Sản phẩm mang thương hiệu PIKASHIPPER của 3 bạn trẻ đã ra đời cùng với sự dẫn dắt tận tình của thầy Trình Trọng Tín .</font> <span class="text-muted"></span></h2>
            <p class="lead"></p>
          </div>
          <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block"  src="http://chinhlysohoa.vn/Content/Uploads/images/27246_dinh-huong-phat-trien.jpg" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Định hướng của website hướng tới người dùng trên toàn thế giới . Trước tiên là thâu tóm thị trường Shipper Đông Nam Á. <span class="text-muted">Cùng Ý Tưởng Táo Bạo.</span></h2>
            <p class="lead"></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-responsive center-block"  src="http://3.imimg.com/data3/LX/EM/MY-2766592/generic-online-drop-shipper-250x250.jpg" width="3000" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <span class="copyright">Copyright &copy; 2016 pikashipper.com</span>
              </div>
              <div class="col-md-4">
                <ul class="list-inline social-buttons">
                  <li><a href="https://www.facebook.com/nguyen.quocanh.775"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li><a href="https://www.facebook.com/icarus.jap"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="https://www.facebook.com/pham.xuanmai.7"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-inline quicklinks">
                  <li><a href="ppt.html" style="color: #FDA200">Privacy Policy & Terms of Use</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>

      </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js.download"></script>
    

    <script type="text/javascript">( function(){ window.SIG_EXT = {}; } )()</script><div id="ZyXWUy60" class="ZyXWbs60"><style type="text/css" id="ZyXWAa60">.ZyXWbs60,.ZyXWbs60 div,.ZyXWbs60 a,.ZyXWbs60 a:focus,.ZyXWbs60 a:hover,.ZyXWbs60 a:link,.ZyXWbs60 a:active,.ZyXWbs60 img,.ZyXWbs60 iframe{visibility:visible !important;position:static;display:inline;vertical-align:baseline;text-align:left;cursor:auto;margin:0;padding:0;background:none;border:0;outline:0;-moz-outline:0 none;font-size:12px;line-height:28px;font-weight:normal;font-family:"Trebuchet MS", sans-serif}#ZyXWuJ60{background:url(http://interceptedby.admuncher.com/C349F10D11E049A5/toolbar_sprite.png) no-repeat top left;}#ZyXWuJ60{background-position:-200px 0;position:absolute;top:0;left:0;width:190px;height:42px;text-indent:-9999px;cursor:pointer;}#ZyXWaf60{position:absolute;width:100%;left:0;top:0;}#ZyXWGw60{left:0;position:absolute;top:-42px;width:100%;}#ZyXWLF60{position:fixed;top:0;left:0;width:100%;display:none;}#ZyXWpR60{position:fixed;top:0;left:0;cursor:crosshair;width:100%;height:100%;display:none;}</style><style type="text/css" id="ZyXWTh60" media="print">#ZyXWGw60{display:none}</style><img class="ZyXWbs60" id="ZyXWpR60" src="img/toolbar_transparent.gif" style="z-index: 0;"><div id="ZyXWLF60" class="ZyXWbs60" style="display: none; z-index: 0;"><div id="ZyXWGw60" style="top: -42px;"><iframe height="30" width="100%" frameborder="0" scrolling="no" marginheight="0px" marginwidth="0px" id="ZyXWaf60" src="toolbar_iframe.html" allowtransparency="true"></iframe><a id="ZyXWuJ60" href="http://www.admuncher.com/" target="_top" title="">Ad Muncher</a></div></div></div><svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
  </body>
  </html>