<style>
/* =========================================================
   BOARD OF DIRECTORS (COMPACT RECTANGULAR CARDS)
========================================================= */

.team-section {
    padding: 50px 0;
}

.organization {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
}

/* Base Card Styling */
.director {
    background: #ffffff;
    border-radius: 12px;
    padding: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 180px; /* Compact card width */
}

.director:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

/* Compact Rectangular Image */
.director img {
    width: 100%;
    height: 170px; /* Smaller image height */
    object-fit: cover;
    border-radius: 8px;
    display: block;
    margin-bottom: 10px;
}

/* Chairman Card (Top Leader) */
.director.chairman {
    width: 210px;
    border-top: 3px solid #006b4f;
}

.director.chairman img {
    height: 200px; /* Slightly larger for top leader */
}

/* Directors Layout Grid */
.directors {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    width: 100%;
    max-width: 1100px;
}

/* Typography for Name & Designation */
.director-name {
    width: 100%;
    padding: 2px 0;
}

.director-name strong {
    display: block;
    font-size: 0.95rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 4px;
    line-height: 1.25;
}

.director.chairman .director-name strong {
    font-size: 1.1rem;
}

.director-name small {
    display: inline-block;
    font-size: 0.75rem;
    font-weight: 600;
    color: #006b4f;
    background: #e6f4ea;
    padding: 2px 10px;
    border-radius: 10px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
</style>

<section class="team-section" id="team">

    <div class="container">

        <div class="section-title">
            <span></span>
            <h2>🌿 Board of Directors</h2>
            <span></span>
        </div>

        @if($managements->isNotEmpty())
            <div class="organization">

                {{-- 1. Chairman (Top Spot) --}}
                @php $chairman = $managements->first(); @endphp
                <div class="director chairman">
                    <img src="{{ asset('storage/' . $chairman->image) }}" alt="{{ $chairman->name }}">
                    <div class="director-name">
                        <strong>{{ $chairman->name }}</strong>
                        <small>{{ $chairman->designation ?? 'Chairman' }}</small>
                    </div>
                </div>

                {{-- 2. Connecting Line & Remaining Directors --}}
                @if($managements->count() > 1)
                    <div class="org-line"></div>

                    <div class="directors">
                        @foreach($managements->skip(1) as $management)
                            <div class="director">
                                <img src="{{ asset('storage/' . $management->image) }}" alt="{{ $management->name }}">
                                <div class="director-name">
                                    <strong>{{ $management->name }}</strong>
                                    <small>{{ $management->designation ?? 'Director' }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        @endif

    </div>

</section>