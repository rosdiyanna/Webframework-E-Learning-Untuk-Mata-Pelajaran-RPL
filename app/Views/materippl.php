<!DOCTYPE html>
<html lang="en">

<?= $this->include('/component/head') ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>CLASS<span class="fs-5">ify</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= route_to('home') ?>" class="nav-item nav-link">Home</a>
                        <a href="<?= route_to('about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= route_to('matapelajaran') ?>" class="nav-item nav-link active">Mata Pelajaran</a>
                        <a href="<?= route_to('project') ?>" class="nav-item nav-link">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= route_to('team') ?>" class="dropdown-item">Our Team</a>
                                <a href="<?= route_to('testimonial') ?>" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="<?= route_to('contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                    <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                    <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Materi Pengembangan Perangkat Lunak</h1>
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
                <h2 class="mb-3">Pengantar Pengembangan Perangkat Lunak</h2>
                <p>Pengembangan perangkat lunak adalah proses pembuatan dan pemeliharaan perangkat lunak melalui serangkaian langkah yang
                    sistematis. Proses ini bertujuan untuk memastikan perangkat lunak yang dibuat dapat memenuhi kebutuhan pengguna dengan
                    baik, memiliki kualitas yang tinggi, serta dapat dikembangkan dan dipelihara dengan mudah.</p>

                <h3 class="mt-4">Tujuan Pengembangan Perangkat Lunak</h3>
                <ul>
                    <li>Meningkatkan efisiensi dan efektivitas dalam pemrosesan data</li>
                    <li>Menghasilkan perangkat lunak berkualitas tinggi</li>
                    <li>Memastikan perangkat lunak dapat dikembangkan dan diperbarui dengan mudah</li>
                    <li>Meningkatkan kepuasan pengguna melalui pengalaman yang lebih baik</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Siklus Hidup Pengembangan Perangkat Lunak (SDLC)</h2>
                <p>Software Development Life Cycle (SDLC) adalah serangkaian langkah yang digunakan dalam pengembangan perangkat lunak
                    untuk memastikan sistem yang dikembangkan dapat memenuhi kebutuhan pengguna secara efektif.</p>

                <h3 class="mt-4">Tahapan dalam SDLC</h3>
                <ol>
                    <li><strong>Analisis Kebutuhan</strong> - Mengidentifikasi kebutuhan pengguna dan tujuan sistem.</li>
                    <li><strong>Perancangan</strong> - Membuat desain arsitektur sistem dan antarmuka pengguna.</li>
                    <li><strong>Implementasi</strong> - Menulis kode dan membangun sistem berdasarkan desain.</li>
                    <li><strong>Pengujian</strong> - Memastikan perangkat lunak bekerja sesuai dengan spesifikasi.</li>
                    <li><strong>Deploy dan Pemeliharaan</strong> - Meluncurkan sistem dan melakukan pemeliharaan untuk perbaikan atau pembaruan.</li>
                </ol>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Metodologi Pengembangan Perangkat Lunak</h2>
                <p>Ada beberapa metodologi yang digunakan dalam pengembangan perangkat lunak. Pemilihan metodologi bergantung pada kompleksitas proyek,
                    kebutuhan pengguna, serta fleksibilitas yang diinginkan dalam proses pengembangan.</p>

                <h3 class="mt-4">1. Metodologi Waterfall</h3>
                <p>Waterfall adalah model pengembangan perangkat lunak yang bersifat linear dan berurutan. Setiap tahap harus diselesaikan
                    sebelum tahap berikutnya dimulai.</p>

                <h3 class="mt-4">2. Metodologi Agile</h3>
                <p>Agile adalah pendekatan pengembangan perangkat lunak yang menekankan fleksibilitas, kolaborasi, dan pengembangan secara
                    iteratif. Agile lebih cocok untuk proyek yang membutuhkan perubahan dan penyempurnaan secara berkelanjutan.</p>

                <h3 class="mt-4">3. Scrum</h3>
                <p>Scrum adalah salah satu kerangka kerja dalam metodologi Agile yang berfokus pada kerja tim dalam iterasi yang disebut sprint.
                    Scrum memiliki peran utama seperti Product Owner, Scrum Master, dan Development Team.</p>

                <h3 class="mt-4">4. DevOps</h3>
                <p>DevOps adalah metodologi yang menggabungkan pengembangan (development) dan operasional (operations) untuk mempercepat siklus
                    pengembangan perangkat lunak dan meningkatkan kualitas perangkat lunak.</p>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Manajemen Proyek Perangkat Lunak</h2>
                <p>Manajemen proyek perangkat lunak adalah proses perencanaan, pengorganisasian, dan pengendalian sumber daya dalam pengembangan
                    perangkat lunak untuk mencapai tujuan yang telah ditentukan.</p>

                <h3 class="mt-4">Elemen Penting dalam Manajemen Proyek Perangkat Lunak</h3>
                <ul>
                    <li><strong>Scope Management</strong> - Menentukan cakupan proyek agar sesuai dengan kebutuhan pengguna.</li>
                    <li><strong>Time Management</strong> - Menjadwalkan tugas dan memastikan proyek selesai tepat waktu.</li>
                    <li><strong>Cost Management</strong> - Mengelola anggaran proyek agar tetap efisien.</li>
                    <li><strong>Quality Management</strong> - Memastikan perangkat lunak memenuhi standar kualitas.</li>
                    <li><strong>Risk Management</strong> - Mengidentifikasi dan mengatasi risiko yang mungkin terjadi.</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Perbandingan Metodologi Pengembangan Perangkat Lunak</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Metodologi</th>
                            <th>Karakteristik</th>
                            <th>Kelebihan</th>
                            <th>Kekurangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Waterfall</td>
                            <td>Model linear, tahap berurutan</td>
                            <td>Struktur yang jelas, dokumentasi lengkap</td>
                            <td>Tidak fleksibel terhadap perubahan</td>
                        </tr>
                        <tr>
                            <td>Agile</td>
                            <td>Iteratif, fleksibel, berbasis tim</td>
                            <td>Adaptif terhadap perubahan, keterlibatan pengguna tinggi</td>
                            <td>Membutuhkan komunikasi yang intens</td>
                        </tr>
                        <tr>
                            <td>Scrum</td>
                            <td>Fokus pada kerja tim dalam sprint</td>
                            <td>Efektif untuk proyek kompleks, meningkatkan kolaborasi</td>
                            <td>Memerlukan peran dan tanggung jawab yang jelas</td>
                        </tr>
                        <tr>
                            <td>DevOps</td>
                            <td>Integrasi pengembangan dan operasional</td>
                            <td>Meningkatkan efisiensi dan kecepatan deployment</td>
                            <td>Memerlukan infrastruktur yang memadai</td>
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