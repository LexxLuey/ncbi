<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from phantom-themes.com/neptune/source/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Oct 2021 09:14:01 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="NCBI">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>NCBI</title>

    <!-- Styles -->
    @include('partials.admin-css')
    @yield('page-styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="col-xs-4 text-center">
                                    <div class="page-description">
                                        <h1>@yield('title')</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @yield('content')
                    </div>
                </div>
            </div>

 

    <!-- Javascripts -->
    @include('partials.admin-js')
    @yield('page-javascripts')

</body>

<!-- Mirrored from phantom-themes.com/neptune/source/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Oct 2021 09:17:03 GMT -->

</html>
