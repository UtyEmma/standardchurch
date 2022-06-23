    <!--Map Section-->
    {{-- <section class="map-section">
    	<div class="map-outer">

            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="10"
                data-lat="23.815811"
                data-lng="90.412580"
                data-type="roadmap"
                data-hue="#fc721e"
                data-title="Dhaka"
                data-content="Dhaka 1000-1200, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
                style="height:480px;">
            </div>

        </div>
    </section> --}}

    @push('script')
        <script src="http://maps.google.com/maps/api/js?key="></script>
        <script src="js/map-script.js"></script>
    @endpush
