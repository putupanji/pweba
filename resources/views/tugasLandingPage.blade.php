<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url("designer_1.png");
            background-repeat: no-repeat;
            background-position: right top;
            background-size: 730px;
        }

        /* Ganti warna teks dan outline pada navbar */
        #topNav .nav-link {
            color: #111B47;
            border: 1px solid transparent;
        }

        /* Tambahkan padding kiri pada navbar */
        #topNav {
            padding-left: 185px;
        }

        /* Ganti warna teks pada tombol "Buy Now" */
        #topNav .btn-primary {
            color: #ffffff;
        }

        /* Ganti warna outline menjadi transparan */
        .no-outline {
            outline: none;
        }

        /* Ganti warna outline pada button menjadi #111B47 */
        .btn-no-outline {
            box-shadow: none;
            outline: none;
            border-color: #111B47;
        }
    </style>
</head>

<body>
    <nav id="topNav" class="navbar fixed-top navbar-expand-sm navbar-dark bg-transparent">
        <ul class="nav" style="color: #111B47;">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <a class="navbar-brand mx-auto" href="#" style="color: #111B47;">
            <h1>Landing</h1>
        </a>
        <button class="btn btn-primary no-outline" style="margin-right: 100px; color: #ffffff; background-color: #111B47;">Buy Now</button>
    </nav>

    <div class="row" style="padding-left: 200px; padding-top: 200px; margin-bottom: 20px;">
        <div class="col-sm-12 my-auto">
            <div class="card card-block w-75" style="background: transparent; color: #111B47;">
                <h1>Introduce Your Product <br> Quickly & Effectively</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean <br> commodo ligula eget dolor.
                    Aenean
                    massa. Cum sociis natoque <br> penatibus et magnis dis parturient montes, nascetur ridiculus
                    <br><br>
                    mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,<br> sem. Nulla consequat massa
                    quis
                    enim.
                </p>
            </div>
        </div>
    </div>
    <div class="row" style="padding-left: 215px; margin-top: 20px;">
        <button type="button" class="btn btn-primary btn-no-outline"
            style="margin-right: 10px; color: #ffffff; background-color: #111B47;">Purchase UI Kit</button>
        <button type="button" class="btn btn-outline-primary btn-no-outline" style="color: #111B47;">Learn More</button>
    </div>
</body>

</html>
