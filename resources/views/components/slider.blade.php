<style>
    .slider {
        display: block;
        position: relative;
        width: 100%;
        /* height: fit-content !important; */
        overflow-x: hidden !important;
    }

    img.slider-image {
        width: 100%;
        height: auto;
        cursor: pointer;
    }

    @media screen and (min-width: 998px) {
        img.slider-image {
            max-height: 480px !important;
        }
    }
</style>
<div class="slider"  data-aos="zoom-in-up">
    <div class="slick-item">
        <img class="slider-image" src="{{ url('assets/images/slider/change.png') }}" alt="">
    </div>
    <div class="slick-item">
        <img class="slider-image" src="{{ url('assets/images/slider/agenda.png') }}" alt="">
    </div>
    <div class="slick-item">
        <img class="slider-image" src="{{ url('assets/images/slider/education.png') }}" alt="">
    </div>
    <div class="slick-item">
        <img class="slider-image" src="{{ url('assets/images/slider/unity.png') }}" alt="">
    </div>
    {{-- <div class="slick-item">
        <video width="100%" height="auto" autoplay muted>
            <source src="{{ url('assets/images/slider/change-video.mp4') }}" type="video/mp4">
        </video>
    </div> --}}
</div>
