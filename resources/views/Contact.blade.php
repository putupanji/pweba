<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Roti Mokoh</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>

        .form-container {
            background-color: #DBB56D;
            padding: 20px;
            color: #FFFF;
            border: 2px solid #FFFF;
            width: 1000px;
            margin: 0 auto;
        }

        .form-input {
            background-color: transparent;
            border: 1px solid #FFFF;
            color: #FFFF;
            padding: 5px;
            width: 100%;
            margin-bottom: 10px;
        }

        .submit-button {
            background-color: #F48F3F;
            color: #FFFF;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .navbar-custom {
            background-color: #511817;
        }

        .navbar-custom .navbar-brand {
            width: 200px;
            height: auto;
        }

        .navbar-custom .navbar-brand {
            color: #DBB56D;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #DBB56D;
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #DBB56D;
        }


        .footer-custom {
            background-color: #F48F3F;
            color: #FFFF;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            /* position: absolute; */
            bottom: 0;
            width: 100%;
        }

        .footer-custom .row {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .footer-custom h1,
        .footer-custom p {
            text-align: center;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["myForm"]["name"].value;
            var email = document.forms["myForm"]["email"].value;
            var message = document.forms["myForm"]["message"].value;

            // Validasi Nama
            if (name == "") {
                alert("Nama harus diisi");
                return false;
            } else if (!/^[a-zA-Z ]+$/.test(name)) {
                alert("Nama hanya boleh berisi huruf dan spasi");
                return false;
            }

            // Validasi Alamat Email
            if (email == "") {
                alert("Alamat Email harus diisi");
                return false;
            } else if (!email.endsWith("@gmail.com")) {
                alert("Alamat Email harus diakhiri dengan @gmail.com");
                return false;
            }

            // Validasi Pesan dan Kesan
            if (message == "") {
                alert("Pesan dan Kesan harus diisi");
                return false;
            } else if (message.split(" ").length > 200) {
                alert("Pesan dan Kesan terbatas hingga 200 kata");
                return false;
            }
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">
            <img src="Logo.png" alt="LOGO">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ETS2"><b>Contact</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ETS3"><b>Shop</b></a>
                </li>
            </ul>
        </div>
    </nav>
    </head>


    <!-- Lokasi -->
    <div class="container">
        <div class="row" style="margin-bottom: 25px; margin-top: 25px;">
            <div class="col-sm-12">
                <h1 class="text-center" style="color: #DBB56D; text-shadow: 2px 2px 4px #000; font-size: 50px;">CABANG KAMI</h1>
            </div>
        </div>
        <div class="row" style="margin-bottom: 75px;">
            <div class="col-sm-12 text-center">
                <img src="Lokasi.jpg" alt="" style="width: 100%; max-width: 550px; margin: 0 auto; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
            </div>

        </div>
    </div>

    <!-- Form validasi -->
    <div class="container">
        <div class="row" style="margin-bottom: 25px; margin-top: 25px;">
            <div class="col-sm-12">
                <h1 class="text-center" style="color: #DBB56D; text-shadow: 2px 2px 4px #000; font-size: 50px;">HUBUNGI KAMI</h1>
            </div>
        </div>
        <div class="form-container" style="margin-bottom: 25px;">
            <form name="myForm" onsubmit="return validateForm()">
                <label for="name"><b>Nama:</b></label>
                <input type="text" name="name" id="name" class="form-input"><br>
                <label for="email"><b>Alamat Email:</b></label>
                <input type="text" name="email" id="email" class="form-input"><br>
                <label for="message"><b>Pesan dan Kesan:</b></label>
                <textarea name="message" id="message" class="form-input"></textarea><br>
                <input type="submit" value="Kirim" class="submit-button">
            </form>
        </div>
    </div>


    <body>
        <footer class="footer-custom">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Kontak</h1>
                    <p>081808555777</p>
                </div>
                <div class="col-sm-4">
                    <h1>Alamat</h1>
                    <p>Jl. Bung Karno No.54D, Pagesangan Tim., Kec. Mataram, Kota Mataram</p>
                </div>
                <div class="col-sm-4">
                    <h1>Jam Buka</h1>
                    <p>10.00 Wita - Habis</p>
                </div>
            </div>
        </footer>
    </body>

</html>
