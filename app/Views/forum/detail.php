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
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= route_to('home') ?>" class="nav-item nav-link">Home</a>
                        <a href="<?= route_to('about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= route_to('matapelajaran') ?>" class="nav-item nav-link">Mata Pelajaran</a>
                        <a href="<?= route_to('project') ?>" class="nav-item nav-link">Project</a>
                        <a href="<?= route_to('forum.index') ?>" class="nav-item nav-link active">Forum</a>
                        <a href="<?= route_to('contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Forum Diskusi</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Forum</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Forum View -->
        <div style="max-width: 700px; margin: 40px auto; padding: 30px; background: linear-gradient(to bottom right, #fdfdfd, #f1f3f5); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); font-family: 'Arial', sans-serif; color: #333;">

            <!-- Judul Diskusi -->
            <h2 style="margin-bottom: 10px; font-size: 26px; color: #2c3e50; text-align: center;"><?= esc($thread['title']) ?></h2>
            <p style="margin-bottom: 25px; font-size: 16px; line-height: 1.6;"><strong style="color: #2124B1;"><?= esc($thread['author_name']) ?>:</strong> <?= esc($thread['content']) ?></p>

            <!-- Balasan -->
            <hr style="border: none; border-top: 1px solid #ddd; margin: 30px 0;">
            <h3 style="font-size: 20px; color: #2c3e50; margin-bottom: 15px;">Balasan</h3>
            <?php if (empty($posts)): ?>
                <p style="color: #999;">Belum ada balasan.</p>
            <?php endif; ?>
            <?php foreach ($posts as $post): ?>
                <div style="background-color: #ffffff; border: 1px solid #e0e0e0; padding: 15px 20px; border-radius: 10px; margin-bottom: 15px;">
                    <p style="margin: 0; font-size: 15px;"><strong style="color: #2124B1;"><?= esc($post['author_name']) ?>:</strong> <?= esc($post['content']) ?></p>
                </div>
            <?php endforeach; ?>

            <!-- Form Balas -->
            <hr style="border: none; border-top: 1px solid #ddd; margin: 35px 0 25px;">
            <h3 style="font-size: 20px; color: #2c3e50; margin-bottom: 15px;">Balas Diskusi</h3>
            <form method="post" action="/forum/reply/<?= $thread['id'] ?>" style="display: flex; flex-direction: column; gap: 15px;">

                <input type="text" name="author_name" placeholder="Nama Anda" required style="padding: 12px 14px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px;">

                <textarea name="content" placeholder="Tulis balasan Anda..." required style="padding: 12px 14px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px; min-height: 120px; resize: vertical;"></textarea>

                <button type="submit" style="padding: 12px; font-size: 16px; font-weight: bold; color: #fff; background: #2124B1; border: none; border-radius: 8px; cursor: pointer; transition: background 0.3s;">
                    Kirim Balasan
                </button>
            </form>
        </div>
        <!-- Forum View End -->


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
                        <a class="btn btn-link" href="#">About Us</a>
                        <a class="btn btn-link" href="#">Contact Us</a>
                        <a class="btn btn-link" href="#">Privacy Policy</a>
                        <a class="btn btn-link" href="#">Terms & Condition</a>
                        <a class="btn btn-link" href="#">Career</a>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="<?= base_url('img/portfolio-1.jpg') ?>" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="<?= base_url('img/portfolio-2.jpg') ?>" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="<?= base_url('img/portfolio-3.jpg') ?>" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="<?= base_url('img/portfolio-4.jpg') ?>" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="<?= base_url('img/portfolio-5.jpg') ?>" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="<?= base_url('img/portfolio-6.jpg') ?>" alt="Image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Ikuti informasi terbaru seputar project kami dan update dari Classify!</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                                <i class="fa fa-paper-plane text-primary fs-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom text-light" href="#">Rosdiyanna Safitri</a>, All Right Reserved.
                            Designed By <a class="border-bottom text-light" href="https://htmlcodex.com">ROSE</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="#">Home</a>
                                <a href="#">Cookies</a>
                                <a href="#">Help</a>
                                <a href="#">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

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