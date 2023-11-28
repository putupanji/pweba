<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateForm(){
            // var nama = document.getElementById("bil1");
            var setuju = document.getElementById("switch1");
            var nrp = document.getElementById("nrp");
            // Swal.fire(setuju.checked);
            // alert(setuju.checked);
            // return false;
            // if (nama.value == ""){
            //     nama.focus();
            //     // nama.value = "Panji Gantenk";
            //     Swal.fire("Nama harus diisi terlebih dahulu");
            //     return false;
            // }
            // if(setuju.checked == false){
            //     nama.focus();
            //     // nama.value = "Panji Gantenk";
            //     Swal.fire("Anda harus mengisi nama terlebih dahulu");
            //     return false;
            // }




            if(isNaN(nrp.value)){
                Swal.fire("Anda harus mengisi angka");
                return false
            }
            if (nrp.value == ""){
                // nama.focus();
                // nama.value = "Panji Gantenk";
                Swal.fire("NRP harus diisi terlebih dahulu");
                return false;
            }
            if(nrp.value.length != 10){
                Swal.fire("Anda harus mengisi 10 digit NRP");
                return false;
            }

            if(nrp.value.substring(0,4) != 5026){
                Swal.fire("Hanya untuk mahasiswa Sistem Informasi");
                return false;
            }





            //jika return false, maka form tidak dikirim
            // default: return true

        }

    </script>
    <style>
        div {
          padding-top: 50px;
          padding-right: 30px;
          padding-bottom: 50px;
          /* padding-left: 80px; */
        }
        </style>
</head>

<body>
    <div class="container">
        <h1>Form Pendaftaran Anggota HIMASI</h1>
        <!-- return true, form bisa terkirim. Return falses, form tidak terkirim -->
        <form action="https://www.w3schools.com/js/js_string_search.asp" onsubmit="return validateForm();">

            <!-- <div class="form-group">
                <br>
                <label for="bil1">
                    Nama Mahasiswa :
                </label>
                <input id="bil1" type="text" class="form-control" placeholder="Harus diisi!!" /> <br> -->
                <!-- <input type="submit" class="btn btn-dark" value="KIRIM"> -->
            <!-- </div> -->
            <div class="form-group">
                <br>
                <label for="nrp">
                    NRP Mahasiswa :
                </label>
                <input id="nrp" type="text" class="form-control" placeholder="Harus diisi!!" /> <br>
                <input type="submit" class="btn btn-dark" value="KIRIM">
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="switch1">
                <label class="custom-control-label" for="switch1">Sudah mengisi</label>
            </div>

        </form>
    </div>
</body>

</html>
