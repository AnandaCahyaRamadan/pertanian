@extends('layouts-user.main')

@section('content')
<section id="home" class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1560472355-536de3962603" class="d-block w-100" alt="Sawah">
            <div class="carousel-caption">
                <h1 class="text-white">Pertanian Modern untuk Negeri</h1>
                <p>Teknologi inovatif membantu petani lebih produktif dan efisien.</p>
                <a href="#layanan" class="btn btn-success rounded-pill px-4 mt-3">Jelajahi Layanan</a>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1473187983305-f615310e7daa" class="d-block w-100" alt="Panen">
            <div class="carousel-caption">
                <h1 class="text-white">Inovasi Digital untuk Petani</h1>
                <p>Solusi berbasis data demi masa depan pertanian Indonesia.</p>
                <a href="#tentang" class="btn btn-warning rounded-pill px-4 mt-3">Tentang Kami</a>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        </div>
    </section>

    <section id="tentang" class="py-5 bg-light">
        <div class="container">
        <div class="section-title">
            <h2>Tentang Kami</h2>
        </div>
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
            <img src="https://png.pngtree.com/thumb_back/fh260/background/20250512/pngtree-farmers-working-in-lush-green-rice-field-at-sunset-southeast-asia-image_17269618.jpg" 
                class="img-fluid rounded-4 shadow-lg" alt="Petani Indonesia">
            </div>
            <div class="col-lg-6">
            <h4 class="fw-semibold mb-3">Membangun Pertanian yang Lebih Baik</h4>
            <p><strong>PertanianMaju</strong> adalah platform digital yang mendukung petani Indonesia dengan solusi berbasis data 
            dan teknologi modern.</p>
            <p>Kami menyediakan pelatihan, pemantauan lahan secara real-time, serta akses pasar untuk meningkatkan kesejahteraan petani.</p>
            <a href="#layanan" class="btn btn-success rounded-pill px-4 mt-2">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        </div>
    </section>

    <section id="layanan" class="py-5">
        <div class="container">
        <div class="section-title">
            <h2>Layanan Kami</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
            <div class="card p-4">
                <i class="bi bi-mortarboard fs-1 text-success"></i>
                <h5 class="mt-3">Pelatihan Petani</h5>
                <p>Kami membantu petani memahami teknologi dan strategi pertanian modern.</p>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="card p-4">
                <i class="bi bi-cloud-sun fs-1 text-success"></i>
                <h5 class="mt-3">Monitoring Cuaca</h5>
                <p>Data cuaca akurat untuk membantu perencanaan dan pengelolaan lahan pertanian.</p>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="card p-4">
                <i class="bi bi-cart4 fs-1 text-success"></i>
                <h5 class="mt-3">Pemasaran Digital</h5>
                <p>Mempertemukan petani dengan pembeli melalui platform e-commerce kami.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section id="produk" class="py-5 bg-light">
        <div class="container">
        <div class="section-title">
            <h2>Produk Unggulan</h2>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4"><div class="card"><img src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc" class="card-img-top"><div class="card-body text-center"><h6>Jagung Unggul</h6></div></div></div>
            <div class="col-md-3 mb-4"><div class="card"><img src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc" class="card-img-top"><div class="card-body text-center"><h6>Jagung Unggul</h6></div></div></div>
            <div class="col-md-3 mb-4"><div class="card"><img src="https://images.unsplash.com/photo-1506806732259-39c2d0268443" class="card-img-top"><div class="card-body text-center"><h6>Pupuk Organik</h6></div></div></div>
            <div class="col-md-3 mb-4"><div class="card"><img src="https://images.unsplash.com/photo-1506806732259-39c2d0268443" class="card-img-top"><div class="card-body text-center"><h6>Pupuk Organik</h6></div></div></div>
        </div>
        </div>
    </section>

    <section id="kontak" class="py-5">
        <div class="container">
        <div class="section-title">
            <h2>Hubungi Kami</h2>
        </div>
        <form class="col-md-8 mx-auto">
            <div class="mb-3"><input type="text" class="form-control" placeholder="Nama Anda"></div>
            <div class="mb-3"><input type="email" class="form-control" placeholder="Email Anda"></div>
            <div class="mb-3"><textarea class="form-control" rows="4" placeholder="Pesan Anda"></textarea></div>
            <button class="btn btn-success px-5 py-2 rounded-pill">Kirim Pesan</button>
        </form>
        </div>
    </section>
@endsection