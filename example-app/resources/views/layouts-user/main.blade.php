<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBPP Binuang - Balai Besar Pelatihan Pertanian Binuang</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts: Plus Jakarta Sans & Merriweather -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Merriweather:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    
    <!-- Swiper & FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --dinas-green: #157347;
            --dinas-green-dark: #0f5132;
            --dinas-green-deep: #064e3b;
            --dinas-green-light: #f0fdf4;
            --dinas-gold: #ffc107;
            --dinas-gold-dark: #d97706;
            --dinas-gold-light: #fef3c7;
            --dinas-text: #1e293b;
            --dinas-text-muted: #64748b;
            --dinas-border: #cbd5e1;
            --dinas-bg-soft: #f8fafc;
            
            /* Sub-views compatibility */
            --bbpp-primary: #157347;
            --bbpp-primary-hover: #0f5132;
            --bbpp-primary-light: #f0fdf4;
            --bbpp-primary-border: #bbf7d0;
            --bbpp-card-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            --bbpp-card-shadow-hover: 0 10px 24px rgba(21, 115, 71, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: var(--dinas-text);
            background-color: #f1f5f9;
            line-height: 1.68;
            -webkit-font-smoothing: antialiased;
        }

        /* Top Utility Bar (Dinas Style) */
        .topbar-dinas {
            background-color: var(--dinas-green-deep);
            color: #e2e8f0;
            font-size: 0.84rem;
            padding: 8px 0;
            border-bottom: 3px solid var(--dinas-gold);
        }

        .topbar-dinas a {
            color: #f8fafc;
            text-decoration: none;
            transition: color 0.2s;
        }

        .topbar-dinas a:hover {
            color: var(--dinas-gold);
        }

        /* Header Instansi Branding */
        .header-dinas-brand {
            background: #ffffff;
            padding: 16px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .header-dinas-brand img {
            height: 60px;
            width: auto;
            max-width: 250px;
            object-fit: contain;
        }

        .brand-kementan-sub {
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            color: #64748b;
            text-transform: uppercase;
            margin: 0;
            line-height: 1.2;
        }

        .brand-bppsdmp-sub {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--dinas-green-dark);
            text-transform: uppercase;
            margin: 0;
            line-height: 1.3;
        }

        .brand-instansi-main {
            font-size: 1.32rem;
            font-weight: 800;
            color: var(--dinas-green);
            text-transform: uppercase;
            letter-spacing: -0.01em;
            margin: 0;
            line-height: 1.25;
        }

        /* Navigasi Utama Solid Dinas */
        .navbar-dinas {
            background-color: var(--dinas-green) !important;
            padding: 0 !important;
            border-bottom: 3px solid var(--dinas-gold);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
        }

        .navbar-dinas .nav-link {
            color: #ffffff !important;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 14px 18px !important;
            text-transform: uppercase;
            letter-spacing: 0.02em;
            transition: all 0.2s ease;
            border-right: 1px solid rgba(255, 255, 255, 0.12);
        }

        .navbar-dinas .nav-item:first-child .nav-link {
            border-left: 1px solid rgba(255, 255, 255, 0.12);
        }

        .navbar-dinas .nav-link:hover {
            background-color: var(--dinas-green-dark);
            color: #ffffff !important;
        }

        .navbar-dinas .nav-link.active {
            background-color: var(--dinas-green-deep) !important;
            color: var(--dinas-gold) !important;
            border-bottom: 3px solid var(--dinas-gold);
            margin-bottom: -3px;
        }

        /* Dropdown Menu Klasik */
        .navbar-dinas .dropdown-menu {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-top: 3px solid var(--dinas-green);
            border-radius: 0 0 6px 6px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            padding: 6px 0;
            min-width: 250px;
            margin-top: 0 !important;
        }

        .navbar-dinas .dropdown-menu .dropdown-item {
            font-size: 0.9rem;
            font-weight: 600;
            color: #334155;
            padding: 10px 18px;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.15s ease;
        }

        .navbar-dinas .dropdown-menu .dropdown-item:last-child {
            border-bottom: none;
        }

        .navbar-dinas .dropdown-menu .dropdown-item:hover {
            background: var(--dinas-green-light) !important;
            color: var(--dinas-green) !important;
            border-left: 4px solid var(--dinas-green);
            padding-left: 22px;
        }

        /* Running Ticker / Pengumuman Bar */
        .ticker-bar-dinas {
            background: #ffffff;
            border-bottom: 1px solid #cbd5e1;
            font-size: 0.9rem;
        }

        .ticker-badge-dinas {
            background: #dc2626;
            color: #ffffff;
            font-weight: 800;
            font-size: 0.78rem;
            text-transform: uppercase;
            padding: 8px 16px;
            letter-spacing: 0.05em;
        }

        /* Section Title Dinas */
        .dinas-section-title {
            position: relative;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #cbd5e1;
        }

        .dinas-section-title h2, .dinas-section-title h3 {
            font-size: 1.55rem;
            font-weight: 800;
            color: var(--dinas-green-dark);
            margin: 0;
            display: inline-block;
            position: relative;
            text-transform: uppercase;
            letter-spacing: -0.01em;
        }

        .dinas-section-title h2::after, .dinas-section-title h3::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -12px;
            width: 80px;
            height: 3.5px;
            background: var(--dinas-green);
        }

        .dinas-section-title p {
            color: var(--dinas-text-muted);
            font-size: 0.95rem;
            margin: 6px 0 0;
        }

        /* Widget Box Dinas */
        .dinas-widget {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            margin-bottom: 24px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        .dinas-widget-header {
            background: #f8fafc;
            border-bottom: 1px solid #cbd5e1;
            border-left: 5px solid var(--dinas-green);
            padding: 12px 18px;
        }

        .dinas-widget-header h5, .dinas-widget-header h6 {
            font-size: 1rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.02em;
            color: var(--dinas-green-dark);
            margin: 0;
        }

        .dinas-widget-body {
            padding: 18px;
        }

        /* Sambutan Pimpinan Box */
        .pimpinan-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-top: 4px solid var(--dinas-green);
            border-radius: 6px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .pimpinan-img-wrapper {
            border: 3px solid var(--dinas-green);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.12);
        }

        /* Statistik Box Dinas */
        .dinas-stat-box {
            background: linear-gradient(180deg, #157347 0%, #0f5132 100%);
            color: white;
            border: 2px solid #0f5132;
            border-radius: 8px;
            padding: 24px 16px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .dinas-stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--dinas-gold);
            font-family: 'Merriweather', Georgia, serif;
            line-height: 1.1;
            margin-bottom: 6px;
        }

        .dinas-stat-title {
            font-size: 1rem;
            font-weight: 700;
            color: #f0fdf4;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        /* Layanan Box Dinas */
        .layanan-card-dinas {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            overflow: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.04);
        }

        .layanan-card-dinas:hover {
            border-color: var(--dinas-green);
            box-shadow: 0 8px 18px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }

        /* Buttons & Badges */
        .btn-success, .bg-success {
            background-color: var(--dinas-green) !important;
            border-color: var(--dinas-green) !important;
            color: #ffffff !important;
        }

        .btn-success:hover {
            background-color: var(--dinas-green-dark) !important;
            border-color: var(--dinas-green-dark) !important;
        }

        .btn-primary {
            background-color: var(--dinas-green);
            border-color: var(--dinas-green);
        }

        .btn-primary:hover {
            background-color: var(--dinas-green-dark);
            border-color: var(--dinas-green-dark);
        }

        /* Footer Dinas */
        footer.dinas-footer {
            background-color: var(--dinas-green-deep);
            color: #cbd5e1;
            padding: 55px 0 20px;
            border-top: 4px solid var(--dinas-gold);
        }

        .dinas-footer h5 {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            margin-bottom: 20px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--dinas-gold);
            display: inline-block;
        }

        .dinas-footer a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.2s;
        }

        .dinas-footer a:hover {
            color: var(--dinas-gold);
            padding-left: 4px;
        }

        .dinas-footer-bottom {
            background-color: #032e23;
            color: #94a3b8;
            font-size: 0.88rem;
            padding: 18px 0;
            margin-top: 45px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Utility Helpers */
        .modern-card {
            background: #ffffff;
            border: 1px solid #cbd5e1 !important;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.04);
        }

        .section-badge {
            display: inline-block;
            background-color: var(--dinas-green-light);
            color: var(--dinas-green);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 4px;
            border: 1px solid #bbf7d0;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        /* Hero Slider Card Container */
        .hero-slider-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 2px solid #cbd5e1;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        .hero-slider-card-img {
            width: 100%;
            height: 480px;
            object-fit: cover;
            object-position: center;
            display: block;
            margin: 0;
            padding: 0;
        }

        @media (max-width: 991px) {
            .hero-slider-card-img {
                height: 360px;
            }
        }

        @media (max-width: 575px) {
            .hero-slider-card-img {
                height: 220px;
            }
        }

        .hero-caption-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(0deg, rgba(6, 78, 59, 0.92) 0%, rgba(6, 78, 59, 0.6) 50%, transparent 100%);
            padding: 30px 24px 20px;
            color: #ffffff;
        }

        .hero-caption-box {
            max-width: 750px;
        }

        .hero-indicators-dinas {
            bottom: 12px !important;
            margin-bottom: 0;
            gap: 6px;
        }

        .hero-indicators-dinas button {
            width: 30px !important;
            height: 6px !important;
            border-radius: 4px !important;
            background-color: rgba(255, 255, 255, 0.5) !important;
            border: none !important;
            transition: all 0.3s ease !important;
            opacity: 0.7 !important;
        }

        .hero-indicators-dinas button.active {
            width: 48px !important;
            background-color: var(--dinas-gold) !important;
            opacity: 1 !important;
        }

        .hero-carousel-control {
            width: 46px;
            height: 46px;
            background: rgba(6, 78, 59, 0.75);
            border: 2px solid rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            margin: 0 15px;
            opacity: 0.9;
            transition: all 0.25s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .hero-carousel-control:hover {
            background: var(--dinas-green);
            border-color: var(--dinas-gold);
            transform: translateY(-50%) scale(1.1);
            opacity: 1;
        }

        .hover-primary:hover {
            color: var(--dinas-green) !important;
        }
    </style>
</head>

<body>

    @include('partials.navbar-front')

    @yield('content')

    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 6,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: { slidesPerView: 2 },
                576: { slidesPerView: 3 },
                992: { slidesPerView: 6 },
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
    
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });
    </script>

    <script>
        const hariIndo = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const bulanIndo = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        const now = new Date();
        const hari = hariIndo[now.getDay()];
        const tanggal = now.getDate();
        const bulan = bulanIndo[now.getMonth()];
        const tahun = now.getFullYear();

        const fullDateEl = document.getElementById("current-full-date");
        if (fullDateEl) {
            fullDateEl.innerText = `${hari}, ${tanggal} ${bulan} ${tahun}`;
        }

        const updateText = document.getElementById("update-text");
        if (updateText) {
            updateText.innerText = `Update: ${bulan} ${tahun}`;
        }

        const copyright = document.getElementById("c");
        if (copyright) {
            copyright.innerText = `© ${tahun} Balai Besar Pelatihan Pertanian Binuang`;
        }
    </script>

    @yield('js')

    <script>
        function speak(text) {
            if (!text) return;
            const msg = new SpeechSynthesisUtterance(text);
            msg.lang = "id-ID";
            window.speechSynthesis.cancel();
            window.speechSynthesis.speak(msg);
        }

        document.addEventListener('click', function() {
            speak("");
        }, { once: true });

        document.addEventListener('mousemove', function(e) {
            const menu = e.target.closest('.nav-link, .dropdown-item');
            if (!menu) return;
            if (menu.dataset.speaking) return; 
            menu.dataset.speaking = "1";
            const text = menu.dataset.voice || menu.textContent.trim();
            speak(text);
            setTimeout(() => menu.dataset.speaking = "", 800);
        });
    </script>

    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v17.0'
            });
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js"></script>
    <script async src="https://www.instagram.com/embed.js"></script>
    <script async src="https://www.tiktok.com/embed.js"></script>

</body>

</html>