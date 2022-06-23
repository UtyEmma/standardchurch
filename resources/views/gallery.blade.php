@extends('components.index')
@section('title') Gallery @endsection
@section('content')

    <x-pagetitle title="Our Gallery" image="{{asset('images/pages/cross.jpg')}}" />

    <section class="gallery-section">
        <div class="auto-container">

            <!--Sortable Masonry-->
            <div class="sortable-masonry mixed-gallery-section">

                <div class="items-container row clearfix">
                    <x-gallery-item :image="asset('images/main/sbc-1.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-2.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-3.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-4.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-5.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-6.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-7.jpg')" />
                    <x-gallery-item :image="asset('images/main/sbc-8.jpg')" />
                </div>
            </div><!--End Sortable Masonry-->
        </div>
    </section>
@endsection
