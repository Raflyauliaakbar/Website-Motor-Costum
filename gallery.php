<?php
include "./component/header.php";
?>

<!-- Memanggil Komponen Navbar dengan PHP -->
<?php include 'component/nav.php' ?>
<div class="wrapper d-flex align-items-stretch">
    <?php include 'component/sidebar.php' ?>
    <div class="container mt-3">

        <!-- 7. Gallery Foto -->
        <section id="gallery" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Galeri Foto</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/motor1.jpg" class="card-img-top img-fluid rounded" alt="Foto Kegiatan 1">
                            <div class="card-body text-center">
                                <p class="card-text">Foto Kegiatan 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/motor2.jpg" class="card-img-top img-fluid rounded" alt="Foto Kegiatan 2">
                            <div class="card-body text-center">
                                <p class="card-text">Foto Kegiatan 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/motor3.jpg" class="card-img-top img-fluid rounded" alt="Foto Kegiatan 3">
                            <div class="card-body text-center">
                                <p class="card-text">Foto Kegiatan 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/motor4.jpg" class="card-img-top img-fluid rounded" alt="Foto Kegiatan 4">
                            <div class="card-body text-center">
                                <p class="card-text">Foto Kegiatan 4</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/produk4.jpg" class="card-img-top img-fluid rounded" alt="Foto Kegiatan 5">
                            <div class="card-body text-center">
                                <p class="card-text">Foto Kegiatan 5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/motor5.jpg" class="card-img-top img-fluid rounded" alt="Foto Kegiatan 6">
                            <div class="card-body text-center">
                                <p class="card-text">Foto Kegiatan 6</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
<!-- untuk memanggil footer -->
<?php
include "./component/footer.php";
?>

</html>