<?php
include "./component/header.php";
?>
<!-- Memanggil Komponen Navbar dengan PHP -->
<?php include 'component/nav.php' ?>
<div class="wrapper d-flex align-items-stretch">
    <?php include 'component/sidebar.php' ?>
    <div class="container mt-3">

        <!-- 5. Profile, Pengalaman Perusahaan dan Kelebihan Perusahaan -->
        <section id="profile" class="py-8 bg-light">
            <div class="container">
                <div class="card-body shadow-lg p-4 mb-5 bg-white rounded">
                    <h2 class="text-center mb-4">Profil dan Pengalaman</h2>
                    <div class="row text-center">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">Profil</h3>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i> Didirikan tahun 2010</li>
                                        <li><i class="fas fa-users"></i> 200+ anggota aktif</li>
                                        <li><i class="fas fa-map-marker-alt"></i> 5 cabang di seluruh Indonesia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">Pengalaman</h3>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-road"></i> 10+ tour lintas pulau</li>
                                        <li><i class="fas fa-flag-checkered"></i> 50+ kampanye keselamatan berkendara</li>
                                        <li><i class="fas fa-heart"></i> 100+ acara amal dan sosial</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">Kelebihan</h3>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-handshake"></i> Komunitas yang inklusif dan beragam</li>
                                        <li><i class="fas fa-shield-alt"></i> Fokus pada keselamatan dan tanggung jawab sosial</li>
                                        <li><i class="fas fa-industry"></i> Jaringan luas dengan industri otomotif</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="gallery.php" class="btn btn-primary btn-lg">Lihat Galeri Kami</a>
                    </div>
                </div>
            </div>
        </section>
        </body>
        <!-- untuk memanggil footer -->
        <?php
        include "./component/footer.php";
        ?>

        </html>