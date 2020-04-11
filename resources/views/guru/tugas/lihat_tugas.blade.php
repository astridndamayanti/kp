<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <script src="../custom/js/script.js"></script>

    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />

    <title>Tugas</title>
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
                <a class="navbar-brand" href="/guruuu"><img src="{{asset('adminn/assets/img/logo_wikrama.png')}}" width="40" height="40" alt="">
                    I-Learning</a>
                <!-- navbar left -->
                <ul class="navbar-nav mr-auto">
                    <!-- navbar left -->
                    <li class="nav-item">
                        <a class="nav-link" href="/guruuu/{{ $m->slug }}">Dashboard</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Tugas.html">Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Anggota</a>
                    </li>
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
                                <a href="#!" class="dropdown-item">
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
        <div class="container jdl">
            <div class="container bg-dark rounded text-white shadow p-3 rounded">
                <h5 class="text-white judul2 jdlmp">Bahasa Indonesia</h5>
            </div>
        </div>
        <!-- judul -->

        <!-- card -->
        <div class="container crtr">
            <div class="row">
                <!-- ---------- -->
                <div class="col-sm-12 mt-4 mb-4 crd">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary rounded-pill" data-toggle="collapse"
                            href="#CollapseBagiTugas" role="button" aria-expanded="false"
                            aria-controls="collapseExample"><i class="fas fa-plus"></i> Buat
                            Tugas</button>
                        <button type="button" class="btn btn-success rounded-pill" data-toggle="collapse"
                            href="#CollapseLihatTugas" role="button" aria-expanded="false"
                            aria-controls="collapseExample">Lihat Semua Tugas</button>
                    </div>
                    <!-- collapse buat tugas-->
                    <div class="collapse mt-3" id="CollapseBagiTugas">
                        <div class="card">
                            <div class="container">
                            <form action="/guruuu/{{ $m->slug }}/upload_tugas" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                    <input type="hidden" name="mapel_id" value="{{ $mapel->id }}">
                                    <input type="hidden" name="rombel_id" value="{{ $mapel->rombel_id }}">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"
                                            class="col-form-label col-form-label-sm">Judul</label>
                                        <input class="form-control" type="text" name="judul" placeholder="Masukan Judul Tugas">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"
                                            class="col-form-label col-form-label-sm">Catatan</label>
                                        <textarea name="catatan" class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label col-form-label-sm"
                                            for="formGroupExampleInput">Batas
                                            Pengerjaan</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fas fa-calendar-alt text-dark"></i></span>
                                            </div>
                                            <input name="deadline" class="form-control col-sm-2" type="date">
                                        </div>
                                    </div>
                                    <!-- ----------- -->
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <!-- Modal file -->
                                                    <a class="text-decoration-none text-dark" href=""
                                                        data-toggle="modal" data-target="#ModalFile">
                                                        <i class="fas fa-file fa-lg mr-auto"></i>
                                                    </a>
                                                    <!-- Modal file -->
                                                    <div class="modal fade" id="ModalFile" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalCenterTitle">
                                                                        Tambahkan File</h5>
                                                                    <button type="button" value="upload_tugas" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="file" class="custom-file-input"
                                                                                id="customFile" multiple>
                                                                            <label class="custom-file-label"
                                                                                for="customFile">Choose file</label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal</button>
                                                                    <button type="button" class="btn btn-info">Tambahkan
                                                                        File</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal youtube-->
                                                    <a class="text-decoration-none text-danger" href=""
                                                        data-toggle="modal" data-target="#ModalYoutube"><i
                                                            class="fab fa-youtube fa-lg mr-auto"></i>
                                                    </a>
                                                    <!-- Modal youtube-->
                                                    <div class="modal fade" id="ModalYoutube" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalCenterTitle">
                                                                        Sisipka Video</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-row">
                                                                            <div class="col">
                                                                                <input type="text"
                                                                                    class="form-control input">
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Search</button>
                                                                            </div>
                                                                        </div>
                                                                        <span>Masukan penelusuran pada kotak di atas
                                                                            untuk
                                                                            menemukan video.</span>
                                                                        <div class="container">

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal</button>
                                                                    <button type="button"
                                                                        class="btn btn-info">Tambahkan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal link-->
                                                    <a class="text-decoration-none text-dark" href=""
                                                        data-toggle="modal" data-target="#ModalLink"><i
                                                            class="fas fa-link fa-lg mr-auto"></i>
                                                    </a>
                                                    <!-- Modal link-->
                                                    <div class="modal fade" id="ModalLink" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalCenterTitle">
                                                                        Tambahkan Link</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-row">
                                                                            <div class="col">
                                                                                <input type="text"
                                                                                    class="form-control rounded-pill input">
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary rounded-pill">Search</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal</button>
                                                                    <button type="button" class="btn btn-info">Tambahkan
                                                                        Link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-sm btn-dark ml-2"
                                                        data-toggle="collapse" href="#CollapseBagiTugas" role="button"
                                                        aria-expanded="false"
                                                        aria-controls="collapseExample">Batal</button>
                                                    <button type="submit" value="upload" 
                                                        class="btn btn-sm btn-info ml-2">Posting</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- ------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="far fa-file-word fa-3x" style="color: #007bff;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">kisi-kisi kwh.docx</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- ------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="far fa-file-excel fa-3x" style="color: #28a745;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">kisi-kisi kwh.xlsx</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="far fa-file-powerpoint fa-3x text-center"
                                                    style="color: #fd7e14;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">kisi-kisi kwh.pptx</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="far fa-file-pdf fa-3x text-center"
                                                    style="color: #dc3545;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">kisi-kisi kwh.pdf</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="far fa-folder-open fa-3x text-center"
                                                    style="color: #ffc107;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">Folder kisi-kisi kwh</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="far fa-file-archive fa-3x text-center"
                                                    style="color: #17a2b8;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">kisi-kisi kwh.rar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="far fa-file fa-3x text-center" style="color: #6c757d;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">kisi-kisi kwh.txt</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <i class="fas fa-link fa-3x text-center" style="color: #343a40;"></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">Judul Situs</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <div class="card" style="max-width: 300px;">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4 card-header text-center">
                                                <!-- thumbnail youtube -->
                                                <img src="http://img.youtube.com/vi/iXH6zdvhN80/default.jpg"
                                                    class="img-fluid" alt="">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <p class="card-text paragraf2 text-center">Ngambil nama title
                                                        videonya dari
                                                        youtube
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- -------- -->
                            </div>
                        </div>
                    </div>
                    <!-- collapse buat tugas-->
                    
                    <!-- collapse lihat tugas-->
                    <div class="collapse mt-3" id="CollapseLihatTugas">
                        <div class="card">
                            <!-- ------- -->
                            <div class="card-header">Tugas</div>
                            <div class="card-body">
                                <form>
                                    <div class="table-responsive">
                                        <table id="table_id"
                                            class="table datatable-basic table-bordered table-sm display"
                                            cellspacing="0" width="100%">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="th-sm">Judul Tugas
                                                    </th>
                                                    <th class="th-sm">Batas Pengerjaan
                                                    </th>
                                                    <th class="th-sm">Sudah Mengumpulkan
                                                    </th>
                                                    <th class="th-sm">Belum Mengumpulkan
                                                    </th>
                                                    <th class="th-sm">Perintah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Teks Eksposisi</td>
                                                    <td>28/01/2020</td>
                                                    <td class="text-center">20</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">
                                                        <!-- <button class="btn btn-success btn-sm">Edit</button>
                                                        <button class="btn btn-danger btn-sm">Hapus</button> -->
                                                        <a class="btn btn-info btn-sm" href="LihatTugas.html">Lihat</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Teks Narasi</td>
                                                    <td>28/01/2020</td>
                                                    <td class="text-center">20</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">
                                                        <!-- <button class="btn btn-success btn-sm">Edit</button>
                                                        <button class="btn btn-danger btn-sm">Hapus</button> -->
                                                        <a class="btn btn-info btn-sm" href="LihatTugas.html">Lihat</a>
                                                    </td class="text-center">
                                                </tr>
                                                <tr>
                                                    <td>Teks Prosedur</td>
                                                    <td>28/01/2020</td>
                                                    <td class="text-center">20</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">
                                                        <!-- <button class="btn btn-success btn-sm">Edit</button>
                                                        <button class="btn btn-danger btn-sm">Hapus</button> -->
                                                        <a class="btn btn-info btn-sm" href="LihatTugas.html">Lihat</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pantun</td>
                                                    <td>28/01/2020</td>
                                                    <td class="text-center">20</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">
                                                        <!-- <button class="btn btn-success btn-sm">Edit</button>
                                                        <button class="btn btn-danger btn-sm">Hapus</button> -->
                                                        <a class="btn btn-info btn-sm"href="LihatTugas.html">Lihat</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                            <!-- -------- -->
                        </div>
                    </div>
                    <!-- collapse lihat tugas-->
                </div>
                <!-- ---------- -->

                <!-- ---------- -->
            </div>
        </div>
        <!-- card -->
    </div>
    <!-- content -->
    <!-- footer -->
    <div class="footer">
        <div class="text-white" style="background-color: #12293b;">
            <div class="container">
                <div class="row ml-auto mr-auto">
                    <div class="navbar navbar-expand-sm mx-auto">
                        <a onclick="facebook()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-facebook-f mr-auto"
                                    style="margin-top:5px; margin-left:10px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                        <a onclick="instagram()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-instagram fa-lg mr-auto"
                                    style="margin-top:8px; margin-left:8px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                        <a onclick="twitter()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-twitter fa-lg mr-auto"
                                    style="margin-top:9px; margin-left:7px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                        <a onclick="youtube()" href="">
                            <div class="rounded-circle align-middle mr-4"
                                style="width:35px; height:35px; background-color: rgba(255, 255, 255, .2);">
                                <i class="fab fa-youtube fa-lg mr-auto"
                                    style="margin-top:8px; margin-left:5px; color: white; font-size: 1.5em;"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    
    <!-- datatable -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>