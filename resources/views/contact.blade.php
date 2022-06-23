@extends('components.index')
@section('title') Contact Us @endsection
@section('content')
    <x-pagetitle title="Contact Us" :image="asset('images/pages/cross.jpg')" />

    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Form Column -->
            	<div class="column form-column pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<div class="default-title"><h3>OUR SERVICE DAYS</h3><div class="separator"></div></div>
                    <p style="font-size: 15px;">Join our powerful worship services</p>
                    <div class="row" style="margin-bottom: 40px;">
                        <div class="col-md-6 col-6">
                            <strong style="font-size: 18px;">Sunday Service</strong>
                            <p style="font-size: 16px;">1st Service – 7:30a.m (GMT+1)</p>
                            <p style="font-size: 16px;">2nd Service – 9:00a.m (GMT +1)</p>
                        </div>
                        <div class="col-md-6 col-6">
                            <strong style="font-size: 18px;">Wednesday</strong>
                            <p style="font-size: 16px;">6:00p.m (GMT+1)</p>
                        </div>
                    </div>


                	<div class="default-title"><h3>OUR WORSHIP CENTERS</h3><div class="separator"></div></div>
                	<!--form-box-->
                    <div class="form-box default-form">
                        <div>
                            <h4>NORTH AMERICA</h4>
                            <ul>
                                <li style="font-size: 15px; margin: 10px 0;">
                                    <i class="fa-solid fa-place-of-worship text-primary" style="margin-right: 10px;"></i>
                                    {{env('CENTER_FOUR')}}
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h4>AFRICA</h4>
                            <ul>
                                <li style="font-size: 15px; margin: 10px 0;">
                                    <i class="fa-solid fa-place-of-worship text-primary" style="margin-right: 10px;"></i>
                                    {{env('CENTER_ONE')}}
                                </li>
                                <li style="font-size: 15px; margin: 10px 0;">
                                    <i class="fa-solid fa-place-of-worship text-primary" style="margin-right: 10px;"></i>
                                    {{env('CENTER_TWO')}}
                                </li>
                                <li style="font-size: 15px; margin: 10px 0;">
                                    <i class="fa-solid fa-place-of-worship text-primary" style="margin-right: 10px;"></i>
                                    {{env('CENTER_THREE')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column info-column pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<div class="default-title"><h3>GET IN TOUCH</h3><div class="separator"></div></div>
                    <div class="info">
                        <div class="row clearfix">
                        	<!--Info Column-->
                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                                        <h4>ADDRESS</h4>
                                        <div class="text">{{env('CENTER_FOUR')}}</div>
                                    </div>
                                </div>
                            </div>

                            <!--Info Column-->
                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                            	{{-- <div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-envelope"></span></div>
                                        <h4>EMAIL</h4>
                                        <div class="text">mail@humanwelfare.com</div>
                                    </div>
                                </div> --}}

                                <div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-technology"></span></div>
                                        <h4>PHONE NO</h4>
                                        <div class="text">{{env('PHONE_NO')}}</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
       	</div>
   	</section>

@endsection
