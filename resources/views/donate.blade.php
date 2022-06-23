@extends('components.index')

@section('title') Give @endsection

@section('content')

    <x-pagetitle title="Give" image="{{asset('images/pages/bible.jpg')}}" />

    <section class="donate-now">
    	<div class="auto-container">
        	<div class="default-form">
                <!--What We Think-->
                <section class="what-we-think">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <h3>WE ENCOURAGE GIVING AS AN ACT OF WORSHIP</h3>
                                    <h4>
                                        Then Isaac sowed in that land and reaped in the same year, a hundred fold and the Lord blessed him.
                                        <br/>
                                        <span style="font-weight: 700;">Genesis 26:12</span>
                                    </h4>
                                    <div class="clearfix" style="margin-top: 20px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="feature-box w-100" style="width: 100%; text-align: left !important;">
                                                    <h4 style="">
                                                        <strong>Bank Account</strong>
                                                    </h4>
                                                    <p>
                                                        {{env('BANK_ACCOUNT_ONE')}} -
                                                        {{env('BANK_NAME_ONE')}}
                                                    </p>
                                                    <p>{{env('APP_NAME')}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="feature-box w-100" style="width: 100%; text-align: left !important;">
                                                    <h4 style="">
                                                        <strong>Bank Account</strong>
                                                    </h4>
                                                    <p>
                                                        {{env('BANK_ACCOUNT_TWO')}} -
                                                        {{env('BANK_NAME_TWO')}}
                                                    </p>
                                                    <p>{{env('APP_NAME')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                <figure class="image-box"><img src="{{asset('images/pages/give.jpg')}}" alt=""></figure>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection
