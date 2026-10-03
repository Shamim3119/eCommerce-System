<style>

  .cart-btn {
    display: inline-block;
    width: calc(100% - 16px); /* Leaves 8px space on left and right */
    margin: 4px 8px 6px;       /* Adds left & right spacing */
    background: #006b4f;
    color: #ffffff;
    font-size: 10px;
    font-weight: 500;
    padding: 7px 10px;          /* Vertical & Horizontal inner padding */
    border-radius: 12px;
    text-align: center;
    text-decoration: none;
    transition: background 0.3s ease;
}

.cart-btn:hover {
    background: #004d39;
    color: #ffffff;
}
</style>

<section class="products-section" id="products">

    <div class="container">

        <div class="section-title">
            <span></span>
            <h2>🌿 Our Products</h2>
            <span></span>
        </div>

        <!-- Categories -->
        <div class="categories">
            <button class="category active" data-filter="all">
                All
            </button>
            @foreach($categories as $category)
                <button class="category" data-filter="cat-{{ $category->id }}">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>

        <!-- Product Grid -->
        <div class="product-grid">
            @foreach($products as $product)
                <div class="product-card" data-category="cat-{{ $product->category_id }}">

                    <div class="product-image">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    </div>

                    <h3>{{ $product->name }}</h3>

                    <p class="price">
                        @if($product->price)
                            RM {{ number_format($product->price, 2) }}
                            @if($product->unit)
                                <small>/ {{ $product->unit->name }}</small>
                            @endif
                        @endif
                    </p>

                    <!-- View Details Link (Opens in New Tab with Side Spacing) -->
                    <a href="{{ route('product.details', $product->id) }}" 
                       class="cart-btn" 
                       target="_blank" 
                       rel="noopener noreferrer">
                        👁️ View Details
                    </a>

                </div>
            @endforeach
        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const categoryButtons = document.querySelectorAll('.category');
    const productCards = document.querySelectorAll('.product-card');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            // Show / Hide products based on selected category
            productCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>