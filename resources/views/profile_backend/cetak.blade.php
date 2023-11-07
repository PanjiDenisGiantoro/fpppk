<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            position: relative;
        }

        .image {
            max-width: 100%;
            max-height: 100%;
        }

        .text-label {
            position: absolute;
            top: 300px;
            left:650px;
                color: black;
            padding: 10px;
            font-size: 60px;
            font-family: "Arial, sans-serif";
            text-align: left; /* Teks rata kiri */
        }
        .text-email {
            position: absolute;
            top: 370px;
            left:650px;
            color: black;
            padding: 10px;
            font-size: 60px;
            font-family: "Arial, sans-serif";
            text-align: left; /* Teks rata kiri */
        }
        .text-nra {
            position: absolute;
            top: 550px;
            left:650px;
            color: black;
            padding: 10px;
            font-size: 60px;
            font-family: "Arial, sans-serif";
            text-align: left; /* Teks rata kiri */
        }
    </style>
</head>
<body>
<div class="container">
    <img class="image" src="{{ url('assets_backend/kartu1.png') }}" alt="Gambar Anda">
    <div class="text-label">{{ $profile->name }}</div>
    <div class="text-email">{{ $profile->email }}</div>
    <div class="text-nra">ID {{ $profile->profiles->NRA }}</div>
</div>
</body>
</html>
