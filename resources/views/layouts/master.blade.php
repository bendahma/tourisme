<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <title>Tourisme DZ</title>

    <!--Google font-->
    @include('layouts._stylesheets')
</head>
<body>
    @yield('content')
</body>
@include('layouts._scripts')

    <script>
        $(document).ready(function () {
            try {
                $('.ripple-effect').ripples({
                    resolution: 256,
                    perturbance: 0.005
                });
            } catch (e) {
                $('.error').show().text(e);
            }
        });
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

</html>