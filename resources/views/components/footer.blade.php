    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	<!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget about-widget">
                                	<div class="footer-logo"><figure><a href="/"><img src="images/logo-3.png" alt=""></a></figure></div>
                                    <div class="widget-content">
                                    	<div class="text">
                                        	<p>Building lives, Building Destinies.</p>
                                            <a href="/about" class="more-link">Learn More <span class="fa fa-angle-double-right"></span></a>
                                        </div>
{{--
                                        <div class="social-links">
                                        	<a href="#"><span class="fa fa-facebook-f"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                            <a href="#"><span class="fa fa-skype"></span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12"></div>
                        </div>
                    </div>

                    <!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12"></div>

                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget contact-widget">
                                	<h2>Contact Us</h2>
                                    <div class="widget-content">
                                    	<ul class="contact-info">
                                            <li>- {{env('CENTER_FOUR')}}</li>
                                            <li>- {{env('CENTER_ONE')}}</li>
                                            <li>{{env('PHONE_NO')}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>

        </div>

        <!--Footer Bottom-->
         <div class="footer-bottom">
         	<div class="auto-container">
            	<div class="copyright-text">Copyright &copy; {{now()->format('Y')}}. All Rights Reserved | GrandScale Digital</div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
