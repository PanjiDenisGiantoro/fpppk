<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
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
            top: 270px;
            left: 40px;
            color: black;
            padding: 10px;
             font-size: 30px;
            font-weight: bold;
            font-family: 'Poppins', 'Roboto', sans-serif;
            text-align: left; /* Teks rata kiri */
        }

        .text-email {
            @if($profile->profiles->is_valid == 0)
filter: blur(8px);
            -webkit-filter: blur(8px);
            @endif
            position: absolute;
            top: 300px;
            left: 40px;
            padding: 10px;
            font-size: 20px;
            color: orange;
            font-family: "Roboto, sans-serif";
            text-align: left; /* Teks rata kiri */
        }

        .text-kota {
            @if($profile->profiles->is_valid == 0)
filter: blur(8px);
            -webkit-filter: blur(8px);
            @endif
            position: absolute;
            top: 300px;
            left: 330px;
            padding: 10px;
            color: orange;
            font-size: 20px;
            font-family: "Arial, sans-serif";
            text-align: left; /* Teks rata kiri */
        }

        .text-valid {
            @if($profile->profiles->is_valid == 0)
filter: blur(8px);
            -webkit-filter: blur(8px);
            @endif
            position: absolute;
            top: 300px;
            left: 540px;
            padding: 10px;
            color: orange;
            font-size: 20px;
            font-family: "Roboto, sans-serif";
            text-align: left;
        }

        .avatar {
            position: absolute;
            top: 25px;
            left: 490px;
            width: 200px;
            height: 200px;

             border-radius: 60%;
            background-size: cover;
            border: 4px solid #febc58;
            box-shadow: 0 0 0 5px #febc58;
        }
    </style>
</head>
<body>
<div class="container">
    <img class="image" src="{{ url('assets_backend/kartu4.png') }}" alt="Gambar Anda">
    <img src="{{ url('foto/'.$profile->profiles->photo) }}" alt="" class="avatar">
    <div class="text-label">
        {{ strtoupper($profile->name) }} {{ $profile->profiles->gelar ?? '' }}</div>
    <div class="text-email">
        {{ substr($profile->profiles->NRA, 0, 4) }}&nbsp;&nbsp; {{ substr($profile->profiles->NRA, 4, 5) }}
        &nbsp;&nbsp; {{ substr($profile->profiles->NRA, 9, 4) }}
    </div>
    <div class="text-kota">{{ $kecamatan->name }}</div>
    <div class="text-valid">VALID 11/27</div>
</div>
</body>
</html>
