<style>

    /* =========================================================
   ACHIEVER / CELEBRITY GALLERY
========================================================= */

.gallery-section {
    padding: 50px 0;
}

.gallery-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 25px;
}

.gallery-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 190px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.12);
}

.gallery-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 8px;
    display: block;
    margin-bottom: 8px;
}

.gallery-card h4 {
    font-size: 0.95rem;
    font-weight: 700;
    color: #1e293b;
    margin: 4px 0 2px;
    line-height: 1.25;
}

.gallery-card p {
    font-size: 0.8rem;
    color: #64748b;
    margin-bottom: 6px;
    font-weight: 500;
}

.gallery-card span {
    font-size: 0.75rem;
    font-weight: 600;
    color: #006b4f;
    background: #e6f4ea;
    padding: 3px 10px;
    border-radius: 10px;
    display: inline-block;
    max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

</style>
<section class="gallery-section" id="gallery">

    <div class="container">

        <div class="section-title">
            <span></span>
            <h2>🏆 Achiever / Celebrity Gallery</h2>
            <span></span>
        </div>

        <div class="gallery-grid">
            @foreach($celebrities as $celebrity)
                <div class="gallery-card">

                    <img src="{{ asset('storage/' . $celebrity->image) }}" alt="{{ $celebrity->name }}">

                    <h4>{{ $celebrity->name }}</h4>

                    @if(!empty($celebrity->user_id))
                        <p>ID: {{ $celebrity->user_id }}</p>
                    @elseif(!empty($celebrity->id))
                        <p>ID: {{ $celebrity->id }}</p>
                    @endif

                    @if(!empty($celebrity->description))
                        <span>★ {{ $celebrity->description }}</span>
                    @elseif(!empty($celebrity->designation))
                        <span>★ {{ $celebrity->designation }}</span>
                    @endif

                </div>
            @endforeach
        </div>

    </div>

</section>