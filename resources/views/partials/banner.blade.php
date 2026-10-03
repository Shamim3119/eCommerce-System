<!-- =========================================================
     DYNAMIC HERO SLIDER
========================================================= -->

<section class="hero">

    <div class="hero-slider">

        @forelse($banners as $banner)

            <div class="hero-slide {{ $loop->first ? 'active' : '' }}">

                <img
                    src="{{ asset('storage/' . $banner->banner_image) }}"
                    alt="{{ $banner->title }}"
                >

                <div class="hero-content">

                    <h1>
                        {{ $banner->sub_title }}
                    </h1>

                    <p>
                        {{ $banner->description }}
                    </p>

                    <a href="#products" class="shop-btn">
                        Shop Now →
                    </a>

                </div>

            </div>

        @empty

            <!-- No banner found -->

            <div class="hero-slide active">

                <img
                    src="{{ asset('assets/images/banner-1.jpg') }}"
                    alt="Dream Valley"
                >

                <div class="hero-content">

                    <h1>
                        Natural Products<br>
                        for a Better Life
                    </h1>

                    <p>
                        Health | Beauty | Wellness | Home Care
                    </p>

                    <a href="#products" class="shop-btn">
                        Shop Now →
                    </a>

                </div>

            </div>

        @endforelse

    </div>


    <!-- Previous -->

    <button
        type="button"
        class="slider-arrow left"
        id="prevSlide">

        ‹

    </button>


    <!-- Next -->

    <button
        type="button"
        class="slider-arrow right"
        id="nextSlide">

        ›

    </button>


    <!-- Dynamic Dots -->

    @if($banners->count() > 1)

        <div class="slider-dots">

            @foreach($banners as $banner)

                <button
                    type="button"
                    class="dot {{ $loop->first ? 'active' : '' }}"
                    data-slide="{{ $loop->index }}">
                </button>

            @endforeach

        </div>

    @endif

</section>



<script>

document.addEventListener("DOMContentLoaded", function () {

    const slides = document.querySelectorAll(".hero-slide");
    const dots = document.querySelectorAll(".dot");

    const prevButton = document.getElementById("prevSlide");
    const nextButton = document.getElementById("nextSlide");

    let currentSlide = 0;
    let slideInterval = null;


    /* =====================================================
       IF THERE ARE NO SLIDES
    ===================================================== */

    if (slides.length === 0) {
        return;
    }


    /* =====================================================
       SHOW SLIDE
    ===================================================== */

    function showSlide(index) {

        if (index >= slides.length) {
            index = 0;
        }

        if (index < 0) {
            index = slides.length - 1;
        }


        /* Remove active */

        slides.forEach(function (slide) {

            slide.classList.remove("active");

        });


        dots.forEach(function (dot) {

            dot.classList.remove("active");

        });


        /* Add active */

        slides[index].classList.add("active");


        if (dots[index]) {

            dots[index].classList.add("active");

        }


        currentSlide = index;

    }


    /* =====================================================
       NEXT
    ===================================================== */

    function nextSlide() {

        showSlide(currentSlide + 1);

    }


    /* =====================================================
       PREVIOUS
    ===================================================== */

    function previousSlide() {

        showSlide(currentSlide - 1);

    }


    /* =====================================================
       START AUTO SLIDER
    ===================================================== */

    function startSlider() {

        if (slides.length <= 1) {
            return;
        }

        slideInterval = setInterval(function () {

            nextSlide();

        }, 5000);

    }


    /* =====================================================
       RESTART SLIDER
    ===================================================== */

    function restartSlider() {

        clearInterval(slideInterval);

        startSlider();

    }


    /* =====================================================
       NEXT BUTTON
    ===================================================== */

    if (nextButton) {

        nextButton.addEventListener("click", function () {

            nextSlide();

            restartSlider();

        });

    }


    /* =====================================================
       PREVIOUS BUTTON
    ===================================================== */

    if (prevButton) {

        prevButton.addEventListener("click", function () {

            previousSlide();

            restartSlider();

        });

    }


    /* =====================================================
       DOTS
    ===================================================== */

    dots.forEach(function (dot, index) {

        dot.addEventListener("click", function () {

            showSlide(index);

            restartSlider();

        });

    });


    /* =====================================================
       INITIALIZE
    ===================================================== */

    showSlide(0);

    startSlider();

});

</script>