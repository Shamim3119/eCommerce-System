<section class="info-section" id="about">

@foreach($abouts as $about)
                   
 

    <div class="container info-grid">


        <div class="info-box">

            <div class="info-icon">
                🎯
            </div>

            <div>
                <h3>Our Vision</h3>
                <p>{!! $about->our_vision !!}</p>

            </div>
        </div>


        <div class="info-box">

            <div class="info-icon">
                🚀
            </div>

            <div>

                <h3>Our Mission</h3>

                <p>
                    {!! $about->our_mission !!}
                </p>

            </div>

        </div>


        <div class="info-box">

            <div class="info-icon">
                🕘
            </div>

            <div>

                <h3>Our History</h3>

                <p>
                    {!! $about->our_history !!}
                </p>

            </div>

        </div>

    </div>
@endforeach
</section>

              