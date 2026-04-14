<!DOCTYPE html>
<html>
<head>
    <title>{{ $nama }}</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f172a, #1e293b);
            color: white;
            position: relative;
        }

        /* LOGO BACKGROUND */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            background: url('/images/logo.png') no-repeat center;
            background-size: 750px;
            opacity: 0.1;

            z-index: -1;
        }

        .navbar {
            padding: 15px 40px;
            background: rgba(0,0,0,0.3);
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #facc15;
        }

        .hero {
            text-align: center;
            margin-top: 100px;
        }

        .hero h1 {
            font-size: 45px;
        }

        .tagline {
            color: #facc15;
            font-size: 20px;
            margin-top: 10px;
        }

        .container {
            width: 80%;
            margin: auto;
            margin-top: 50px;
        }

        .card {
            background: #1e293b;
            padding: 25px;
            margin: 20px 0;
            border-radius: 10px;
            border-left: 5px solid #facc15;
            border-top: 2px solid rgba(250, 204, 21, 0.3);
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(250, 204, 21, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            color: #facc15;
            margin-bottom: 10px;
        }

        .visi-text {
            font-size: 18px;
            line-height: 1.6;
        }

        ul {
            text-align: left;
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
            font-size: 17px;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #94a3b8;
            border-top: 1px solid #facc15;
        }
    </style>
</head>

<body>

<div class="navbar">
    <div><b>HMIT</b></div>
    <div>Kabinet Ciptakara</div>
</div>

<div class="hero">
    <h1>{{ $nama }}</h1>
    <p class="tagline">{{ $tagline }}</p>
</div>

<div class="container">

    <div class="card">
        <h2>Visi</h2>
        <p class="visi-text">{{ $visi }}</p>
    </div>

    <div class="card">
        <h2>Misi</h2>
        <ul>
            @foreach ($misi as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>

    <div class="card">
        <h2>Kontak</h2>
        <p>Email: {{ $email }}</p>
    </div>

</div>

<footer>
    © Himpunan Mahasiswa Informatika 2026 <br>
    Dibuat oleh: Khaera Mir'ah Andina
</footer>

</body>
</html>