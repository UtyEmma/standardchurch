   <!--How To Contribute Section-->
   @php
       $ministries = [
            "Men’s Ministries", "Women’s Ministries", "Youth Ministries", "Teen Ministries", "Freshword Bible Institute", "Builder’s Academy", "Next Level Anointing", "Relationship Ministries", "Community Impact Project", "Music Ministries", "Leadership/Entrepreneurship Ministry", "Mission Ministries"
];
   @endphp
   <section class="how-to-contribute style-two">
    <div class="auto-container">
        <!--Section Title-->
        <div class="sec-title centered">
            <h2>OUR MINISTERIES</h2>
            <div class="separator"></div>
            {{-- <div class="desc-text">Literally poutine street art next level. Williamsburg shoreditch fingerstache vice migas. Direct trade occupy bushwick mlkshk mixtape swag.</div> --}}
        </div>

        <div class="row clearfix">
            @foreach ($ministries as $ministry)
                <!--Contribution Block Two-->
                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12" >
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" style="background-image: url({{asset('images/background/image-1.jpg')}})" data-wow-delay="0ms">
                        {{-- <div class="icon-box"><span class="flaticon-new-file"></span></div> --}}
                        <div class="content">
                            <h3 style="margin-bottom: 0px !important;">{{$ministry}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
