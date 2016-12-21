<?php $con=$this->uri->segment(1); ?>
<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #222222">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">PikaShipper</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>buyer">Want to buy</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>buyable">Buyable</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>#hiw">How It Works</a>
                    </li>
					<li>
                        <a href="<?php echo base_url(); ?>blog">Blog</a>
                    </li>
					<li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>#contact">Contact</a>
                    </li>
                   <li>
                        <a href="aboutus.html">About Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>