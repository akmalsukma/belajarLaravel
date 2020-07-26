<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <style>
        body {
            /* background-color: #E0FAF7; */
        }

        .container {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #ffffff;
        }


        .profile {
            font-style: italic;
            font-size: 20px;


        }

        .portfolio {
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-top: 7%;
        }

        .experience {
            margin-top: 5%;
            font-style: bold;

        }

        .helo {
            margin-top: 3%;
            font-size: 50px;

        }

        .nama {

            /* margin-left: 5%; */
        }

        .foto_profile {
            margin-top: 3%;
            margin-left: 10%;
            margin-bottom: 3%;
        }

        .text-experience {
            text-align: center;
            font-size: 20px;
        }

        .text-portfolio {
            font-size: 20px;
            margin-top: 7%;
            margin-left: 5%;
        }
    </style>
</head>

<body>


    <nav id="navbar-example2" class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">My Blog</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
        </ul>
    </nav>
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="container">
        <div class="profile" id="profile">
            <div class="row">
                <div class="col">
                    <p class="helo">Akmal Permata Sukma</p>
                    <p class="nama">Saya pelajar bersekolah di SMK Taruna Bhakti, di
                        sana saya berjurusan RPL (Rekayasa Perangkat Lunak), masih programmer pemula harus
                        banyak
                        belajar lagi. </p>
                </div>
                <div class="col">
                    <img src="{{asset('/img/profile_akmal.jpeg')}}" alt="Foto Profile" width="460px"
                        class="foto_profile">
                </div>
            </div>
        </div>

        <div class="experience" id="experience">
            <p class="text-experience"> Saya membuat beberapa project untuk di ikuti perlombaan itu saya
                dapat karena belajar di SMK Taruna Bhakti</p>

        </div>

        <div class="portfolio" id="portfolio">
            <div class="row">
                <div class="col">
                    <p class="text-portfolio">
                        Saya membuat project bernama smartclass itu tentang absensi siswa melalui rfid, dan di
                        smartclass itu ada rekapan absen dari setiap siswa rekap tersebut dapat di lihat dari web dan
                        handphone.
                        Saya membuat website smartclass dan membuat REST API untuk aplikasi android.
                    </p>

                </div>
                <div class="col">
                    <img src="{{asset('/img/portfolio1.png')}}" alt="Foto Portfolio 1" height="320px">
                </div>
            </div>
        </div>

    </div>



</body>

</html>