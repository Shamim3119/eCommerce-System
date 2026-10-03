 <header class="header">
    <div class="container navbar">
        <a href="#" class="logo d-flex align-items-center text-decoration-none gap-2">
            @if($settings->logo)
                <img src="{{ asset('storage/' . $settings->logo) }}" 
                     alt="{{ $settings->company_name }}" 
                     class="logo-img"
                     style="max-height: 40px; width: auto; object-fit: contain;">
            @endif
        <div class="brand-details d-flex flex-column lh-1">
            @if($settings->company_name)
                <span class="brand-name">
                    {{ $settings->company_name }}
                </span>
            @endif

            @if($settings->business_type)
                <span class="brand-type">
                    {{ $settings->business_type }}
                </span>
            @endif

            @if($settings->motto)
                <span class="brand-motto">
                    {{ $settings->motto }}
                </span>
            @endif
        </div>
        </a>

        <button class="menu-toggle" id="menuToggle">
            ☰
        </button>
        @include('navbar')
    </div>
 </header>