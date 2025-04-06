<!DOCTYPE html>
<html lang="az">


<!-- Mirrored from demo.dashboardpack.com/marketing-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 08:39:31 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Grabit - Admin Login</title>

    <link rel="icon" href="{{ asset('back/assets') }}/img/logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets') }}/css/bootstrap1.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets') }}/vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="{{ asset('back/assets') }}/vendors/font_awesome/css/all.min.css" />
    <!-- datatable CSS -->
    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{ asset('back/assets') }}/vendors/scroll/scrollable.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('back/assets') }}/css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets') }}/css/style1.css" />
    <link rel="stylesheet" href="{{ asset('back/assets') }}/css/colors/default.css" id="colorSkinCSS">
</head>

<body class="">

    <div class="col-lg-12">
        <div class="white_box mb_30">
            <div class="row justify-content-center">

                <div class="col-lg-4">
                    <!-- sign_in  -->
                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Log in</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                @csrf
                                <div class="">
                                    <input type="text" name="email" class="form-control"
                                        placeholder="Enter your email">
                                </div>
                                <div class="">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <button class="btn_1 full_width text-center">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<!-- Mirrored from demo.dashboardpack.com/marketing-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 08:39:31 GMT -->

</html>
