$(document).ready(function () {
    getMaxDate();
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $("#date-8ef2-IOS").datepicker({
        changeMonth: true,
        changeYear: true,
        showOn: 'focus',
        minDate: new Date(1900, 1, 1),
        maxDate: '0',
        defaultDate: new Date(2000, 6, 1),
        yearRange: '-120:-00',
        dateFormat: 'yy-mm-dd',
    });
    $(document).on('click', '#register', function (event) {
        event.preventDefault();
        validaForm();
    });
    $(document).on('keyup', '.onlyLetters', function (event) {
        event.preventDefault();
        var regexLetters = /[A-Za-z Ñ]+/;
        var texto = $(this).val();
        texto = texto.match(regexLetters);
        console.log('- event onlyLetters: ' + texto);
        $(this).val(texto);
    });
    $(document).on('keyup', '.upperCase', function (event) {
        event.preventDefault();
        var texto = $(this).val();
        texto = texto.toUpperCase();
        $(this).val(texto);
    });
    $(document).on('keyup', '.valEmail', function (event) {
        event.preventDefault();
        var email = $(this).val();
        email = email.replace(/ /g, '');
        $(this).val(email.toLowerCase());
        shaEmail(email);
        respEmail = valEmail(email);
        if (resEmail == 1) {
            $('#msgEmail').html('<label style="color: green; font-size: 12px;">Email válido.</label>');
        } else {
            $('#msgEmail').html('<label style="color: red; font-size: 12px;">Ejemplo de Email válido: <i>ejemplo@dominio.com</i></label>');
        }
    });
    $(document).on('keyup', '.valTel', function (event) {
        event.preventDefault();
        console.log('- event keyup valTel');
        var tel = $(this).val();
        tel = tel.replace(/ /g, '');
        tel = tel.replace(/\D/g, '');
        respTel = valTel(tel);
        if (respTel == 1) {
            $('#msgTel').html('<label style="color: green; font-size: 12px;">Número válido.</label>');
        } else {
            $('#msgTel').html('<label style="color: red; font-size: 12px;">Debe proporcionar un Número con 10 dígitos.</label>');
        }
        $(this).val(tel);
    });
    $(document).on('keyup', '.valCP', function (event) {
        event.preventDefault();
        console.log('- event keyup valCP ');
        var CP=$(this).val();
        CP=CP.replace(/ /g,'');
        CP = CP.replace(/\D/g, '');
        respCP = valCP(CP);
        if (respCP == 1) {
            $('#msgCP').html('<label style = "color: green; font-size: 12px;" > C.P.válido. < /label>');
        }else{
            $('#msgCP').html('<labelstyle = "color: red; font-size: 12px;" > Debe proporcionar un CP válido. < /label>');
        }
        $(this).val(CP);
    });
    $(document).on('keyup change', 'input[name="fecNac"]', function (event) {
                event.preventDefault();
                var date = $(this).val();
                console.log(date);
                if (date != '') {
                    var mayorEdad = parseInt(valMayoriaEdad(date));
                    console.log('mayorEdad: '+mayorEdad);
                    switch(mayorEdad){
                        case 1:$('#  msgFecNac ').html(' < label style = "color: green; font-size: 12px;" > La fecha es correcta. < /label>');
                        break;
                        case 2:$('#msgFecNac').html('<label style="color: red; font-size: 12px;">La fecha corresponde a un Menor de Edad. < /label>');break;default:$('#msgFecNac').html('<label style = "color: red; font-size: 12px;" > La fecha es invalida. < /label>');
                        break;}
                }else{
                    $('#msgFecNac').html('<label style = "color: red; font-size: 12px;" > La fecha es invalida. < /label>');
                }
    });

    function shaEmail(email){
        console.log('- function: shaEmail('+email+') ');
        $.ajax({
            type:"GET",
            url:"API/sha256.php",
            data:{' text ':email},
            success:function(response){
                response=$.parseJSON(response);
                console.log(response.sha);
                $('#emailHASH ').val(response.sha);
            }
        });
    }
    function getMaxDate() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = yyyy + '-' + mm + '-' + dd;
        $('#date-8ef2,#date - 8 ef2 - IOS ').attr('max',today);
    }
    function valEmail(email){
        console.log(' - function valEmail: '+email);
        emailRegex=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        resEmail=emailRegex.test(email);
        resEmail=resEmail==true?1:0;
        console.log(' - Resultado Email: '+resEmail);
        return resEmail;
    }
    function valTel(telefono) {
        console.log(' - function valTel: '+telefono)
        var regexRepeat = /^(?!.*(.)\1{6})/;
        telefono = telefono.replace(/ /g, '');
        telefono = telefono.replace(/\D/g, '');
        var resRepeat = regexRepeat.test(telefono);
        respTel = (telefono.length == 10 && resRepeat == true) ? 1 : 0; console.log(' - Resultado Telefono: '+respTel);
        return respTel;
    }
    function valCP(cp) {
        console.log(' - function valCP: '+cp)
        var regexRepeat = /^(?!.*(.)\1{5})/;
        cp = cp.replace(/ /g, '');
            cp = cp.replace(/\D/g, '');
        var resRepeat = regexRepeat.test(cp);
            respCP = (cp.length == 5 && resRepeat == true) ? 1 : 0;
            console.log(' -Resultado cp: '+respCP);return respCP;
    }
    function valMayoriaEdad(valFecha) {
        console.log(' - function valMayoriaEdad: '+valFecha);var respVal=0;
        var msgResp='';
        var currentDate=new Date();
        var currentYear=parseInt(currentDate.getFullYear());
        var currentMonth=parseInt(currentDate.getMonth())+1;
        var currentDay=parseInt(currentDate.getDate());
        compareDate=valFecha.split("-");
        compareYear=parseInt(compareDate[0]);
        compareMonth=parseInt(compareDate[1]);
        compareDay=parseInt(compareDate[2]);
        console.log('Fecha Actual Año: '+currentYear+' | Mes: '+currentMonth+' | Día: '+currentDay);
        console.log('Fecha a Comparar Año: '+compareYear+' | Mes: '+compareMonth+' | Día: '+compareDay);
        yearsOld=currentYear-compareYear;
        if(yearsOld<100&&yearsOld>18){respVal=1;}
        if (yearsOld < 18) {respVal = 2;}
        if (yearsOld > 100) {respVal = 3;}
        if (yearsOld == 18) {
            if (compareMonth == currentMonth) {
                if (compareDay == currentDay) {
                    respVal = 1;
                }
                if (compareDay < currentDay) {
                    respVal = 1;
                }
                if (compareDay > currentDay) {
                    respVal = 2;
                }
            }
            if (compareMonth < currentMonth) {
                respVal = 1;
            }
            if (compareMonth > currentMonth) {
                respVal = 2;
            }
        }
        if (yearsOld == 100) {
            if (compareMonth == currentMonth) {
                if (compareDay == currentDay) {
                    respVal = 3;
                }
                if (compareDay < currentDay) {
                    respVal = 3;
                }
                if (compareDay > currentDay) {
                    respVal = 1;
                }
            }
            if (compareMonth < currentMonth) {
                respVal = 3;
            }
            if (compareMonth > currentMonth) {
                respVal = 1;
            }
        }
        respVal = parseInt(respVal);
        switch (respVal) {
            case 1:
                msgResp = ' - Fecha Valida.';
                break;
            case 2:
                msgResp = '- Menor de Edad.';
                break;
            case 3:
                msgResp = '- 100 años o más.';
                break;
            default:
                msgResp = '- Error.';
                break;
        }
        console.log('- yearsOld: '+yearsOld+' | Respuesta: '+respVal+' = '+msgResp);
        return respVal;
    }
    function validaForm() {
        var error = 0;
        var msgError = '';
        var form = $(' #registerForm');
        var email = $('input[name="email"]').val();
        email=email.replace(/ /g,'');emailSHA256=$('#emailHASH ').val();
        var nombre=$('input[name = "nombre"]').val();
        nombre=nombre.replace(/ /g,'');
        var apellidos=$('input[name = "apellido"]').val((/ /g,''));
        var telefono=$('input[name = "telefono"]').val(/ /g,'');
        var fechaNac=$('input[name = "fecNac"]').val();
        var estado = $('select#text-85dd')[0].selectedIndex;
        var cp = $('input[name="cp" ]').val();
        cp = cp.replace(/ /g, '');
        var genero = $('select#select-e270')[0].selectedIndex;
        var tcpp = $('#agree-2267');
        var resEmail = valEmail(email);
        if (resEmail != 1) {
            msgError += "- Debe indicar un <b>Email válido.</b><br>";
            error++;
        }
        if (nombre == '') {
            msgError += '- Debe indicar un <b>Nombre</b> válido.<br>';
            error++;
        }
        if (apellidos == '') {
            msgError += '- Debe indicar <b>Apellido(s)</b> válido(s).<br>';
            error++;
        }
        var respTel = valTel(telefono);
        if (respTel != 1) {
            msgError += '- Debe indicar un <b>Teléfono de 10 digitos.</b><br>';
            error++;
        }
        if (fechaNac == '') {
            msgError += '- Debe indicar su <b>Fecha de Nacimiento.</b><br>';
            error++;
        } else {
            var mayorEdadV = valMayoriaEdad(fechaNac);
            console.log('mayorEdadV: ' + mayorEdadV);
            switch (mayorEdadV) {
                case 1:
                    break;
                case 2:
                    msgError += ' -La Fecha de Nacimiento corresponde a un < b > Menor de Edad < /b>.<br>\n';
                    error++;
                    break;
                default:
                    msgError+='- La Fecha de Nacimiento es inválida.\n ';error++;
                    break;
            }
        }
        if (estado == 0) {
            msgError += '- Debe indicar su <b>Estado.</b><br>';
            error++;
        }
        var respCP = valCP(cp);
        if (respCP != 1) {
            msgError += '- Debe indicar un <b>Código Postal</b> válido.<br>';
            error++;
        }
        if (genero == 0) {
            msgError += '- Debe indicar su <b>Género.</b><br>';
            error++;
        }
        if (tcpp.is(':checked') == false) {
            msgError += '- Debe aceptar los <b>Términos, Condiciones y Politica de Privacidad. < /b>';
            error++;
        }
        console.log('error: '+error);
        if(error>0){
            $('#modalAlertBody ').html(msgError);
            $('#modalAlert ').modal('show ');
        }else{
            console.log(' - event Submit Form ');
            dataLayer.push({
                'event ':'trackEvent ','eventCategory ':'Michelob Ultra Olimpics ','eventAction ':'Registro ','eventLabel':emailSHA256
            });
            console.log(dataLayer);
            form.submit();
        }
        $('html, body').animate({
                scrollTop: $('#registerForm').offset().top
        }, 2000);
    }

});
