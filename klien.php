<?php
include "./component/header.php";
?>
<!-- Memanggil Komponen Navbar dengan PHP -->
<?php include 'component/nav.php' ?>
<div class="wrapper d-flex align-items-stretch">
    <?php include 'component/sidebar.php' ?>
    <div class="container mt-3">

        <section id="clients" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Klien dan Mitra Kami</h2>
                <div class="row">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="card text-center">
                            <img src="./img/klien1.jpg" alt="Client 1" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Client 1</h5>
                                <p class="card-text">Perusahaan A adalah pemimpin pasar dalam teknologi inovatif dan telah menjadi mitra kami sejak 2015.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="card text-center">
                            <img src="./img/klien2.jpg" alt="Client 2" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Client 2</h5>
                                <p class="card-text">Perusahaan B dikenal karena solusi IT terintegrasi dan telah bekerja sama dengan kami selama lebih dari 3 tahun.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="card text-center">
                            <img src="./img/klien3.jpeg" alt="Client 3" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Client 3</h5>
                                <p class="card-text">Perusahaan C, spesialis dalam bidang manufaktur, telah menjadi bagian penting dari jaringan klien kami.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Tambahkan logo klien lainnya sesuai kebutuhan -->
                </div>
                <?php
                include "koneksi.php";
                $data = mysqli_query($db, "SELECT * FROM tabel_klien");

                while ($array = mysqli_fetch_array($data)) {
                ?>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="card text-center">
                            <img src="./img/klien4.jpeg" alt="Client 4" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Client 4</h5>
                                <p class="card-text">Perusahaan D adalah penyedia jasa logistik terkemuka yang telah bermitra dengan kami sejak 2018.</p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </section>