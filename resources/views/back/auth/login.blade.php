<!doctype html>
<html lang="az">

<head>

    <meta charset="utf-8" />
    <title>Grabit - Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grabit Admin Login" name="description" />
    <meta content="Sadig Aliyev" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('back/assets') }}/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('back/assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('back/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('back/assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="#" class="auth-logo">
                                <img src="{{ asset('back/assets') }}/images/logo-dark.png" height="30"
                                    class="logo-dark mx-auto" alt="">
                                <img src="{{ asset('back/assets') }}/images/logo-light.png" height="30"
                                    class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>

                    <div class="p-3">
                        <form method="POST" class="form-horizontal mt-3">
                            @csrf
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember_me"
                                            id="customCheck1">
                                        <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log
                                        In</button>
                                </div>
                            </div>

                            <div class="form-group mb-0 row mt-2">
                                <div class="col-sm-7 mt-3">
                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot
                                        your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('back/assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('back/assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('back/assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('back/assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('back/assets') }}/libs/node-waves/waves.min.js"></script>

    <script src="{{ asset('back/assets') }}/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/upcube/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 05:30:41 GMT -->

</html>
