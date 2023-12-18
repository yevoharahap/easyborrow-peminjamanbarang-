<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/landing/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>EasyBorrow - Peminjaman Barang</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="/landing/assets/image/logo_bg.png" alt="Logo EasyBorrow">
                <span class="brand-text">EasyBorrow</span>
            </div>
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang kami</a></li>
                <li><a href="#pengembang">Pengembang</a></li>
                <div class="login-btn">
                    <a href="{{ route('login') }}" class="login-link">Login</a>
                </div>
            </ul>
        </nav>
    </header>

    <!--beranda-->
    <article id="beranda">
        <div class="hero">
            <div class="hero-image">
                <img src="/landing/assets/image/logo_easyborrow.png" alt="logo easyborrow">
            </div>
            <div class="teks">
                <h1 class="title">Selamat Datang di EasyBorrow Layanan
                    Peminjaman Barang</h1>
                <p>Kami menyediakan layanan peminjaman barang untuk memenuhi
                    kebutuhan Anda. Dengan platform peminjaman barang kami,
                    Anda dapat dengan mudah meminjam berbagai barang sesuai
                    kebutuhan Anda.</p>
            </div>
        </div>
    </article>
    <!--end beranda-->

    <main>
        <div id="content">
            <!--tentang kami-->
            <article id="tentang" class="card">
                <div class="tentang-kami">
                    <div class="teks-tentang">
                        <h1 class="title">Tentang Layanan Peminjaman Barang</h1>
                        <p>Selamat datang di Layanan Peminjaman Barang! Kami
                            adalah platform yang menyediakan solusi untuk
                            memenuhi kebutuhan peminjaman barang Anda dengan
                            mudah dan efisien.</p>
                        <p>Kami berkomitmen untuk memberikan layanan terbaik
                            dalam memfasilitasi proses peminjaman barang
                            dari berbagai kategori. Apakah Anda memerlukan
                            peralatan acara, alat elektronik, atau barang
                            lainnya, kami hadir untuk memudahkan Anda
                            mendapatkan barang yang Anda butuhkan.</p>
                        <p>Dengan tim yang berdedikasi, kami bertujuan untuk
                            memberikan pengalaman peminjaman yang nyaman dan
                            memastikan kepuasan pengguna. Jadikan kami mitra
                            pilihan Anda dalam memenuhi kebutuhan peminjaman
                            barang sehari-hari.</p>
                    </div>
                    <div class="tentang-image">
                        <img src="/landing/assets/image/pb.jpg" width="400px" alt="Deskripsi Peminjaman Barang">
                    </div>
                </div>
            </article>
            <!--end tentang-->

            <!--galery-->
            <h2>Daftar Pengembang Aplikasi</h2>
            <article id="pengembang" class="card">
                <section id="userpage" class="card">
                    <div class="carduser">
                        <div class="profile-image">
                            <img src="/landing/assets/image/ratri.jpg" alt="Profile Image">
                        </div>
                        <div class="name">Ratri Desy Christirahma</div>
                        <div class="role">UI/UX Developer</div>
                    </div>
                    <div class="carduser">
                        <div class="profile-image">
                            <img src="/landing/assets/image/yevo.jpg" alt="Profile Image">
                        </div>
                        <div class="name">Irvana Yevo Harahap</div>
                        <div class="role">Fullstack Developer</div>
                    </div>
                    <div class="carduser">
                        <div class="profile-image">
                            <img src="/landing/assets/image/revi.jpg" alt="Profile Image">
                        </div>
                        <div class="name">Revi Diwana</div>
                        <div class="role">BackEnd Developer</div>
                    </div>
                    <div class="carduser">
                        <div class="profile-image">
                            <img src="/landing/assets/image/ayu.jpg" alt="Profile Image">
                        </div>
                        <div class="name">Dewa Agung Ayu Mutiara Dewi</div>
                        <div class="role">FrontEnd Developer</div>
                    </div>
                    <div class="carduser">
                        <div class="profile-image">
                            <img src="/landing/assets/image/afifa.jpg" alt="Profile Image">
                        </div>
                        <div class="name">Afifa Wulandari</div>
                        <div class="role">FrontEnd Developer</div>
                    </div>
                </section>
            </article>
        </div>
    </main>

    <!--footer-->
    <footer>
        <p>EasyBorrow - Layanan Peminjaman Barang &#169; 2023,</p>
        <p>Capstone Project SIB</p>
        <p>Design by <strong>C523-PS063</strong></p>
    </footer>
    <!--end footer-->

    <!-- Masukkan JavaScript untuk menangani hamburger menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu');
            const navLinks = document.querySelector('.nav-links');

            mobileMenuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('show');
            });
        });
    </script>
</body>

</html>
