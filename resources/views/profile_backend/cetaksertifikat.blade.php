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
            top: 210px;
            left: 270px;
            color: black;
            padding: 10px;
            font-size: 30px;
            font-weight: bold;
            font-family: "Arial, sans-serif";
            text-align: left; /* Teks rata kiri */
        }

        .text-email {

            position: absolute;
            top: 287px;
            left: 40px;
            padding: 10px;
            font-size: 20px;
            color: orange;
            font-family: "Roboto, sans-serif";
            text-align: left; /* Teks rata kiri */
        }

        .text-kota {

            position: absolute;
            top: 287px;
            left: 330px;
            padding: 10px;
            color: orange;
            font-size: 20px;
            font-family: "Arial, sans-serif";
            text-align: left; /* Teks rata kiri */
        }

        .text-valid {

            position: absolute;
            top: 287px;
            left: 540px;
            padding: 10px;
            color: orange;
            font-size: 20px;
            font-family: "Roboto, sans-serif";
            text-align: left; /* Teks rata kiri */
        }

        .avatar {

            position: absolute;
            top: 25px;
            left: 450px;
            width: 200px;
            height: 200px;
            border-radius: 60%;
            border: 4px solid #febc58;
            box-shadow: 0 0 0 5px #febc58;

        }
    </style>
</head>
<body>
<div class="container">
    <img class="image" src="{{ public_path('/assets_backend/fix.jpg') }}" style="width: 100%">
    <p class="text-label">
        {{ strtoupper($profile->name) }} {{ $profile->profiles->gelar ?? '' }}
    </p>
    <img class="image" src="{{ public_path('/assets_backend/fix1.jpg') }}" style="width: 100%">
</div>
</body>
</html>
