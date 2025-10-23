<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binuang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet">
 
    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            line-height: 1.6;
        }

        .topbar a {
            color: #000;
            font-weight: 500;
        }

        .navbar {
            background-color: #fff !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 700;
            color: #198754 !important;
            font-size: 1.3rem;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 6px;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: #198754 !important;
        }

        .active {
            color: #198754 !important;
        }

        .hero .carousel-item img {
            height: 600px;
            object-fit: cover;
            filter: brightness(0.7);
        }

        .hero .carousel-caption {
            bottom: 150px;
            text-align: left;
        }

        .hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-weight: 400;
            position: relative;
            display: inline-block;
        }

        #tentang img {
            transition: transform 0.5s ease;
        }

        #tentang img:hover {
            transform: scale(1.03);
        }

        #layanan .card {
            border: none;
            background: #fff;
            transition: all 0.3s ease;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        #layanan .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        #produk .card {
            border: none;
            transition: all 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        #produk .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        #kontak form input, 
        #kontak form textarea {
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: all 0.3s;
        }

        #kontak form input:focus,
        #kontak form textarea:focus {
            border-color: #198754;
            box-shadow: 0 0 5px rgba(25,135,84,0.4);
        }

        footer {
            background-color: #292929;
            color: #727272;
            padding: 60px 0 20px;
        }

        footer h5 {
            color: rgb(248, 248, 248);
            margin-bottom: 20px;
            font-weight: 300;
        }

        footer a,p, h3 {
            color: #7e7e7e;
            text-decoration: none;
        }

        footer a:hover {
            color: #198754;
        }

        .footer-bottom {
            border-top: 1px solid #ccc;
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            font-size: 0.9rem;
        }

        .social-icon {
            display:inline-block;
            color:#fff;
            margin-right:10px;
            font-size:20px;
            transition:0.3s;
        }
        .social-icon:hover {
            color:#1abc9c;
        }

        /* Section title */
        .section-title h2 {
            font-weight: 700;
            font-size: 2rem;
        }

        #upt {
            position: relative;
        }

        .custom-nav-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #198754;
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            position: absolute;
            top: 55%;
            transform: translateY(-50%);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .swiper-button-prev { left: 20px; margin-top: 12px }
        .swiper-button-next { right: 20px; margin-top: 12px }

        .custom-nav-btn:hover {
            background-color: #145a32;
            transform: translateY(-50%) scale(1.1);
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            display: none !important;
        }

        .swiper-pagination-bullet {
            background: #c7e6d1 !important;
            opacity: 1 !important;
            margin-top: 30px !important;
        }
        .swiper-pagination-bullet-active {
            background: #198754 !important;
        }

        .alumni-section {
            position: relative;
            background: url('image/alumni.jpg');
            color: white;
        }

        .alumni-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.55); /* lapisan gelap */
            z-index: 1;
        }

        .alumni-section .container {
            position: relative;
            z-index: 2;
        }
          .social-box {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            height: 350px !important; /* Tinggi seragam */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .agenda-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .agenda-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }

        /* 📅 Header tanggal bergaya kalender */
        .agenda-date {
            background: linear-gradient(135deg, #28a745, #81c784);
            color: white;
            text-align: center;
            border-radius: 12px 12px 0 0;
            padding: 10px 0;
        }
        .agenda-date .day {
            font-size: 36px;
            font-weight: bold;
            line-height: 1;
        }
        .agenda-date .month {
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ✨ Tombol Detail */
        .agenda-card .btn-detail {
            background-color: #198754;
            color: white;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .agenda-card .btn-detail:hover {
            background-color: #146c43;
        }

        /* 🪟 Modal Desain */
        .modal-content {
            border-radius: 15px;
            overflow: hidden;
        }
        .modal-header {
            background: linear-gradient(135deg, #198754, #4caf50);
            color: white;
        }
        .modal-body img {
            border-radius: 10px;
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
                320: { slidesPerView: 2 },
                576: { slidesPerView: 3 },
                992: { slidesPerView: 6 },
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
</body>
</html>
