<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanian Maju</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            font-weight: 700;
            color: #198754;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #ffc107;
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
    </style>
</head>
<body>

    @include('partials.navbar-front')
    
    @yield('content')

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
