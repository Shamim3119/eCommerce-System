<style>
/* =========================================================
   UPDATED FOOTER CSS (REDUCED TEXT SIZES)
========================================================= */

/* Main Footer Container */
.footer {
    background-color: #003325;
    color: #e2e8f0;
    padding-top: 45px;
    font-size: 0.82rem;
    line-height: 1.5;
}

/* Footer Layout Grid */
.footer-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    padding-bottom: 35px;
}

/* 1. Brand Logo, Company Name & Motto */
.footer-brand {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 6px;
}

.footer-brand .brand-link {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
}

.footer-brand .footer-logo {
    max-height: 40px;
    width: auto;
    object-fit: contain;
    display: block;
}

.footer-brand .company-name {
    color: #ffffff;
    font-size: 1.05rem;
    font-weight: 700;
    margin: 0;
    line-height: 1.2;
    letter-spacing: 0.2px;
}

.footer-brand .tagline {
    color: #a3b8b0;
    font-size: 0.82rem;
    font-weight: 500;
    margin-top: 4px;
    line-height: 1.35;
}

/* 2. Generic Footer Columns */
.footer-column {
    display: flex;
    flex-direction: column;
}

.footer-column h4 {
    color: #ffffff;
    font-size: 0.92rem;
    font-weight: 600;
    margin-bottom: 10px;
    margin-top: 0;
    display: flex;
    align-items: center;
    gap: 5px;
}

.footer-column h4:nth-of-type(2) {
    margin-top: 16px;
}

.footer-column p {
    color: #cbd5e1;
    margin: 0 0 10px 0;
    font-size: 0.82rem;
    line-height: 1.55;
}

/* Links inside Address & Contact columns */
.footer-column p a {
    color: #cbd5e1;
    text-decoration: none;
    transition: color 0.25s ease;
}

.footer-column p a:hover {
    color: #2ec4b6;
    text-decoration: underline;
}

/* 3. Social Media Icon Links */
.footer .social {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
    margin-top: 4px;
}

.footer .social a {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer .social a:hover {
    background: #006b4f;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
}

/* 4. Copyright Bottom Bar */
.footer .copyright {
    border-top: 1px solid rgba(255, 255, 255, 0.12);
    padding: 16px 12px;
    text-align: center;
    color: #94a3b8;
    font-size: 0.78rem;
    background-color: rgba(0, 0, 0, 0.15);
}

/* =========================================================
   RESPONSIVE FOOTER STYLES
========================================================= */

@media (max-width: 992px) {
    .footer-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }
}

@media (max-width: 576px) {
    .footer-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .footer-brand .brand-link {
        flex-direction: row;
    }

    .footer .copyright {
        font-size: 0.75rem;
        padding: 14px 10px;
    }
}
</style>

<footer class="footer" id="contact">

    <div class="container footer-grid">

        <!-- 1. Brand Logo, Company Name & Tagline -->
        <div class="footer-brand">
            <a href="{{ url('/') }}" class="brand-link">
                @if(!empty($settings->logo))
                    <img src="{{ asset('storage/' . $settings->logo) }}" 
                        alt="{{ $settings->company_name ?? 'Dream Valley' }}" 
                        class="footer-logo">
                @else
                    <img src="{{ asset('assets/images/logo-white.png') }}" 
                        alt="{{ $settings->company_name ?? 'Dream Valley' }}" 
                        class="footer-logo"
                        onerror="this.style.display='none'">
                @endif

                <h3 class="company-name">{{ $settings->company_name ?? 'Dream Valley' }}</h3>
            </a>

            <p class="tagline">{{ $settings->tagline ?? 'We Progress Together' }}</p>
        </div>

        <!-- 2. Office Address -->
        <div class="footer-column">
            <h4>📍 Our Address</h4>
            <p>
                @if(!empty($settings->address))
                    {!! nl2br(e($settings->address)) !!}
                @else
                    Dream Valley International Business<br>
                    Shah Alam, Selangor, Malaysia<br>
                    (Kampung Jawa Office)
                @endif
            </p>
        </div>

        <!-- 3. Contact Numbers & Email -->
        <div class="footer-column">
            <h4>☎ Contact Us</h4>
            <p>
                @if(!empty($settings->phone))
                    <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a><br>
                @endif
                @if(!empty($settings->phone_2))
                    <a href="tel:{{ $settings->phone_2 }}">{{ $settings->phone_2 }}</a><br>
                @endif
                @if(!empty($settings->email))
                    <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                @endif
            </p>
        </div>

        <!-- 4. Website Link & Social Icons -->
        <div class="footer-column">
            <h4>🌐 Website</h4>
            <p>
                <a href="{{ $settings->website ?? 'https://www.dreamvalleyint.com' }}" target="_blank" rel="noopener noreferrer">
                    {{ str_replace(['http://', 'https://'], '', $settings->website ?? 'www.dreamvalleyint.com') }}
                </a>
            </p>

            <h4>Follow Us</h4>
            <div class="social">
                @if(!empty($settings->facebook))
                    <a href="{{ $settings->facebook }}" target="_blank" rel="noopener noreferrer" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                @endif

                @if(!empty($settings->youtube))
                    <a href="{{ $settings->youtube }}" target="_blank" rel="noopener noreferrer" title="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                @endif

                @if(!empty($settings->instagram))
                    <a href="{{ $settings->instagram }}" target="_blank" rel="noopener noreferrer" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                @endif

                @if(!empty($settings->whatsapp))
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}" target="_blank" rel="noopener noreferrer" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                @endif

                @if(!empty($settings->tiktok))
                    <a href="{{ $settings->tiktok }}" target="_blank" rel="noopener noreferrer" title="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                @endif
            </div>
        </div>

    </div>

    <!-- Copyright Footer Bar -->
    <div class="copyright">
        © {{ date('Y') }} {{ $settings->company_name ?? 'Dream Valley International Business' }}.
        All Rights Reserved.
        &nbsp; | &nbsp;
        {{ $settings->tagline ?? 'We Progress Together' }}
    </div>

</footer>