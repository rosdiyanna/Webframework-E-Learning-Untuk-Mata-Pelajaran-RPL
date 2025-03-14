<!DOCTYPE html>
<html lang="id">

<?= $this->include('/component/head') ?>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>CLASS<span class="fs-5">ify</span></h1>
                </a>
            </nav>
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Materi Pemrograman Dasar</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="<?= route_to('home') ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="<?= route_to('matapelajaran') ?>">Mapel</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Materi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <main class="container px-4 px-lg-5 py-5">
            <section class="mb-5">
                <h2 class="mb-3">Pengenalan Pemrograman</h2>
                <p>Pemrograman adalah proses menulis, menguji, dan memelihara kode agar komputer dapat menjalankan tugas tertentu.
                    Dalam dunia teknologi, pemrograman digunakan untuk membuat perangkat lunak, aplikasi, dan sistem yang membantu
                    manusia dalam berbagai aspek kehidupan.</p>
                <ul>
                    <li>Memahami konsep dasar pemrograman</li>
                    <li>Mengetahui perbedaan antara berbagai bahasa pemrograman</li>
                    <li>Mengerti pentingnya pemrograman dalam dunia digital</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Algoritma dan Logika Pemrograman</h2>
                <p>Algoritma adalah serangkaian langkah atau instruksi yang digunakan untuk menyelesaikan suatu masalah.
                    Logika pemrograman adalah kemampuan berpikir secara sistematis dan logis dalam menyusun algoritma.</p>
                <h3 class="mt-4">Karakteristik Algoritma</h3>
                <ol>
                    <li>Memiliki langkah-langkah yang jelas</li>
                    <li>Memiliki input dan output</li>
                    <li>Dapat dieksekusi dalam jumlah langkah yang terbatas</li>
                </ol>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Bahasa Pemrograman</h2>
                <p>Bahasa pemrograman adalah sarana komunikasi antara manusia dan komputer.
                    Beberapa bahasa pemrograman yang umum digunakan dalam pemrograman dasar meliputi:</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Bahasa Pemrograman</th>
                            <th>Karakteristik</th>
                            <th>Penggunaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Python</td>
                            <td>Sintaks sederhana, mudah dibaca</td>
                            <td>Kecerdasan buatan, analisis data, pengembangan web</td>
                        </tr>
                        <tr>
                            <td>C++</td>
                            <td>Performa tinggi, mendukung OOP</td>
                            <td>Game development, sistem operasi</td>
                        </tr>
                        <tr>
                            <td>Java</td>
                            <td>Platform-independent, berbasis OOP</td>
                            <td>Pengembangan aplikasi mobile, backend web</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Bandar Lampung,Indonesia</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 852 6640 7728</p>
                        <p><i class="fa fa-envelope me-3"></i>rosdiyannasafitri@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('lib/isotope/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('lib/lightbox/js/lightbox.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js') ?>"></script>
</body>

</html>