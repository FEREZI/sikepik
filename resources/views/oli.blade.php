<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;600&family=Khand:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Jura', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            color: #1f2937;
            font-family: 'Khand', sans-serif;
        }

        nav {
            background-color: #2C3E50;
            padding: 1rem 2rem;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            max-width: 50px;
            max-height: 50px;
            margin-right: 1rem;
        }

        nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #e74c3c;
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%; /* Ensures the dropdown appears just below the parent */
            left: 0;
            background-color: #34495E;
            padding: 0.5rem 0;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .dropdown-menu a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            text-transform: capitalize;
            white-space: nowrap; /* Prevents text from wrapping */
        }

        .dropdown-menu a:hover {
            background-color: #c77970;
        }

        nav ul li:hover .dropdown-menu {
            display: block;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem;
            background-color: #ffffff;
        }

        .header-content {
            max-width: 700px;
            text-align: left;
        }

        .header-content h1 {
            font-size: 3rem;
            color: #1f2937;
        }

        .description-box {
            background-color: #1f2937;
            color: #ffffff;
            padding: 1.5rem;
            border-radius: 10px;
            font-size: 1.2rem;
            line-height: 1.6;
            margin-top: 1rem;
        }

        .header-image {
            border-radius: 20px;
            max-width: 300px;
            height: auto;
        }

        footer {
            display: flex;
            justify-content: space-between;
            background-color: #2C3E50;
            color: white;
            padding: 2rem;
        }

        .footer-column {
            text-align: left;
            max-width: 300px;
        }

        .footer-column h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .footer-column img {
            max-width: 100px;
            margin-bottom: 1rem;
        }

        .footer-column p {
            font-size: 0.9rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            .header-content {
                margin-bottom: 1rem;
            }

            footer {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }
        }
    </style>
    <title>SIKEPIK</title>
</head>
<body>
    <div class="min-h-full">
        <!-- Navigation -->
        <nav>
            <div class="logo">
                <img src="{{ asset('images/sikepik_logo.jpg') }}" alt="SIKEPIK Logo">
                <h1>SIKEPIK</h1>
            </div>
            <ul>
                <li><a href="{{ url('home') }}">Beranda</a></li>
                <li>
                    <a href="#">Masuk</a>
                    <div class="dropdown-menu">
                        <a href="{{ url('login') }}">Login Driver</a>
                        <a href="{{ url('login') }}">Login User</a>
                    </div>
                </li>
                <li><a href="{{ url('layanan') }}">Layanan</a></li>
                <li><a href="{{ url('about') }}">Tentang Kami</a></li>
            </ul>
        </nav>

        <!-- Header -->
<header class="header">
    <div class="header-content">
        <h1>SERVICE OLI</h1>
        <div class="description-box">
            <p>Waktu penggantian oli berdasarkan jarak tempuh menjadi sangat relevan untuk mobil yang sering melakukan perjalanan ke luar kota atau perjalanan yang jarang terkena macet. Ada beberapa jenis oli yang bisa Anda gunakan untuk mobil Anda tersebut. Oli full synthetic membutuhkan penggantian setiap 10.000 KM. Sedangkan oli dengan campuran mineral biasanya harus diganti setiap 5.000 KM.</p>
        </div>
        <button onclick="window.location.href='{{ route('layanan') }}'" class="btn">Kembali ke Layanan</button>
    </div>
</header>

<style>
    .header {
        text-align: center;
        padding: 20px;
    }
    .btn {
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
</style>

        <!-- Footer -->
        <footer>
            <div class="footer-column">
                <img src="{{ asset('images/sikepik_logo.jpg') }}" alt="SIKEPIK Logo">
                <p>SIKEPIK</p>
            </div>
            <div class="footer-column">
                <h3>Kontak Admin</h3>
                <p>Email: sikepik@gmail.com</p>
                <p>Senin - Jumat, 08.00 - 17.00 WITA</p>
            </div>
            <div class="footer-column">
                <h3>Kantor</h3>
                <p>Jl. Praja Muda V No.21, Sepinggan Baru, Balikpapan</p>
                <p>Tel: 0824 2624 1427</p>
            </div>
        </footer>
    </div>
</body>
</html>
