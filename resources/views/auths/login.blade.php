<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom/css/style.css">
    <link rel="icon" type="text/css" href="{}">
    <title>Login</title>
</head>

<body>
    <!-- conteint -->
    <div class="content">
        <!-- nav -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary shadow p-3 mb-5 fixed-top">
            <a class="navbar-brand" href="#">
                <img src="img/logo_wikrama.png" width="30" height="30" class="d-inline-block align-top" alt="">
                I-Learning
            </a>
        </nav>
        <!-- nav -->

        <!-- card -->
        <div class="row mb-auto ml-auto mr-auto" style="margin-top: 4.5rem;">

            <div class="col-sm-7 shadow-sm p-3 bg-white carsel">
                <div id="carouselExampleIndicators" class="carousel carousel-fade slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/belajar.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/selamat_siang.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto my-auto login2" style="margin-bottom: 9% !important; margin-top: 9% !important;">
                <form class="form-auth-small" action="/postlogin" method="POST">
                    {{csrf_field()}}
                    <h3 class="judul1 mb-4 text-center">Masuk untuk memulai I-Learning.</h3>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-pill" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-pill" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label paragraf1" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="ml-auto">
                                <a href="" class="text-decoration-none">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block rounded-pill">Log in</button>
                </form>
            </div>

        </div>
        <!-- card -->

    </div>
    <!-- conteint -->

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
</body>

</html>