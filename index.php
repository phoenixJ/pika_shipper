<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
?>
<body id="page-top" class="index">
    <?php
    include('nav.php');
    ?>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Shipping Service!</div>
                <div class="intro-heading">WE'll Bring The Best To You!</div>

                <p style="text-align: center;"><a class="page-scroll btn btn-xl" href="#w">CẦN MUA</a>&nbsp; 
                    <a class="page-scroll btn btn-xl" href="#h">MUA HỘ</a>
                </p>
            </div>
        </div>
    </header>
    <!-- Want to Buy Section -->
    <section id="w">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CẦN MUA</h2>
                    <h3 class="section-subheading text-muted" style="line-height: 2">Bạn ngồi ở Việt Nam, muốn mua một vài thứ ở nước ngoài, 
                       <br>nhưng lại không biết nhờ ai? Bạn muốn mua hàng nước ngoài với giá bán tận gốc? 
                       <br>Bạn muốn dùng hàng nước ngoài được mang từ nước ngoài về chứ không phải hàng nước ngoài bán ở trong nước? 
                       <br>Chỉ cần 1 phút đăng Yêu Cầu Mua Hộ, 
                       <br>PickShipper sẽ giúp bạn có được món đồ mong muốn trong thời gian ngắn nhất. Hãy đăng yêu cầu mua hộ ngay.</h3>
                       <p style="text-align: center;">
                        <!--<a class="page-scroll btn btn-xl" href="buyer.php">CẦN MUA</a>-->
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Buyable Section -->
    <section id="h" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MUA HỘ</h2>
                    <h3 class="section-subheading text-muted" style="line-height: 2">Bạn sắp bay từ nước ngoài về Việt Nam và bạn được phép mang 40kg hành lý, 
                       <br>nhưng bạn chẳng có gì để mang, thật lãng phí. Thế thì sao không nhận mua hộ một vài món đồ và mang về để có thêm thu nhập.
                       <br>Bạn đang là du học sinh và rất nhớ nhà, muốn đi về Việt Nam mỗi tháng một lần, nhưng vé máy bay thật đắt. 
                       <br>Thế thì sao bạn không nhận mua hộ đồ để kiếm ít tiền, bù lại tiền vé máy bay.Hãy bắt đầu nhận mua hộ ngay từ bây giờ.</h3>
                       <p style="text-align: center; padding-bottom: 80px;">
                        <!--<a class="page-scroll btn btn-xl" href="buyable.php">MUA HỘ</a>-->
                    </p>
                </div>
            </div>
        </div> 
    </section>
    <!-- How it Works Section -->
    <section id="hiw" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">HOW TO USE</h2>
                    <h3 class="section-subheading text-muted">Its very simple!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <a class="page-scroll" href="#">
                                    <img class="img-circle img-responsive" src="img/icon/want.png" alt="Want to Buy">
                                </a>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Want to buy</h3>
                                    <h5 class="subheading"></h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Login and Click the image beside to fill a form and we'll help you 
                                       find the one who can buy this for you!</p>
                                   </div>
                               </div>
                           </li>
                           <li class="timeline-inverted">
                            <div class="timeline-image">
                                <a class="page-scroll" href="#">
                                    <img class="img-circle img-responsive" src="img/icon/buyable.png" alt="buy">
                                </a>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Help to Buy</h3>
                                    <h5 class="subheading">From abroad</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Login and Click to the image beside to fill a form that let us know how to interact with you and get your help! 
                                       <br>Or you can click here to find another need and make it satisfied</p>
                                   </div>
                               </div>
                           </li>
                           <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/icon/proc.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Processing</h3>
                                    <h5 class="subheading">Connect & contact</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">We'll contact the people using our service and decide who help to buy and when the packet will be send to the buyer!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/icon/done.png" alt="Done Deal">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Last Stage</h4>
                                    <h5 class="subheading"></h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">All the deal will be dealt and hope you will come back to us again :)</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('footer.php');
    ?>
</body>
</html>
