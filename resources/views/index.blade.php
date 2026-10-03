<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $settings->company_name }}</title>

      <!-- Favicons -->
    <link href="{{ asset('storage/' . $settings->favicon) }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- =========================================================
     HEADER
========================================================= -->

@include('components.header')

<!-- =========================================================
     HERO
========================================================= -->

@include('partials.banner')


<!-- =========================================================
     PRODUCTS
========================================================= -->
@include('partials.product')


<!-- =========================================================
     BOARD OF DIRECTORS
========================================================= -->

@include('partials.management')


<!-- =========================================================
     ACHIEVER GALLERY
========================================================= -->
@include('partials.gallery')
 

<!-- =========================================================
     VISION / MISSION / HISTORY
========================================================= -->

@include('partials.about')



<!-- =========================================================
     FOOTER
========================================================= -->
  @include('components.footer')



<script>

const menuToggle = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");

menuToggle.addEventListener("click", function () {

    navMenu.classList.toggle("show");

});


document.querySelectorAll(".category").forEach(button => {

    button.addEventListener("click", function () {

        document.querySelectorAll(".category")
            .forEach(btn => btn.classList.remove("active"));

        this.classList.add("active");

    });

});

</script>

</body>
</html>