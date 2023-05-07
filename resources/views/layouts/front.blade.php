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
    <body class="horizontal  light  ">
        <div class="wrapper">
            

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
