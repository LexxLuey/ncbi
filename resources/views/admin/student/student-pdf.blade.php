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
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href=" {{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/pace/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/highlight/styles/github-gist.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables/datatables.min.css') }}" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/neptune.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/neptune.png') }}" />

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
                                <h1>Student Detail Page</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ storage_path('app/public/images' . $student->photo) }}"
                                            class="img-fluid card-img-top">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" class="form-control"
                                            value=" {{ $student->first_name }} " id="first_name" disabled>
                                    </div>
                                    @if ($student->middle_name)
                                        <div class="col-md-6">
                                            <label for="middle_name" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control"
                                                value=" {{ $student->middle_name }} " id="middle_name" disabled>
                                        </div>
                                    @endif
                                    <div class="col-md-6">
                                        <label for="surname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value=" {{ $student->surname }} "
                                            id="surname" disabled>
                                    </div>
                                </div>
                                <div class="row m-t-lg">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="text" class="form-control" value=" {{ $student->email }} "
                                            id="email" aria-describedby="email" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control"
                                            value=" {{ $student->phone_number }} " id="phone_number" disabled>
                                    </div>
                                </div>
                                <div class="row m-t-lg">
                                    <div class="col-md-6">
                                        <label for="sex" class="form-label">Sex</label>
                                        <input type="text" class="form-control" value=" {{ $student->sex }} "
                                            id="sex" aria-describedby="sex" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="age_range" class="form-label">Age Range</label>
                                        <input type="text" class="form-control" id="age_range"
                                            value=" {{ $student->age_range }} " disabled>
                                    </div>
                                </div>
                                <div class="row m-t-lg">
                                    <div class="col-md-6">
                                        <label for="marital_status" class="form-label">Marital Status</label>
                                        <input type="text" class="form-control" id="marital_status"
                                            value=" {{ $student->marital_status }} "
                                            aria-describedby="marital_status" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" value=" {{ $student->address }} "
                                            id="address" disabled>
                                    </div>
                                </div>
                                <div class="row m-t-lg">
                                    <div class="col-md-6">
                                        <label for="centre" class="form-label">Centre</label>
                                        <input type="text" class="form-control" value=" {{ $student->centre }} "
                                            id="centre" aria-describedby="centre" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="completed_growth_track" class="form-label">Growth Track</label>
                                        <input type="text" class="form-control" id="completed_growth_track"
                                            value=" {{ $student->completed_growth_track ? 'Completed' : 'Incomplete' }} "
                                            disabled>
                                    </div>
                                </div>
                                <div class="row m-t-lg">
                                    <div class="col">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Javascripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }} "></script>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatables.js') }}"></script>

</body>

<!-- Mirrored from phantom-themes.com/neptune/source/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Oct 2021 09:17:03 GMT -->

</html>