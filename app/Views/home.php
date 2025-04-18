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
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="<?= route_to('about') ?>" class=" nav-item nav-link">About</a>
                        <a href="<?= route_to('matapelajaran') ?>" class="nav-item nav-link ">Mata Pelajaran</a>
                        <a href="<?= route_to('forum.index') ?>" class="nav-item nav-link">Forum</a>
                        <a href="<?= route_to('project') ?>" class="nav-item nav-link">Project</a>
                        <a href="<?= route_to('contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Learn Software Engineering (RPL) Easily & Interactively</h1>
                            <p class="text-white pb-3 animated zoomIn">Become a tech expert with CLASSify! An interactive learning platform designed specifically for vocational high school students majoring in Software Engineering (RPL). Learn programming, application development, and software technology in an easier, faster, and more fun way!</p>
                            <a href="<?= route_to('about') ?>" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">About</a>
                            <a href="<?= route_to('contact') ?>" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">Selamat Datang di Classify, Platform E-learning yang Didedikasikan untuk Pembelajaran RPL</h2>
                        </div>
                        <p class="mb-4">Kami hadir untuk membantu siswa dan guru dalam memahami konsep dan keterampilan yang dibutuhkan di dunia pengembangan perangkat lunak, mulai dari pemrograman, basis data, hingga pengembangan aplikasi berbasis web dan mobile.
                            Dengan materi yang disusun secara sistematis, kami berkomitmen untuk menciptakan pengalaman belajar yang menyenangkan dan efektif. serta forum diskusi untuk memperdalam pemahamanmu tentang dunia RPL.</p>
                        <div class="row g-3">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Mata Pelajaran Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Mata Pelajaran</h6>
                    <h2 class="mt-2">What Solutions We Provide</h2>
                </div>

                <!-- Search Bar -->
                <div class="mb-4 text-center">
                    <div class="input-group">
                        <input type="text" id="searchInput" class="form-control bg-transparent border-light p-3" placeholder="Search Mata Pelajaran...">
                        <span class="input-group-text bg-transparent border-light" id="searchIcon">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>

                <div class="row g-4" id="mataPelajaranList">
                    <div class="col-lg-4 col-md-6 mata-pelajaran wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Pemrograman Dasar</h5>
                            <p>Konsep dasar pemrograman, algoritma, logika pemrograman, dan implementasi dengan bahasa pemrograman seperti Python, C++, atau Java.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="materipemrogramandasar">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mata-pelajaran wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-database fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Basis Data</h5>
                            <p>Konsep database, perancangan database, SQL, dan implementasi menggunakan MySQL, PostgreSQL, atau lainnya.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="materibasisdata">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mata-pelajaran wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-object-group fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Pemrograman Berorientasi Objek (PBO)</h5>
                            <p>Konsep OOP, kelas, objek, inheritance, polymorphism, dan implementasinya dalam Java/Python/C#.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="materipbo">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mata-pelajaran wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-globe fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Pemrograman Web</h5>
                            <p>HTML, CSS, JavaScript, framework seperti Laravel, React.js, atau Vue.js.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="materipweb">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mata-pelajaran wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-cogs fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Pengembangan Perangkat Lunak</h5>
                            <p>Siklus hidup pengembangan perangkat lunak (SDLC), metodologi Agile, Scrum, dan manajemen proyek perangkat lunak.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="materippl">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mata-pelajaran wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-server fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Administrasi Sistem Jaringan</h5>
                            <p>Pengelolaan sistem operasi server (Linux/Windows Server), jaringan komputer dasar, dan keamanan sistem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="materiasj">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mata Pelajaran End -->


        <!-- Forum Section -->
        <section class="forum-section position-relative overflow-hidden text-white py-5">
            <div class="container px-lg-5 position-relative" style="z-index: 2;">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-3 text-white">Forum Diskusi</h2>
                        <p class="mb-4 text-white">Setelah mempelajari materi, ayo diskusikan bersama Classify!</p>
                        <a href="<?= route_to('forum.create') ?>" class="btn btn-light text-primary rounded-pill px-4 py-2 fw-semibold shadow-sm">
                            + Buat Topik Baru
                        </a>
                    </div>
                </div>
            </div>

            <!-- Decorative Circles -->
            <div class="decor-circle1 position-absolute"></div>
            <div class="decor-circle2 position-absolute"></div>
            <div class="decor-circle3 position-absolute"></div>
        </section>
        <!-- Forum Section End -->

        <style>
            .forum-section {
                background-color: #2a2cc9;
                /* Warna biru solid */
                position: relative;
                overflow: hidden;
            }

            .decor-circle1,
            .decor-circle2,
            .decor-circle3 {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.12);
                position: absolute;
                z-index: 1;
            }

            .decor-circle1 {
                top: -60px;
                left: -60px;
            }

            .decor-circle2 {
                bottom: -60px;
                right: -60px;
            }

            .decor-circle3 {
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(255, 255, 255, 0.12);
                width: 300px;
                height: 300px;
            }

            @media (max-width: 768px) {
                .forum-section {
                    padding: 3rem 1rem;
                }
            }
        </style>

        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">Recently Launched Projects</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Bandar Lampung,Indonesia</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 852 6640 7728</p>
                        <p><i class="fa fa-envelope me-3"></i>rosdiyanna@gmail.com</p>
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
                            &copy; <a class="border-bottom" href="#">Rosdiyanna Safitri</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">ROSE</a>
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
    <!-- JavaScript for Search -->
    <script>
        // Get the search input and search icon elements
        const searchInput = document.getElementById('searchInput');
        const searchIcon = document.getElementById('searchIcon');

        // Function to filter mata pelajaran based on search input
        function searchMataPelajaran() {
            const keyword = searchInput.value.toLowerCase(); // Get the search term
            const pelajaranItems = document.querySelectorAll('.mata-pelajaran');

            pelajaranItems.forEach(item => {
                const title = item.querySelector('h5').textContent.toLowerCase();
                const description = item.querySelector('p').textContent.toLowerCase();

                // If keyword matches title or description, display the item; otherwise, hide it
                if (title.includes(keyword) || description.includes(keyword)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Add event listener to the search icon for search functionality
        searchIcon.addEventListener('click', searchMataPelajaran);

        // Add event listener to input field to trigger search on typing
        searchInput.addEventListener('input', searchMataPelajaran);
    </script>
</body>

</html>