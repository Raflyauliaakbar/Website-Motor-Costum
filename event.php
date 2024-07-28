<?php
include "./component/header.php";
?>
<!-- Memanggil Komponen Navbar dengan PHP -->
<?php include 'component/nav.php' ?>
    <div class="wrapper d-flex align-items-stretch">
        <?php include 'component/sidebar.php' ?>
        <div class="container mt-3">
<!-- 11. Event -->
<section id="events" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Kegiatan Mendatang</h2>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Touring Pantai Selatan</h5>
                        <p class="card-text"><strong>Tanggal:</strong> 15-17 Juli 2023</p>
                        <p class="card-text"><strong>Lokasi:</strong> Pantai Parangtritis - Pantai Pangandaran</p>
                        <a href="#" class="btn btn-primary">Detail Event</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Workshop Keselamatan Berkendara</h5>
                        <p class="card-text"><strong>Tanggal:</strong> 5 Agustus 2023</p>
                        <p class="card-text"><strong>Lokasi:</strong> Balai Kota</p>
                        <a href="#" class="btn btn-primary">Detail Event</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>