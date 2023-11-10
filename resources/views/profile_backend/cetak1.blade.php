<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            /* width: 100%;
            height: 100%; */
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
             font-size: 20px;
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
            top: 310px;
            left: 40px;
            padding: 10px;
            font-size: 24px;
            color: orange;
            /* font-family: "Roboto, sans-serif"; */
            font-family: "Share Tech";
            text-align: left; /* Teks rata kiri */
        }

        .text-kota {
            @if($profile->profiles->is_valid == 0)
filter: blur(8px);
            -webkit-filter: blur(8px);
            @endif
            position: absolute;
            top: 310px;
            left: 330px;
            padding: 10px;
            color: orange;
            font-size: 20px;
            font-family: 'Poppins', 'Roboto', sans-serif;
            text-align: left; /* Teks rata kiri */
        }

        .text-valid {
            @if($profile->profiles->is_valid == 0)
filter: blur(8px);
            -webkit-filter: blur(8px);
            @endif
            position: absolute;
            top: 310px;
            left: 540px;
            padding: 10px;
            color: orange;
            font-size: 20px;
            font-family: 'Poppins', 'Roboto', sans-serif;
            text-align: left;
        }

        .avatar {
            position: absolute;
            top: 25px;
            left: 490px;
            width: 220px;
            height: 200px;

             border-radius: 60%;
            background-size: cover;
            border: 4px solid #febc58;
            box-shadow: 0 0 0 5px #febc58;
        }

        @media (max-width:640px) {
            .text-label {
                top: 40%;
                left: 5%;
                font-size: 7px;
            }
            .text-email {
                top: 50%;
                left: 5%;
                font-size: 7px;
            }
            .text-kota {
                top: 50%;
                left: 30%;
                font-size: 7px;
            }
            .text-valid {
                top: 50%;
                left: 45%;
                font-size: 7px;
            }
            .avatar {
                top: 5%;
                left: 65%;
                width: 29%;
                height: 49%;
                border: 1px solid #febc58;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <img class="image" src="{{ url('assets_backend/kartu5.png') }}" alt="Gambar Anda">
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
