<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../swiper/swiper.min.css" />
    <link rel="stylesheet" href="../swiper/swiper-custom.css" /> -->
    <!-- Place your kit's code here -->
    <!-- fontawesom -->
    <script src="https://kit.fontawesome.com/70d50d2d9f.js" crossorigin="anonymous"></script>

    <!-- hover master -->
    <link rel="stylesheet" href="../Hover/css/hover.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../custom/css/style.css">
    <link rel="icon" type="text/css" href="{}">
    <title>Dashboard Siswa</title>
</head>

<body class="body">
    <!-- content -->
    <div class="content">
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary shadow p-3 mb-5 fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nv-right">
                <!-- navbar profile -->
                <li class="list-inline-item active dropdown">
                    <a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=30 height=30>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="./examples/profile.html" class="dropdown-item">
                            <i class="fas fa-user fa-sm mr-auto"></i>
                            <span>My profile</span>
                        </a>
                        <a href="./examples/profile.html" class="dropdown-item">
                            <i class="fas fa-edit fa-sm mr-auto"></i>
                            <span>Settings</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#!" class="dropdown-item">
                            <i class="fa fa-sign-out fa-sm mr-auto"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </div>
            <!-- collapse navbar -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <a class="navbar-brand" href="#"><img src="../img/logo_wikrama.png" width="40" height="40" alt="">
                    I-Learning</a>
                <!-- navbar left -->
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Anggota</a>
                    </li> -->
                </ul>
                <!-- navbar right -->
                <div class="nb-right">
                    <!-- navbar right -->
                    <ul class="navbar-nav ml-auto">
                        <!-- navbar profile -->
                        <li class="nav-item active dropdown float-sm-right">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=40 height=40>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right drop">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="./examples/profile.html" class="dropdown-item">
                                    <i class="fas fa-user fa-sm mr-auto"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="./examples/profile.html" class="dropdown-item">
                                    <i class="fas fa-edit fa-sm mr-auto"></i>
                                    <span>Settings</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="/logout" class="dropdown-item">
                                    <i class="fa fa-sign-out fa-sm mr-auto"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- tutup navbar -->

        <!-- judul -->
        <div class="container col-sm-12 text-center jls">
            <div class="row justify-content-center">
                <h2 class="font-size mt-5 judul1 judul">Selamat Datang,  {{ auth()->user()->name }}</h2>
                <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Graduation_ktn0.svg"
                    width="120" height="110" class="img img-fluid">
            </div>
            <p class="font-size paragraf1">I-Learning merupakan konsep pembelajaran yang memanfaatkan teknologi
                informasi.</p>
        </div>
        <!-- judul -->

        <!-- form -->
        <div class="container col-sm-6 frm">
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control rounded-pill input" placeholder="Nama Matapelajaran">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- form -->

        <!-- card -->
        <div class="col-sm-12 text-center mt-4">
            <div class="row">
                @foreach($b as $mapel)
                <div class="col-sm-3 mt-3 mb-3 mtp hvr-bob">
                    <a href="siswaa/{{ $mapel->slug }}" class="text-decoration-none text-dark">
                        <div class="card border-primary cd">
                            <div class="card-header bg-primary text-white">
                               {{ $mapel->mapel }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/bookshelves_xekd.svg"
                                        alt="" class="card-img-top w-75">
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        <!-- card -->

        <!-- info -->
<!--         <div class="col-sm-12 mt-5 mb-5">
            <div class="row justify-content-center">

                <div class="col-sm-3 mt-2 mb-2 text-center inf hvr-bob">
                    <div class="card cd">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h3 class="card-title judul2">0</h3>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text paragraf1">Tugas yang sudah dikerjakan</p>
                                <a href="#" class="card-link float-sm-right judul2">Lihat Semua</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3 mt-2 mb-2 text-center inf hvr-bob">
                    <div class="card cd">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h3 class="card-title judul2">0</h3>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text paragraf1">Tugas yang belum dikerjakan</p>
                                <a href="#" class="card-link float-sm-right judul2">Lihat Semua</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div> 
    -->
    <br>
        <!-- info -->

    <!-- content -->

    <!-- footer -->
    <div class="footer">
        <div style="background-color: #34495E;">
            <div class="container">
                <div class="row">
                    <div class="container mt-5 mb-5">
                        <div class="ml-auto mr-auto ">
                            <h4 class="text-white judul1 display-4">I-Learning</h4>
                            <p class="text-white-50 paragraf1">I-Learning merupakan konsep pembelajaran yang
                                memanfaatkan
                                teknologi informasi.</p>
                            <h4 class="text-white judul2">I-Learning</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-white" style="background-color: #12293b;">
            <div class="container">
                <div class="row ml-auto mr-auto">
                <div class="navbar navbar-expand-sm mx-auto">
                    <div class="rounded-circle align-middle mr-4" style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                        <a href="https://www.facebook.com/">
                            <img class="social align-middle" width="25" height="25" style="margin-top:5px; margin-left:5px;" src="icon/facebook.png" alt="">
                        </a>
                    </div>
                    <div class="rounded-circle align-middle mr-4" style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                        <a href="https://www.instagram.com/">
                            <img class="social align-middle" width="25" height="25" style="margin-top:5px; margin-left:5px;" src="icon/instagram.png" alt="">
                        </a>
                    </div>
                    <div class="rounded-circle align-middle mr-4" style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                        <a href="http://twitter.com/">
                            <img class="social align-middle" width="25" height="25" style="margin-top:5px; margin-left:5px;" src="icon/twitter.png" alt="">
                        </a>
                    </div>
                    <div class="rounded-circle align-middle mr-4" style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                        <a href="https://www.youtube.com/">
                            <img class="social align-middle" width="25" height="25" style="margin-top:5px; margin-left:5px;" src="icon/youtube.png" alt="">
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="../swiper/swiper.min.js"></script>
    <!-- <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script> -->
</body>

</html>