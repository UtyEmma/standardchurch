@php
    $beliefs = [
        'The Holy Bible',  'The Godhead', 'Virgin Birth', 'Man’s Fall and Redemption', 'Water Baptism', 'Sanctification', 'Personal Evangelism', 'Divine Healing', 'Man’s Mission on Earth', 'Giving', 'Holy Spirit Baptism', 'Christ Love'
    ];
@endphp

<section class="what-we-think">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <h3>WHAT WE BELIEVE</h3>

                    <div class="row clearfix strong-text">
                        @foreach ($beliefs as $belief)
                            <div class="col-sm-6 col-xs-6 col-6 col-md-6">
                                <p>
                                    <i class="fa-solid fa-square-check mr-4 text-primary"></i>
                                    <span class="strong-text" style="margin-left: 10px; font-size: 16px; font-weight: 500;">{{$belief}}</span>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <figure class="image-box"><img src="images/resource/featured-image-7.jpg" alt=""></figure>
            </div>

        </div>
    </div>
</section>
