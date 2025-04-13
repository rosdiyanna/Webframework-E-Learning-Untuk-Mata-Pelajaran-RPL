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
                        <a href="<?= route_to('about') ?>" class=" nav-item nav-link">About</a>
                        <a href="<?= route_to('matapelajaran') ?>" class="nav-item nav-link active">Mata Pelajaran</a>
                        <a href="<?= route_to('forum.index') ?>" class="nav-item nav-link">Forum</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= route_to('project') ?>" class="dropdown-item">Project</a>
                                <a href="<?= route_to('team') ?>" class="dropdown-item">Our Team</a>
                                <a href="<?= route_to('errors/html/error_404') ?>" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="<?= route_to('contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Materi Administrasi Sistem Jaringan</h1>
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
                <h2 class="mb-3">Pengelolaan Sistem Operasi Server</h2>
                <p>Pada administrasi sistem jaringan, pengelolaan sistem operasi server menjadi aspek penting dalam mendukung
                    layanan jaringan. Sistem operasi server yang umum digunakan adalah Linux dan Windows Server.</p>

                <h3 class="mt-4">1. Linux Server</h3>
                <p>Linux Server digunakan secara luas karena stabilitas dan keamanannya. Beberapa distribusi Linux yang populer untuk server:</p>
                <ul>
                    <li><strong>Ubuntu Server</strong> – Cocok untuk pemula, banyak digunakan dalam lingkungan cloud.</li>
                    <li><strong>CentOS/Rocky Linux</strong> – Stabil dan banyak digunakan dalam perusahaan.</li>
                    <li><strong>Debian</strong> – Ringan dan efisien untuk server.</li>
                </ul>

                <h4>Perintah Dasar Linux Server:</h4>
                <pre class="bg-light p-3"><code>
# Update sistem
sudo apt update && sudo apt upgrade -y

# Cek status layanan
systemctl status apache2

# Menambah user baru
sudo adduser nama_user
        </code></pre>

                <h3 class="mt-4">2. Windows Server</h3>
                <p>Windows Server digunakan dalam berbagai organisasi yang mengandalkan teknologi Microsoft, seperti Active Directory dan layanan berbasis GUI.</p>
                <ul>
                    <li><strong>Windows Server 2019/2022</strong> – Mendukung virtualisasi, Active Directory, dan berbagai layanan jaringan.</li>
                    <li><strong>Active Directory</strong> – Digunakan untuk mengelola user dan komputer dalam jaringan.</li>
                    <li><strong>PowerShell</strong> – Digunakan untuk administrasi berbasis perintah.</li>
                </ul>

                <h4>Contoh Perintah PowerShell:</h4>
                <pre class="bg-light p-3"><code>
# Melihat daftar pengguna
Get-ADUser -Filter *

# Membuat pengguna baru
New-ADUser -Name "UserBaru" -SamAccountName UserBaru -UserPrincipalName UserBaru@domain.local
        </code></pre>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Jaringan Komputer Dasar</h2>
                <p>Jaringan komputer adalah sistem yang menghubungkan berbagai perangkat untuk berbagi data dan sumber daya.</p>

                <h3 class="mt-4">1. Topologi Jaringan</h3>
                <p>Beberapa jenis topologi jaringan yang umum digunakan:</p>
                <ul>
                    <li><strong>Topologi Bus</strong> – Menggunakan satu jalur utama untuk komunikasi.</li>
                    <li><strong>Topologi Star</strong> – Setiap perangkat terhubung ke satu titik pusat.</li>
                    <li><strong>Topologi Mesh</strong> – Semua perangkat terhubung satu sama lain.</li>
                </ul>

                <h3 class="mt-4">2. Perangkat Jaringan</h3>
                <p>Dalam sebuah jaringan, terdapat beberapa perangkat utama:</p>
                <ul>
                    <li><strong>Router</strong> – Menghubungkan berbagai jaringan dan meneruskan paket data.</li>
                    <li><strong>Switch</strong> – Menghubungkan beberapa perangkat dalam satu jaringan lokal (LAN).</li>
                    <li><strong>Firewall</strong> – Menyaring lalu lintas data dan meningkatkan keamanan jaringan.</li>
                </ul>

                <h3 class="mt-4">3. Konfigurasi Jaringan Dasar</h3>
                <p>Berikut adalah contoh konfigurasi IP statis di Linux dan Windows:</p>

                <h4>Konfigurasi IP Statis di Linux</h4>
                <pre class="bg-light p-3"><code>
# Edit file konfigurasi jaringan
sudo nano /etc/netplan/01-netcfg.yaml

# Contoh pengaturan IP statis
network:
  ethernets:
    eth0:
      addresses:
        - 192.168.1.100/24
      gateway4: 192.168.1.1
      nameservers:
        addresses:
          - 8.8.8.8
          - 8.8.4.4
  version: 2

# Terapkan perubahan
sudo netplan apply
        </code></pre>

                <h4>Konfigurasi IP Statis di Windows</h4>
                <pre class="bg-light p-3"><code>
# Mengatur IP statis menggunakan PowerShell
New-NetIPAddress -InterfaceAlias "Ethernet" -IPAddress 192.168.1.100 -PrefixLength 24 -DefaultGateway 192.168.1.1
        </code></pre>
            </section>

            <section class="mb-5">
                <h2 class="mb-3">Keamanan Sistem</h2>
                <p>Keamanan sistem sangat penting dalam administrasi jaringan untuk melindungi data dan infrastruktur dari ancaman siber.</p>

                <h3 class="mt-4">1. Firewall</h3>
                <p>Firewall berfungsi sebagai penghalang antara jaringan internal dan eksternal.</p>

                <h4>Konfigurasi Firewall di Linux</h4>
                <pre class="bg-light p-3"><code>
# Cek status firewall
sudo ufw status

# Mengaktifkan firewall
sudo ufw enable

# Membuka port 22 (SSH)
sudo ufw allow 22/tcp

# Menolak semua koneksi masuk
sudo ufw default deny incoming
        </code></pre>

                <h3 class="mt-4">2. Enkripsi dan Autentikasi</h3>
                <p>Untuk mengamankan komunikasi, enkripsi dan autentikasi sangat diperlukan:</p>
                <ul>
                    <li><strong>SSL/TLS</strong> – Digunakan untuk mengamankan komunikasi web.</li>
                    <li><strong>VPN (Virtual Private Network)</strong> – Digunakan untuk komunikasi aman dalam jaringan.</li>
                </ul>

                <h3 class="mt-4">3. Manajemen Pengguna dan Hak Akses</h3>
                <p>Mengelola pengguna dengan hak akses yang tepat sangat penting dalam menjaga keamanan sistem.</p>

                <h4>Menambah Pengguna dengan Hak Akses di Linux</h4>
                <pre class="bg-light p-3"><code>
# Menambah user baru
sudo adduser nama_user

# Menambahkan user ke grup sudo
sudo usermod -aG sudo nama_user
        </code></pre>

                <h4>Menambah Pengguna dengan Hak Akses di Windows</h4>
                <pre class="bg-light p-3"><code>
# Menambahkan user ke grup Administrator di PowerShell
Add-LocalGroupMember -Group "Administrators" -Member "UserBaru"
        </code></pre>
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