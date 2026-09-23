<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBBPP Binuang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet">

    <style>
        :root {
            --bbpp-primary: #15803d;
            --bbpp-primary-hover: #166534;
            --bbpp-primary-light: #f0fdf4;
            --bbpp-primary-border: #bbf7d0;
            --bbpp-emerald: #10b981;
            --bbpp-dark: #0f172a;
            --bbpp-dark-forest: #064e3b;
            --bbpp-gray-bg: #f8fafc;
            --bbpp-gray-subtle: #f1f5f9;
            --bbpp-text-main: #1e293b;
            --bbpp-text-muted: #64748b;
            --bbpp-card-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
            --bbpp-card-shadow-hover: 0 20px 35px -5px rgba(21, 128, 61, 0.12), 0 8px 16px -4px rgba(0, 0, 0, 0.04);
            --bbpp-radius: 16px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--bbpp-text-main);
            background-color: #ffffff;
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        /* Top Notification/Utility Bar */
        .topbar-info {
            background: linear-gradient(90deg, #064e3b 0%, #15803d 100%);
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.82rem;
            font-weight: 500;
            padding: 7px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .topbar-info a {
            color: #ffffff;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .topbar-info a:hover {
            opacity: 0.85;
        }

        /* Navbar Utama */
        .navbar-bbpp {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(21, 128, 61, 0.12);
            box-shadow: 0 4px 25px -4px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            padding: 10px 0;
        }

        .navbar-bbpp .navbar-brand img {
            height: 48px;
            width: auto;
            max-width: 210px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .navbar-bbpp .navbar-brand:hover img {
            transform: scale(1.02);
        }

        /* Nav links */
        .navbar-bbpp .nav-link {
            color: #334155 !important;
            font-weight: 600;
            font-size: 0.94rem;
            padding: 8px 16px !important;
            margin: 0 3px;
            border-radius: 9999px;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .navbar-bbpp .nav-link:hover {
            color: var(--bbpp-primary) !important;
            background: var(--bbpp-primary-light);
        }

        .navbar-bbpp .nav-link.active {
            color: #ffffff !important;
            background: var(--bbpp-primary) !important;
            box-shadow: 0 4px 12px rgba(21, 128, 61, 0.25);
        }

        /* Dropdown Menu */
        .dropdown-menu {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(21, 128, 61, 0.12);
            box-shadow: 0 20px 40px -8px rgba(0, 0, 0, 0.12);
            border-radius: 16px;
            padding: 10px;
            min-width: 230px;
            animation: dropdownFadeIn 0.25s ease-out;
            margin-top: 10px !important;
        }

        @keyframes dropdownFadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-menu .dropdown-item {
            font-size: 0.9rem;
            font-weight: 600;
            color: #334155;
            padding: 9px 16px;
            border-radius: 10px;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
        }

        .dropdown-menu .dropdown-item:hover {
            background: var(--bbpp-primary-light) !important;
            color: var(--bbpp-primary) !important;
            padding-left: 20px;
        }

        .dropdown-menu .dropdown-item:active {
            background: var(--bbpp-primary) !important;
            color: #ffffff !important;
        }

        /* Section Titles */
        .section-header {
            text-align: center;
            margin-bottom: 2.8rem;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--bbpp-primary-light);
            color: var(--bbpp-primary);
            font-size: 0.82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 6px 16px;
            border-radius: 9999px;
            border: 1px solid var(--bbpp-primary-border);
            margin-bottom: 12px;
        }

        .section-title h2 {
            font-weight: 800;
            font-size: 2.2rem;
            color: var(--bbpp-dark);
            letter-spacing: -0.02em;
            margin-bottom: 0.5rem;
        }

        .section-title p {
            color: var(--bbpp-text-muted);
            font-size: 1.05rem;
            max-width: 650px;
            margin: 0 auto;
        }

        /* Hero Carousel */
        .hero {
            position: relative;
            background: #0f172a;
        }

        .hero .carousel-item img {
            height: 520px;
            object-fit: cover;
            filter: brightness(0.92);
            transition: transform 6s ease;
        }

        .hero .carousel-item.active img {
            transform: scale(1.02);
        }

        .hero-carousel-control {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(8px);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.85;
            transition: all 0.3s ease;
            margin: 0 20px;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .hero-carousel-control:hover {
            background: var(--bbpp-primary);
            opacity: 1;
            transform: translateY(-50%) scale(1.08);
            border-color: var(--bbpp-primary);
        }

        /* Cards & Components */
        .modern-card {
            background: #ffffff;
            border-radius: var(--bbpp-radius);
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: var(--bbpp-card-shadow);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .modern-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--bbpp-card-shadow-hover);
            border-color: var(--bbpp-primary-border);
        }

        .img-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: var(--bbpp-radius);
            box-shadow: var(--bbpp-card-shadow);
            transition: all 0.35s ease;
            background: #ffffff;
        }

        .img-wrapper img {
            transition: transform 0.5s ease;
            width: 100%;
            display: block;
        }

        .img-wrapper:hover img {
            transform: scale(1.06);
        }

        .img-title-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(0deg, rgba(6, 78, 59, 0.95) 0%, rgba(6, 78, 59, 0.7) 60%, transparent 100%);
            color: #ffffff;
            padding: 24px 16px 14px;
            text-align: center;
            font-weight: 700;
            font-size: 0.92rem;
            letter-spacing: -0.01em;
            transition: all 0.3s ease;
        }

        .img-wrapper:hover .img-title-overlay {
            background: linear-gradient(0deg, rgba(21, 128, 61, 0.98) 0%, rgba(21, 128, 61, 0.75) 60%, transparent 100%);
        }

        /* Alumni / Counter Section */
        .alumni-section {
            position: relative;
            background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #047857 100%);
            color: white;
            padding: 80px 0;
            overflow: hidden;
        }

        .alumni-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.25) 0%, transparent 50%),
                        radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.08) 0%, transparent 40%);
            pointer-events: none;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.09);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 20px;
            padding: 28px 20px;
            transition: all 0.3s ease;
            text-align: center;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            background: rgba(255, 255, 255, 0.14);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .stat-card .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.15);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 14px;
            color: #86efac;
        }

        .stat-card .stat-number {
            font-size: 2.3rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            line-height: 1.2;
            margin-bottom: 4px;
            color: #ffffff;
        }

        .stat-card .stat-label {
            font-size: 0.95rem;
            color: #d1fae5;
            font-weight: 600;
            margin: 0;
        }

        /* UPT Slider */
        #upt {
            position: relative;
            background: #f8fafc;
        }

        .upt-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: var(--bbpp-card-shadow);
            transition: all 0.3s ease;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .upt-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
            border-color: var(--bbpp-primary-border);
        }

        .upt-card img {
            max-height: 65px;
            max-width: 100%;
            object-fit: contain;
            filter: grayscale(10%);
            transition: filter 0.3s ease;
        }

        .upt-card:hover img {
            filter: grayscale(0%);
        }

        .custom-nav-btn {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 50%;
            color: var(--bbpp-primary);
            font-size: 1rem;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            position: absolute;
            top: 55%;
            transform: translateY(-50%);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .custom-nav-btn:hover {
            background-color: var(--bbpp-primary);
            color: #ffffff;
            border-color: var(--bbpp-primary);
            transform: translateY(-50%) scale(1.1);
        }

        .swiper-pagination-bullet {
            background: #cbd5e1 !important;
            opacity: 1 !important;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background: var(--bbpp-primary) !important;
            width: 24px !important;
            border-radius: 8px !important;
        }

        /* Buttons & Badges */
        .btn-success, .bg-success {
            background-color: var(--bbpp-primary) !important;
            border-color: var(--bbpp-primary) !important;
        }

        .btn-success:hover {
            background-color: var(--bbpp-primary-hover) !important;
            border-color: var(--bbpp-primary-hover) !important;
        }

        .btn-primary {
            background-color: var(--bbpp-primary);
            border-color: var(--bbpp-primary);
        }

        .btn-primary:hover {
            background-color: var(--bbpp-primary-hover);
            border-color: var(--bbpp-primary-hover);
        }

        .btn-outline-primary {
            color: var(--bbpp-primary);
            border-color: var(--bbpp-primary);
        }

        .btn-outline-primary:hover {
            background-color: var(--bbpp-primary);
            border-color: var(--bbpp-primary);
            color: #ffffff;
        }

        /* Footer */
        footer {
            background: linear-gradient(180deg, #064e3b 0%, #032e23 100%);
            color: #e2e8f0;
            padding: 70px 0 25px;
            position: relative;
        }

        footer h5 {
            color: #ffffff;
            font-weight: 700;
            font-size: 1.15rem;
            margin-bottom: 22px;
            letter-spacing: -0.01em;
            position: relative;
            display: inline-block;
        }

        footer h5::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 32px;
            height: 2.5px;
            background: #10b981;
            border-radius: 2px;
        }

        footer a {
            color: #cbd5e1;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        footer a:hover {
            color: #86efac;
            padding-left: 4px;
        }

        .footer-logo-badge {
            background: rgba(255, 255, 255, 0.95);
            padding: 6px 12px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .social-icon-btn {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff !important;
            border-radius: 50%;
            margin-right: 8px;
            font-size: 1.1rem;
            border: 1px solid rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
        }

        .social-icon-btn:hover {
            background: var(--bbpp-emerald);
            color: #ffffff !important;
            transform: translateY(-3px);
            border-color: var(--bbpp-emerald);
            padding-left: 0 !important;
        }

        .footer-stat-box {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 16px;
            padding: 18px;
            text-align: center;
        }

        .footer-stat-item {
            padding: 6px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .footer-stat-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 24px;
            margin-top: 45px;
            color: #94a3b8;
            font-size: 0.88rem;
        }

        /* Calendar Styling */
        #calendar {
            background: #ffffff;
            padding: 24px;
            border-radius: var(--bbpp-radius);
            box-shadow: var(--bbpp-card-shadow);
            border: 1px solid #e2e8f0;
        }

        .fc-toolbar-title {
            font-weight: 800 !important;
            font-size: 1.5rem !important;
            color: var(--bbpp-dark) !important;
        }

        .fc-button {
            background-color: var(--bbpp-primary) !important;
            border-color: var(--bbpp-primary) !important;
            font-weight: 600 !important;
            border-radius: 8px !important;
            text-transform: capitalize;
            padding: 8px 16px !important;
        }

        .fc-button:hover {
            background-color: var(--bbpp-primary-hover) !important;
            border-color: var(--bbpp-primary-hover) !important;
        }

        .fc-button-active {
            background-color: #064e3b !important;
            border-color: #064e3b !important;
        }

        /* Smooth Scrollbar */
        ::-webkit-scrollbar {
            width: 9px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
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
            spaceBetween: 2,
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
                320: {
                    slidesPerView: 2
                },
                576: {
                    slidesPerView: 3
                },
                992: {
                    slidesPerView: 6
                },
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
    {{-- === AOS === --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <!-- <script src="https://cdn.userway.org/widget.js" data-account="FYN6Hghdh8"></script> -->
    <script>
        (function(d) {
            var s = d.createElement("script");
            /* uncomment the following line to override default position*/
            s.setAttribute("data-position", 2);
            /* uncomment the following line to override default size (values: small, large)*/
            /* s.setAttribute("data-size", "small");*/
            /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
            /* s.setAttribute("data-language", "language");*/

            s.setAttribute("data-color", "#0fa00fff");
            /* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
            /* s.setAttribute("data-type", "1");*/
            /* s.setAttribute("data-statement_text:", "Our Accessibility Statement");*/
            /* s.setAttribute("data-statement_url", "http://www.example.com/accessibility")";*/
            /* uncomment the following line to override support on mobile devices*/
            /* s.setAttribute("data-mobile", true);*/
            /* uncomment the following line to set custom trigger action for accessibility menu*/
            /* s.setAttribute("data-trigger", "triggerId")*/
            /* uncomment the following line to override widget's z-index property*/
            /* s.setAttribute("data-z-index", 10001);*/
            /* uncomment the following line to enable Live site translations (e.g., fr, de, es, he, nl, etc.)*/
            s.setAttribute("data-site-language", "null");
            s.setAttribute("data-widget_layout", "full")
            s.setAttribute("data-account", "FYN6Hghdh8");
            s.setAttribute("src", "https://cdn.userway.org/widget.js");
            (d.body || d.head).appendChild(s);
        })(document)
    </script>
    <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 80
        });
    </script>

    <script>
        const bulanIndo = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        const now = new Date();
        const bulan = bulanIndo[now.getMonth()];
        const tahun = now.getFullYear();

        const updateText = document.getElementById("update-text");
        if (updateText) {
            updateText.innerText = `Update ${bulan} ${tahun}`;
        }

        const copyright = document.getElementById("c");
        if (copyright) {
            copyright.innerText = `© BBPP Binuang ${tahun}`;
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
            speak("");//suara
        }, {
            once: true
        });

   
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

    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/id_ID/sdk.js"></script>

    <script async src="https://www.instagram.com/embed.js"></script>

    <script async src="https://www.tiktok.com/embed.js"></script>

    <script>
        window.addEventListener("load", function() {
            if (window.FB) {
                FB.XFBML.parse();
            }
        });
    </script>


</body>

</html>