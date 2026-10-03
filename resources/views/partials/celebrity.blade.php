<style>

/* Celebrity Filters Pill Bar */
.celebrity-filters-wrapper {
  background: #f8f9fa;
  padding: 6px;
  border-radius: 50px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  display: inline-block;
}

.celebrity-filters {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
}

.celebrity-filters .filter-btn {
  padding: 8px 22px;
  border-radius: 30px;
  font-size: 0.9rem;
  font-weight: 600;
  color: #555;
  cursor: pointer;
  transition: all 0.3s ease;
  user-select: none;
}

.celebrity-filters .filter-btn:hover {
  color: #0d6efd;
}

.celebrity-filters .filter-btn.active {
  background: #0d6efd;
  color: #ffffff;
  box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
}

/* Celebrity Card Styling */
.celebrity-card {
  background: #ffffff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.celebrity-card:hover {
  transform: translateY(-7px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.celebrity-img-box {
  position: relative;
  overflow: hidden;
  height: 300px;
}

.celebrity-img-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.celebrity-card:hover .celebrity-img-box img {
  transform: scale(1.06);
}

/* Type Badge */
.type-badge {
  position: absolute;
  top: 12px;
  left: 12px;
  background: rgba(13, 110, 253, 0.85);
  color: #ffffff;
  backdrop-filter: blur(4px);
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 0.5px;
  z-index: 2;
}

/* Card Hover Overlay */
.celebrity-overlay {
  position: absolute;
  inset: 0;
  background: rgba(15, 23, 42, 0.75);
  backdrop-filter: blur(3px);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px;
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 3;
}

.celebrity-card:hover .celebrity-overlay {
  opacity: 1;
}

.celebrity-desc {
  color: #e2e8f0;
  font-size: 0.88rem;
  text-align: center;
  line-height: 1.5;
  margin-bottom: 15px;
}

.celebrity-contacts {
  display: flex;
  gap: 12px;
}

.celebrity-contacts a {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.2);
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  transition: background 0.3s, transform 0.2s;
  text-decoration: none;
}

.celebrity-contacts a:hover {
  background: #0d6efd;
  transform: scale(1.1);
}

/* Info Box */
.celebrity-name {
  font-size: 1.15rem;
  font-weight: 700;
  color: #1e293b;
  margin: 0;
}

.celebrity-designation {
  font-size: 0.85rem;
  color: #0d6efd;
  font-weight: 600;
}

/* Dynamic Filter Animation */
.celebrity-item {
  transition: all 0.4s ease;
}

.celebrity-item.hide {
  display: none !important;
}

</style>

<!-- Celebrity Section -->
<section id="celebrity" class="celebrity-section py-5">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Celebrities</h2>
    <div><span>Explore Our</span> <span class="description-title">Featured Celebrities</span></div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Filter Buttons -->
    <div class="row mb-5">
      <div class="col-12 d-flex justify-content-center">
        <div class="celebrity-filters-wrapper">
          <ul class="celebrity-filters">
            <li class="filter-btn active" data-filter="all">All</li>
            @foreach($celebrityTypes as $type)
              <li class="filter-btn" data-filter="type-{{ $type->id }}">{{ $type->name }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div><!-- End Filter Buttons -->

    <!-- Celebrity Grid -->
    <div class="row gy-4 celebrity-grid">
      @foreach($celebrities as $celebrity)
        <div class="col-xl-3 col-lg-4 col-md-6 celebrity-item type-{{ $celebrity->celebrity_type_id }}" data-aos="fade-up" data-aos-delay="100">
          <div class="celebrity-card">
            <div class="celebrity-img-box">
              <img src="{{ asset('storage/' . $celebrity->image) }}" alt="{{ $celebrity->name }}" class="img-fluid">
              <span class="type-badge">{{ $celebrity->celebrityType->name ?? 'Featured' }}</span>
              
              <div class="celebrity-overlay">
                @if($celebrity->description)
                  <p class="celebrity-desc">{{ \Illuminate\Support\Str::limit($celebrity->description, 110) }}</p>
                @endif
                
                <div class="celebrity-contacts">
                  @if($celebrity->email)
                    <a href="mailto:{{ $celebrity->email }}" title="Email {{ $celebrity->name }}"><i class="bi bi-envelope-fill"></i></a>
                  @endif
                  @if($celebrity->phone)
                    <a href="tel:{{ $celebrity->phone }}" title="Call {{ $celebrity->name }}"><i class="bi bi-telephone-fill"></i></a>
                  @endif
                </div>
              </div>
            </div>

            <div class="celebrity-info text-center p-3">
              <h4 class="celebrity-name">{{ $celebrity->name }}</h4>
              <span class="celebrity-designation">{{ $celebrity->designation }}</span>
            </div>
          </div>
        </div>
      @endforeach
    </div><!-- End Celebrity Grid -->

  </div>

</section><!-- /Celebrity Section -->


<script>

  document.addEventListener('DOMContentLoaded', function () {
  const filterBtns = document.querySelectorAll('.celebrity-filters .filter-btn');
  const celebrityItems = document.querySelectorAll('.celebrity-grid .celebrity-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      // 1. Manage Active Class on Buttons
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filterValue = this.getAttribute('data-filter');

      // 2. Filter Grid Items smoothly
      celebrityItems.forEach(item => {
        if (filterValue === 'all' || item.classList.contains(filterValue)) {
          item.classList.remove('hide');
        } else {
          item.classList.add('hide');
        }
      });
    });
  });
});

</script>