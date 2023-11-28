<html>
    <head>
        <title>Belajar CSS</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link rel="stylesheet" href="mystyle.css">
        <style>
            body{
                background-color: aquamarine;
                color: blueviolet;
                padding: 25px 50px 75px 100px;

            }
            p{
                text-align: center;
            }
            .ratakanan{
                text-align: right;
                text-transform: uppercase;
                font-weight: bold;
            }
            .warnaharga{
                color: black;
            }
        </style>
    </head>
    <body>
        <!--Inline CSS, digunakan untuk setting spesifik hanya di 1 bagian-->
        Hallo <b style="color:red; text-shadow: 2px 2px black;">Apa</b> Kabar?
        <!--Inpage CSS, digunakan untuk setting yang berbada di halaman ini saja-->
        <div class="ratakanan warnaharga" id="ratakanan2">Hallo Apa Kabar?</div>
        <!--External File, digunakan untuk setting global 1 situs -->
        <span class="sembunyi">Hallo Apa Kabar?</span>
        <!---->
        <p>Hallo Apa Kabar?</p>
    </body>
</html>
