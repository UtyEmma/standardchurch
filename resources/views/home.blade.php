@extends('components.index')
@section('title') Home @endsection
@section('content')

    <section class="main-slider">
        <div class="tp-banner-container">
            <div class="tp-banner" style="display: flex; align-items: center; justify-content: center; background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url({{asset('images/main/sbc-5.jpg')}}); background-repeat: no-repeat; background-size: cover; ">
                <div class="d-none">
                    <h2 class="text-center main-text">STANDARD BIBLE <span class="theme_color">CHURCH</span> <br>INTERNATIONAL</h2>
                    <div class="text text-center">Building lives, building destinies</div>
                    <div class="text-center">
                        <a href="/about" class="theme-btn btn-style-one" style="margin-top: 20px;">ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="who-we-are">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title centered">
            	<h2>WHO WE ARE</h2>
                <div class="separator"></div>
            </div>

            <!--Tabs Box / Tabs Style One-->
            <div class="tabs-box tabs-style-one">
            	<!--Tab Buttons-->
                <ul class="tab-buttons clearfix">
                	<li class="tab-btn active-btn" data-tab="#tab-one"><span class="icon flaticon-target"></span> About Us</li>
                    <li class="tab-btn" data-tab="#tab-two"><span class="icon flaticon-envelope"></span> WHAT WE BELIEVE</li>
                </ul>

                <!--Tabs Content-->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="tab-one">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<figure class="image-box"><img src="{{asset('images/main/sbc-1.jpg')}}" alt=""></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner">
                                	<h3>About {{env('APP_NAME')}}</h3>
                                    <div class="strong-text">The Church started on the 2nd December, 2003 at Ijaye Area of Lagos, Nigeria with myself and six other people with an intercessory prayers.</div>
                                    <div class="text">
                                        <p style="text-align: justify;">Today, we have satellite Church in Lagos and Headquarters at 48A, Ogudu Road, Ojota &ndash; Lagos, Nigeria with an internet presence.</p>
                                        <p style="text-align: justify;">From inception to date, the Church move from six different venues before its current Headquarters and started spreading.</p>
                                        <p style="text-align: justify;">The Church was on Eagle Cable Television for 18 months before the television station closed down.</p>
                                        <p style="text-align: justify;">The Church believes in reaching out to widows, teenagers and mentorship for young adult.</p>
                                    </div>
                                    <a href="/about" class="theme-btn btn-style-two">READ MORE ABOUT US</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                        $beliefs = [
                            'The Holy Bible',  'The Godhead', 'Virgin Birth', 'Man’s Fall and Redemption', 'Water Baptism', 'Sanctification', 'Personal Evangelism', 'Divine Healing', 'Man’s Mission on Earth', 'Giving', 'Holy Spirit Baptism', 'Christ Love'
                        ];
                        $values = [
                            'Leadership', 'Evangelism', 'Accountability', 'Diligence'
                        ];
                    @endphp

                    <!--Tab-->
                    <div class="tab" id="tab-two">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<figure class="image-box"><img src="{{asset('images/main/sbc-3.jpg')}}" alt=""></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner">
                                    <h3>WHAT WE BELIEVE</h3>
                                	<div class="row clearfix strong-text">
                                        @foreach ($beliefs as $belief)
                                            <div class="col-sm-6 col-xs-6 col-6 col-md-6">
                                                <p>
                                                    <i class="fa-solid fa-square-check mr-4 text-primary"></i>
                                                    <span style="margin-left: 10px;">{{$belief}}</span>
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>

                                    <a href="/about" class="theme-btn btn-style-two">READ MORE ABOUT US</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('components.sections.ministeries')

    @include('components.sections.corevalues')

    {{-- @include('components.sections.give') --}}

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title centered">
            	<h2>IN PICTURES</h2>
                <div class="separator"></div>
            </div>


            <!--Sortable Masonry-->
            <div class="sortable-masonry mixed-gallery-section">

                <div class="items-container row clearfix">
                    <x-gallery-item :image="asset('images/main/sbc-1.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-2.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-3.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-4.jpg')" />
                </div>
            </div><!--End Sortable Masonry-->
            <div class="w-100 text-center">
                <a href="/gallery" class="theme-btn btn-style-two centered" style="margin: 0 auto;">View More</a>
            </div>
        </div>
    </section>

@endsection
