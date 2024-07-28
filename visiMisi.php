<?php
include './component/header.php';
?>
<!-- Memanggil Komponen Navbar dengan PHP -->
<?php include 'component/nav.php' ?>
<div class="wrapper d-flex align-items-stretch">
    <?php include 'component/sidebar.php' ?>
    <div class="container mt-3">

        <section id="visi-misi" class="py-2 bg-light">
            <div class="container">
                <div class="card-body">
                    <h2 class="text-left mb-4">Visi dan Misi</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Visi</h3>
                            <p>Menjadi klub motor terkemuka yang menginspirasi keselamatan berkendara, persaudaraan, dan kontribusi positif kepada masyarakat.</p>
                            <h3> Misi</h3>
                            <ul>
                                <li>Mempromosikan keselamatan berkendara melalui pelatihan dan edukasi</li>
                                <li>Membangun komunitas yang solid berdasarkan rasa persaudaraan dan saling menghormati</li>
                                <li>Mengorganisir kegiatan sosial untuk memberi dampak positif pada masyarakat</li>
                                <li>Mendukung perkembangan industri otomotif melalui kolaborasi dan inovasi</li>
                            </ul>
                        </div>
                    </div>
        </section>

        <!-- untuk memanggil footer -->
        <?php
        include "./component/footer.php";
        ?>