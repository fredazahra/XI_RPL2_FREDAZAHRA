<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaundryKu - Laundry Cepat, Bersih & Wangi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #263238;
        }

        /* NAVBAR */

        .navbar-custom {
            background: white;
            border: none;
            border-radius: 0;
            margin: 0;
            padding: 10px 0;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);

            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-brand {
            color: #087ea4 !important;
            font-size: 23px;
            font-weight: bold;
        }

        .navbar-nav > li > a {
            color: #444 !important;
            font-weight: 500;
            padding: 15px 18px !important;
        }

        .navbar-nav > li > a:hover {
            color: #087ea4 !important;
            background: transparent !important;
        }

        .btn-login {
            background: #087ea4 !important;
            color: white !important;
            border-radius: 7px;
            margin-top: 5px;
            padding: 10px 22px !important;
        }

        .btn-login:hover {
            background: #066b8b !important;
        }

        /* HERO */

        .hero {
            min-height: 600px;

            display: flex;
            align-items: center;

            background: linear-gradient(
                135deg,
                #e7f9ff,
                #ffffff
            );

            padding: 80px 0;
        }

        .hero h1 {
            font-size: 55px;
            font-weight: bold;
            line-height: 1.1;
        }

        .hero h1 span {
            color: #087ea4;
        }

        .hero p {
            color: #68747c;
            font-size: 18px;
            line-height: 1.8;
        }

        .hero-label {
            display: inline-block;

            background: #d7f4fb;
            color: #087ea4;

            padding: 8px 15px;

            border-radius: 30px;

            font-size: 13px;
            font-weight: bold;

            margin-bottom: 20px;
        }

        .btn-main {
            display: inline-block;

            background: #087ea4;
            color: white;

            padding: 14px 28px;

            border-radius: 7px;

            text-decoration: none;

            font-weight: bold;

            margin-top: 20px;
        }

        .btn-main:hover {
            background: #066b8b;
            color: white;
            text-decoration: none;
        }

        .laundry-circle {

            width: 350px;
            height: 350px;

            margin: auto;

            background: #d9f6fc;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 160px;

            box-shadow:
                0 20px 50px rgba(8,126,164,0.15);
        }

        /* SECTION */

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 38px;
            font-weight: bold;
        }

        .section-title p {
            color: #777;
        }

        /* CARD */

        .card {

            background: white;

            padding: 35px 25px;

            text-align: center;

            border-radius: 12px;

            min-height: 250px;

            margin-bottom: 25px;

            box-shadow:
                0 5px 25px rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card-icon {
            font-size: 45px;
            margin-bottom: 20px;
        }

        .card h3 {
            color: #087ea4;
            font-weight: bold;
        }

        .card p {
            color: #777;
            line-height: 1.7;
        }

        /* CARA KERJA */

        .how {
            background: #f5fbfd;
        }

        .step {
            text-align: center;
        }

        .number {

            width: 60px;
            height: 60px;

            background: #087ea4;

            color: white;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            margin: auto;

            font-size: 22px;
            font-weight: bold;
        }

        /* CTA */

        .cta {

            background: linear-gradient(
                135deg,
                #087ea4,
                #0b9ac7
            );

            color: white;

            text-align: center;

            padding: 80px 20px;
        }

        .cta h2 {
            font-size: 38px;
            font-weight: bold;
        }

        .btn-white {

            display: inline-block;

            background: white;

            color: #087ea4;

            padding: 14px 30px;

            border-radius: 7px;

            text-decoration: none;

            font-weight: bold;

            margin-top: 20px;
        }

        .btn-white:hover {
            color: #066b8b;
            text-decoration: none;
        }

        /* FOOTER */

        footer {

            background: #073f51;

            color: white;

            padding: 50px 0 20px;
        }

        footer p {
            color: #c9dce2;
            line-height: 1.8;
        }

        .footer-bottom {

            border-top: 1px solid
            rgba(255,255,255,0.15);

            margin-top: 30px;

            padding-top: 20px;

            text-align: center;

            color: #b7d0d8;
        }

        @media(max-width:767px) {

            .hero {
                text-align: center;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero-image {
                margin-top: 50px;
            }

            .laundry-circle {
                width: 260px;
                height: 260px;
                font-size: 110px;
            }

        }

    </style>

</head>

<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-custom">

    <div class="container">

        <div class="navbar-header">

            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#menu">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#home">
                🧺 LaundryKu
            </a>

        </div>


        <div class="collapse navbar-collapse" id="menu">

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="#home">
                        Home
                    </a>
                </li>

                <li>
                    <a href="#layanan">
                        Layanan
                    </a>
                </li>

                <li>
                    <a href="#cara">
                        Cara Kerja
                    </a>
                </li>

                <li>
                    <a href="#tentang">
                        Tentang
                    </a>
                </li>

                <!-- LOGIN -->

                <li>
                    <a href="login_page.php"
                       class="btn-login">

                        Login

                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- =========================
     HERO
========================= -->

<section class="hero" id="home">

    <div class="container">

        <div class="row">

            <div class="col-md-7">

                <span class="hero-label">
                    ✨ Laundry Cepat & Terpercaya
                </span>

                <h1>

                    Pakaian Bersih,

                    <br>

                    <span>
                        Wangi & Rapi
                    </span>

                </h1>

                <p>

                    Tidak punya waktu untuk mencuci?

                    Serahkan kebutuhan laundry kamu
                    kepada <strong>LaundryKu</strong>.

                    Kami siap membuat pakaian kamu
                    bersih, wangi dan rapi.

                </p>

                <a href="login_page.php"
                   class="btn-main">

                    Mulai Laundry →

                </a>

            </div>


            <div class="col-md-5">

                <div class="laundry-circle">

                    🧺

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     LAYANAN
========================= -->

<section class="section"
         id="layanan">

    <div class="container">

        <div class="section-title">

            <h2>
                Layanan Laundry
            </h2>

            <p>
                Pilih layanan sesuai kebutuhan kamu.
            </p>

        </div>


        <div class="row">


            <div class="col-md-4">

                <div class="card">

                    <div class="card-icon">
                        🧼
                    </div>

                    <h3>
                        Cuci Kering
                    </h3>

                    <p>

                        Pakaian dicuci dan dikeringkan
                        hingga siap digunakan.

                    </p>

                    <strong>
                        Rp7.000 / kg
                    </strong>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card">

                    <div class="card-icon">
                        👕
                    </div>
                    <h3>
                        Cuci & Setrika
                    </h3>
                    <p>
                        Pakaian dicuci, dikeringkan
                        dan disetrika hingga rapi.
                    </p>
                    <strong>
                        Rp10.000 / kg
                    </strong>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-icon">
                        ⚡
                    </div>
                    <h3>
                        Express
                    </h3>
                    <p>
                        Proses laundry lebih cepat
                        untuk kebutuhan mendesak.
                    </p>
                    <strong>
                        Rp15.000 / kg
                    </strong>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================
     CARA KERJA
========================= -->
<section class="section how"
         id="cara">
    <div class="container">
        <div class="section-title">
            <h2>
                Cara Kerja
            </h2>
            <p>
                Laundry jadi lebih mudah.
            </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="step">
                    <div class="number">
                        1
                    </div>
                    <h3>
                        Login
                    </h3>
                    <p>
                        Login menggunakan
                        akun kamu.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step">
                    <div class="number">
                        2
                    </div>
                    <h3>
                        Pesan
                    </h3>
                    <p>
                        Pilih layanan laundry
                        yang kamu inginkan.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step">
                    <div class="number">
                        3
                    </div>
                    <h3>
                        Diproses
                    </h3>
                    <p>
                        Laundry diproses
                        oleh pegawai.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step">
                    <div class="number">
                        4
                    </div>
                    <h3>
                        Selesai
                    </h3>
                    <p>
                        Pakaian bersih dan
                        siap digunakan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================
     CTA
========================= -->
<section class="cta">
    <div class="container">
        <h2>
            Siap Laundry Sekarang?
        </h2>
        <p>
            Login dan mulai gunakan LaundryKu.
        </p>
        <a href="login_page.php"
           class="btn-white">
            Login Sekarang →
        </a>
    </div>
</section>
<!-- =========================
     FOOTER
========================= -->
<footer id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>
                    🧺 LaundryKu
                </h3>
                <p>
                    Sistem Informasi Laundry yang
                    membantu pelanggan mengelola
                    kebutuhan laundry dengan mudah
                    dan praktis.
                </p>
            </div>
            <div class="col-md-3">
                <h3>
                    Navigasi
                </h3>
                <p>
                    <a href="#home"
                       style="color:white;">
                        Home
                    </a>
                </p>
                <p>
                    <a href="#layanan"
                       style="color:white;">
                        Layanan
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <h3>
                    Kontak
                </h3>
                <p>
                    📍 Jl. Grajegan-Tampingan blok 123
                </p>
                <p>
                    📞 0812-3456-7890
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            © <?php echo date("Y"); ?>
            LaundryKu.
            All Rights Reserved.
        </div>
    </div>
</footer>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>