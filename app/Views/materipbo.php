<!DOCTYPE html>
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
                        <a href="<?= route_to('about') ?>" class=" nav-item nav-link ">About</a>
                        <a href="<?= route_to('matapelajaran') ?>" class="nav-item nav-link active">Mata Pelajaran</a>
                        <a href="<?= route_to('forum.index') ?>" class="nav-item nav-link">Forum</a>
                        <a href="<?= route_to('project') ?>" class="nav-item nav-link ">Project</a>
                        <a href="<?= route_to('contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
        </div>
    </div>
    </nav>

    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Materi Pemrograman Berorientasi Objek</h1>
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
            <h2 class="mb-3">Konsep Pemrograman Berorientasi Objek (PBO)</h2>
            <p>Pemrograman Berorientasi Objek (PBO) adalah paradigma pemrograman yang berfokus pada objek dan interaksinya.
                PBO membantu dalam membuat kode yang lebih modular, mudah dipelihara, dan dapat digunakan kembali.</p>
            <ul>
                <li>Memahami konsep dasar PBO</li>
                <li>Mengenal prinsip dasar OOP: Encapsulation, Inheritance, Polymorphism, Abstraction</li>
                <li>Mengetahui keunggulan PBO dibandingkan paradigma pemrograman lainnya</li>
            </ul>
        </section>

        <section class="mb-5">
            <h2 class="mb-3">Kelas dan Objek</h2>
            <p>Kelas adalah blueprint atau cetak biru dari objek, sedangkan objek adalah instansi dari kelas tersebut.</p>
            <h3 class="mt-4">Contoh Implementasi Kelas dan Objek</h3>
            <pre class="bg-light p-3">
            <code>
# Contoh dalam Python
class Mahasiswa:
    def __init__(self, nama, nim):
        self.nama = nama
        self.nim = nim

    def tampilkan_info(self):
        print(f"Nama: {self.nama}, NIM: {self.nim}")

mhs1 = Mahasiswa("Andi", "123456")
mhs1.tampilkan_info()
            </code>
        </pre>
        </section>

        <section class="mb-5">
            <h2 class="mb-3">Inheritance (Pewarisan)</h2>
            <p>Inheritance memungkinkan sebuah kelas mewarisi atribut dan metode dari kelas lain.</p>
            <h3 class="mt-4">Contoh Implementasi Inheritance</h3>
            <pre class="bg-light p-3">
            <code>
// Contoh dalam Java
class Kendaraan {
    String merk;

    void jalankan() {
        System.out.println("Kendaraan berjalan...");
    }
}

class Mobil extends Kendaraan {
    int jumlahPintu;

    void tampilkanInfo() {
        System.out.println("Merk: " + merk + ", Pintu: " + jumlahPintu);
    }
}

public class Main {
    public static void main(String[] args) {
        Mobil m = new Mobil();
        m.merk = "Toyota";
        m.jumlahPintu = 4;
        m.tampilkanInfo();
    }
}
            </code>
        </pre>
        </section>

        <section class="mb-5">
            <h2 class="mb-3">Polymorphism</h2>
            <p>Polymorphism memungkinkan satu metode memiliki berbagai bentuk.</p>
            <h3 class="mt-4">Contoh Implementasi Polymorphism</h3>
            <pre class="bg-light p-3">
            <code>
// Contoh dalam C#
using System;

class Hewan {
    public virtual void Bersuara() {
        Console.WriteLine("Hewan bersuara...");
    }
}

class Kucing : Hewan {
    public override void Bersuara() {
        Console.WriteLine("Meow... Meow...");
    }
}

class Program {
    static void Main() {
        Hewan h = new Kucing();
        h.Bersuara(); // Output: Meow... Meow...
    }
}
            </code>
        </pre>
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
</body>

</html>