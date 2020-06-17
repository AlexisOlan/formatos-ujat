<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/formats.css')}}">
</head>
<body>
    <div class="header">
        <img src="{{asset('img/logo/header.png')}}" alt="">
    </div>
    <div class="ujat">
        <img src="{{asset('img/logo/brandw.png')}}" height="500cm" alt="">
    </div>
    <div class="footer">
        <img src="{{asset('img/logo/footer.png')}}" height="70cm" alt="">
    </div>
    <div class="oficio">
        Oficio No. «Num1»/{{$year}}/DACyTI/D<br>
        {{$day . " de " . $month . " " . $year}}
    </div>
    <div class="remitente">
        <strong>«Revisor1»</strong><br>
        Profesor Investigador<br>
        Presente
    </div>
    <div class="contenido">
        De acuerdo al artículo 72 del Reglamento de Titulación, de la Universidad Juárez Autónoma
        de Tabasco, me permito designarlo Director del Trabajo Recepcional titulado <strong>“«Proyecto»”</strong>, 
        a realizarse por la C. <strong>«Alumnos»</strong>, para obtener el título de la Licenciatura
        en Informática Administrativa, bajo la modalidad de Tesis. No omito manifestarle que con fundamento en el
        artículo 78 del reglamento antes mencionado, a partir de la fecha expedida tiene como plazo máximo un año para concluir
        concluir la tesis de lo contrario, el estudiante deberá optar por otra modalidad de titulación.<br><br>

        Sin otro particular, agradezco de antemano su colaboración y apoyo, enviándole un cordial saludo. <br><br>

        Atentamente <br><br><br><br><br>

        MTE. Oscar Alberto González González <br>
        Director <br><br><br>

        <div style="height:.4cm"> C.c.p. Coordinador de Estudios Terminales</div>
        <div style="height:.4cm; padding-left:1.1cm">Tesistas</div>
        <div style="height:.4cm; padding-left:1.1cm">Archivo</div>
        <div style="height:.4cm; padding-left:1.1cm">Consecutivo</div><br><br>

        <div style="font-size: 12px;">MTE. *OAGG/LC*CGZ</div>
    </div>
</body>
</html>