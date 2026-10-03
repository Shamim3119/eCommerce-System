<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Product Details</title>

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="row g-0">
                    <!-- Image Column -->
                    <div class="col-md-6 bg-white d-flex align-items-center justify-content-center p-3">
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded-3" alt="{{ $product->name }}" style="max-height: 450px; object-fit: contain;">
                    </div>

                    <!-- Details Column -->
                    <div class="col-md-6 p-4 p-md-5 d-flex flex-column justify-content-between bg-white border-start">
                        <div>
                            @if($product->category)
                                <span class="badge bg-primary px-3 py-2 rounded-pill mb-3 fs-6">{{ $product->category->name }}</span>
                            @endif

                            <h1 class="h2 fw-bold text-dark mb-3">{{ $product->name }}</h1>

                            @if($product->price)
                                <h3 class="text-success fw-bold mb-3">
                                    ${{ number_format($product->price, 2) }}
                                    @if($product->unit)
                                        <small class="fs-6 text-muted fw-normal">/ {{ $product->unit->name }}</small>
                                    @endif
                                </h3>
                            @endif

                            <hr class="my-4">

                            <h5 class="fw-semibold text-dark">Description</h5>
                            <p class="text-secondary leading-relaxed">
                                {{ $product->description ?? 'No detailed description available for this product.' }}
                            </p>
                        </div>

                        <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center">
                            <button onclick="window.close()" class="btn btn-outline-secondary px-4">
                                <i class="bi bi-x-lg me-1"></i> Close
                            </button>
                            <a href="{{ url('/') }}#contact" class="btn btn-primary px-4">
                                Contact Us <i class="bi bi-envelope ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>