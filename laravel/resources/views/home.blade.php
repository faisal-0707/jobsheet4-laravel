@extends('layout.app')
@section('title', 'Home')
@section('content')

<!-- Hero Section -->
<div class="jumbotron text-center bg-light py-5">
    <h1 class="display-4">Selamat Datang di FaisalApp</h1>
    <p class="lead">Aplikasi sederhana yang menampilkan tentang web yang menarik.</p>
    <a href="/profile" class="btn btn-primary btn-lg">Lihat Profil</a>
</div>

<!-- Dokumentasi Section -->
<h2 class="text-center my-5">Dokumentasi yang Tersedia</h2>
<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <img src="ss1.png" class="card-img-top" alt="Website UMKM">
            <div class="card-body text-center">
                <h5 class="card-title">Website UMKM (Latest Release)</h5>
                <a href="https://kurir.ahmadfaisall.my.id/" class="btn btn-primary" target="_blank">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <img src="ss2.png" class="card-img-top" alt="Website E-commerce">
            <div class="card-body text-center">
                <h5 class="card-title">Website E-commerce Pribadi</h5>
                <a href="https://umkm.ahmadfaisall.my.id/" class="btn btn-primary" target="_blank">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <img src="ss3.png" class="card-img-top" alt="Blogsite Lebron James">
            <div class="card-body text-center">
                <h5 class="card-title">Blogsite Lebron James (Fanmade)</h5>
                <a href="https://crud.ahmadfaisall.my.id/" class="btn btn-primary" target="_blank">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Testimoni</h2>
    
    <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex flex-column align-items-center">
                    <img src="IMG-20220101-WA0003 (1) (1).jpg" class="rounded-circle mb-3" alt="Andi" width="100">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Aplikasi ini sangat membantu dan mudah digunakan!"</p>
                        <footer class="blockquote-footer">Andi</footer>
                    </blockquote>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column align-items-center">
                    <img src="IMG-20220101-WA0003 (1) (1).jpg" class="rounded-circle mb-3" alt="Budi" width="100">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Fitur-fiturnya keren dan desainnya menarik."</p>
                        <footer class="blockquote-footer">Budi</footer>
                    </blockquote>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column align-items-center">
                    <img src="IMG-20220101-WA0003 (1) (1).jpg" class="rounded-circle mb-3" alt="Citra" width="100">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">"Sangat puas dengan performa dan keandalannya."</p>
                        <footer class="blockquote-footer">Citra</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>
</div>

@endsection