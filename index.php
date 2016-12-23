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

                <p style="text-align: center;"><a class="page-scroll btn btn-xl" href="#w">CẦN MUA</a>&nbsp; <a class="page-scroll btn btn-xl" href="#h">MUA HỘ
                </a>
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
                  <a class="page-scroll btn btn-xl" href="buyer.php">CẦN MUA</a>
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
                 <p style="text-align: center;">
                  <a class="page-scroll btn btn-xl" href="buyable.php">MUA HỘ</a>
              </p>
          </div>
      </div>
  </div> 
  <!-- How it Works Section -->
  <section id="hiw" style="background-color: white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">CÁCH HOẠT ĐỘNG</h2>
                <h3 class="section-subheading text-muted">Rất đơn giản!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                           <a class="page-scroll" href="buyer.php">
                            <img class="img-circle img-responsive" src="img/icon/want.png" alt="Want to Buy">
                        </a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Cần mua hộ</h3>
                            <h5 class="subheading"></h5>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Click the image beside to fill a form and we'll help you 
                             find the one who can buy this for you!</p>
                         </div>
                     </div>
                 </li>
                 <li class="timeline-inverted">
                    <div class="timeline-image">
                        <a class="page-scroll" href="buyable.php">
                            <img class="img-circle img-responsive" src="img/icon/buyable.png" alt="buy">
                        </a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>Help to Buy</h3>
                            <h5 class="subheading">From abroad</h5>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Click to the image beside to fill a form that let us know how to interact with you and get your help! 
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
<!-- Contact Section -->
    <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We Care About Your Dream!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
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
