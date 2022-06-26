<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">

                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="clearfix">
                        	<li><span class="icon flaticon-technology"></span>{{env('MAIN_PHONE_NO')}}</li>
                            <li><span class="icon flaticon-note"></span>{{env('CENTER_FOUR')}}</li>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right">

                    	<!--social-icon-->
                        {{-- <div class="social-icon">
                        	<a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-youtube-play"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                        </div> --}}


                    </div>

                </div>

            </div>
        </div><!-- Header Top End -->


        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="images/logo.png" alt=""></a></div>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li ><a href="/about">About Us</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                    {{-- <li><a href="/give">Give</a></li> --}}
                                    <li><a href="/contact">Contact</a></li>

                                 </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                    </div><!--Nav Outer End-->

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->

            	</div>
            </div>
        </div>

    </header>
    <!--End Main Header -->


    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align bg-white" style="background: white !important;">

        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>

        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper" style="background: white !important;">

            <!-- .logo -->
            <div class="logo text-center" style="background: white !important;">
                <a href="/"><img src="images/logo-2.png" alt=""></a>
            </div><!-- /.logo -->

            <!-- .Side-menu -->
            <div class="side-menu" style="color: #272727 !important;">
            <!-- .navigation -->
                <ul class="navigation" style="color: #272727 !important;">
                    <li><a href="/" style="color: #272727 !important;">Home</a></li>
                    <li ><a href="/about" style="color: #272727 !important;">About Us</a></li>
                    <li><a href="/gallery" style="color: #272727 !important;">Gallery</a></li>
                    {{-- <li><a href="/give" style="color: #272727 !important;">Give</a></li> --}}
                    <li><a href="/contact" style="color: #272727 !important;">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->

            <div class="social-icons">
                {{-- <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul> --}}
            </div>

        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
