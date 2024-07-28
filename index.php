
<body>

    <!-- Memanggil Komponen Navbar dengan PHP -->
    <?php include 'component/nav.php' ?>

    <div class="wrapper d-flex align-items-stretch">
        <?php include 'component/sidebar.php' ?>

        <div class="container mt-3">

            <!-- 2. Kata Pengantar (Optional) -->
            <section id="welcome" class="py-5 bg-light">
                <div class="container">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Selamat Datang di Speed Demons MC</h2>
                        <p class="lead text-center">
                            Kami dengan bangga mempersembahkan club motor yang tidak hanya tentang kecepatan,
                            tetapi juga tentang persaudaraan, keamanan, dan kontribusi positif kepada masyarakat.
                            Speed Demons MC adalah rumah bagi para penggemar motor yang mencari lebih dari sekadar sensasi berkendara.
                        </p>
                        <div class="text-center">
                            <img src="./img/motor3.jpg" width="500px" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Deskripsi untuk Home -->
            <section id="home-description" class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Tentang Speed Demons MC</h2>
                            <p class="lead text-center">
                                Speed Demons Motorcycle Club (MC) adalah komunitas motor yang berdedikasi untuk mengedepankan
                                persaudaraan, keselamatan berkendara, dan memberikan dampak positif bagi masyarakat.
                                Kami mengundang semua penggemar motor, dari berbagai latar belakang, untuk bergabung dengan kami
                                dalam perjalanan penuh makna dan petualangan.
                            </p>
                            <div class="text-center mt-4">
                                <a href="about.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
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
