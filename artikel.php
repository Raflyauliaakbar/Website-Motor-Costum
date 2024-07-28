<?php
include "./component/header.php";
?>
<!-- Memanggil Komponen Navbar dengan PHP -->
<?php include 'component/nav.php' ?>
<div class="wrapper d-flex align-items-stretch">
    <?php include 'component/sidebar.php' ?>
    <div class="container mt-3">

        <!-- 10. Artikel -->
        <section id="articles" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Artikel Terbaru</h2>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="./img/artikel.jpg" class="card-img-top" alt="Article 1">
                            <div class="card-body">
                                <h5 class="card-title">Tips Merawat Motor di Musim Hujan</h5>
                                <p class="card-text">Pelajari cara menjaga motor Anda tetap prima saat musim hujan tiba.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="./img/artikel2.jpg" class="card-img-top" alt="Article 2">
                            <div class="card-body">
                                <h5 class="card-title">Persiapan Touring Jarak Jauh</h5>
                                <p class="card-text">Checklist lengkap untuk persiapan touring motor jarak jauh yang aman dan nyaman.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="./img/artikel3.png" class="card-img-top" alt="Article 3">
                            <div class="card-body">
                                <h5 class="card-title">Tren Modifikasi Motor 2023</h5>
                                <p class="card-text">Simak tren modifikasi motor terbaru yang sedang populer di tahun ini.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>