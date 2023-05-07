<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../favicon.ico">
        @yield('titre')
        <!-- Simple bar CSS -->
        <link rel="stylesheet" href="css/simplebar.css">
        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href={{ url('css/feather.css') }}>
        <link rel="stylesheet" href={{url("css/dataTables.bootstrap4.css")}}>
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href={{url("css/daterangepicker.css")}}>
        <!-- App CSS -->
        <link rel="stylesheet" href={{url("css/app-light.css")}} id="lightTheme">
        <link rel="stylesheet" href={{url("css/app-dark.css")}} id="darkTheme" disabled>
    </head>
    <body class="vertical  light  ">
        <div class="wrapper">
            <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
                <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                    <i class="fe fe-x"><span class="sr-only"></span></i>
                </a>
                <nav class="vertnav navbar navbar-light">
                    <!-- nav bar -->
                    <div class="w-100 mb-4 d-flex">
                        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href={{route('liste')}}>
                            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                          </svg>
                        </a>
                    </div>
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Pages</span>
                    </p>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a href={{route('liste')}}  class="nav-link">
                                <i class="fe fe-box fe-16"></i>
                                <span class="ml-3 item-text">IA information</span>
                            </a>
            
                        </li>
                        <li class="nav-item w-100">
                            <a class="nav-link" href={{route('ajout')}}>
                                <i class="fe fe-layers fe-16"></i>
                                <span class="ml-3 item-text">Formulaire d'ajout</span>
                            </a>
                        </li>
                    
                    </ul>
                    <div class="btn-box w-100 mt-4 mb-1">
                        <a href={{ route('index') }} class="btn mb-2 btn-primary btn-lg btn-block">
                            <i class="fe fe-log-out fe-12 mx-2"></i><span class="small">Log out</span>
                        </a>
                    </div>
                </nav>
            </aside>

            @yield('content')
            
        </div> <!-- .wrapper -->

<script src={{url("js/jquery.min.js")}}></script>
<script src={{url("js/popper.min.js")}}></script>
<script src={{url("js/moment.min.js")}}></script>
<script src={{url("js/bootstrap.min.js")}}></script>
<script src={{url("js/simplebar.min.js")}}></script>
<script src={{url('js/daterangepicker.js')}}></script>
<script src={{url('js/jquery.stickOnScroll.js')}}></script>
<script src={{url("js/tinycolor-min.js")}}></script>
<script src={{url("js/config.js")}}></script>
<script src={{url('js/jquery.dataTables.min.js')}}></script>
<script src={{url('js/dataTables.bootstrap4.min.js')}}></script>
@yield('script')
<script>
    $('#dataTable-1').DataTable(
        {
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });
</script>
<script src="js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
</script>

    </body>
</html>
