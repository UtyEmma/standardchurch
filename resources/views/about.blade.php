@extends('components.index')

@section('title') About Us @endsection

@section('content')

    <x-pagetitle title="About Us" image="{{asset('images/pages/bible.jpg')}}" />

    <!--About Us-->
    <section class="about-us-section">
    	<div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
            	<h2>WHO WE ARE</h2>
                <div class="separator"></div>
                {{-- <div class="desc-text">Bushwick viral skateboard cold-pressed godard. Cliche narwhal austin, godard stumptown butcher pour-over umami offal art party kitsch flexitarian artisan chia. Sartorial narwhal ethical listicle meggings cardigan four dollar toast. </div> --}}
            </div>
            <!--Content Box-->
            <div class="content-box">
            	<div class="row clearfix">
                	<!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    	<div class="inner-box">
                            <h3 style="font-size: 24px;
                            line-height: 1.3em;
                            font-weight: 700;
                            margin-bottom: 15px;
                            color: #1f9bcc;">About {{env('APP_NAME')}}</h3>

                        	<div class="text-content">
                                    <p style="text-align: justify;">The Church started on the 2nd December, 2003 at Ijaye Area of Lagos, Nigeria with myself and six other people with an intercessory prayers.</p>
                                    <p style="text-align: justify;">Today, we have satellite Church in Lagos and Headquarters at 48A, Ogudu Road, Ojota &ndash; Lagos, Nigeria with an internet presence.</p>
                                    <p style="text-align: justify;">From inception to date, the Church move from six different venues before its current Headquarters and started spreading.</p>
                                    <p style="text-align: justify;">The Church was on Eagle Cable Television for 18 months before the television station closed down.</p>
                                    <p style="text-align: justify;">The Church believes in reaching out to widows, teenagers and mentorship for young adult.</p>
                                    <p style="text-align: justify;">In the year 2013, we launched an Outreach to men, to teach leadership principles to men to be financial responsible, physically dependable and spiritually matured.</p>
                                    <p style="text-align: justify;">We started our Easter Camp meeting in the year 2018 based on Proverbs 4:11 saying <strong><em>&ldquo;I have taught thee in the way of wisdom; I have led thee in right paths</em></strong>.<strong><em>&rdquo; </em></strong>that birth a spiritual revival to our community.</p>
                                    <p style="text-align: justify;">The mandate of the Church is to raise the standard of God&rsquo;s word, building lives and destiny in the nations of the world.</p>
                                    <p style="text-align: justify;">Achieving this entails Apostolic input, prophetic insight and the teaching grace.</p>
                                    <p style="text-align: justify; font-weight: 600;">The Presiding and Founding Pastor Victor Bozimo has published over ten (10) books:</p>
                                    <ul style="list-style-type: circle;">
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Wisdom for Financial Prosperity</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Enforcing your Victory</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Dreamer&rsquo;s World</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Partnership with God</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> And God Said</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> 24 Ways God Speaks</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Fresh Insight into Praying&nbsp;</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Leadership, Headship and Partnership</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Life Nugget &ndash; Leadership</li>
                                        <li><i class="fa-solid fa-square-check text-primary" style="margin-right: 10px;"></i> Life Nugget &ndash; Relationship</li>
                                    </ul>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    	<figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img src="{{asset('images/main/sbc-1.jpg')}}" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>
    </section>

    @include('components.sections.belief')

    @include('components.sections.corevalues')

    @include('components.sections.ministeries')

    @include('components.sections.give')
@endsection
