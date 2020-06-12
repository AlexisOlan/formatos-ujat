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
    <header>
        F4: Solicitud de Director de Tesis
        <div class="header">
            {{$year}}
        </div>
    </header>
    <main>
        <div class="fecha">
            Cunduacán, Tabasco., a {{$day}} de {{$month}} del {{$year}}.
        </div>
        <div class="asunto" style="left:9cm!important;">
            Asunto: Solicitud de Directores para Trabajo Recepcional.
        </div>
        <div class="destinatario">
            <span class="nombre" style="font-weight:bold;">Lic. Oscar González González </span><br>
            Director de la DACyTI <br>
            Presente
        </div>
        <div class="contenido">
            En virtud de que con fecha {{$day}} de {{$month}} de {{$year}},  la Comisión Revisora dictaminó como viable<br><br>

            nuestro anteproyecto titulado “{{$alumno['trabajo']}}”, con folio: <br><br> {{$alumno['folio']}}, cuyo
            
            desarrollo fue supervisado por los profesores: {{$alumno['maestro1']}} y  <br><br>

            {{$alumno['maestro2']}}; por este medio nos permitimos proponerlos ante usted para que sean <br><br>

            designados como directores <br><br>

            Sin otro particular, agradecemos la gentileza de su atención. <br><br><br><br><br>


            <span class="att" style="font-weight:bold;"> Atentamente </span>

            <div class="sub-l">____________________________________</div>
            <div class="nombre-l">Nombre y firma</div>
            <div class="sub-r">____________________________________</div>
            <div class="nombre-r">Nombre y firma</div>
        </div>

        <div class="tables">
            <div class="table-r">
                <table>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Licenciatura:</th>
                        <td style="text-align: right; font-weight:light">{{$alumno['lic']}}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Matrícula:</th>
                        <td style="text-align: right; font-weight:light">{{Auth::user()->matricula}}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Domicilio:</th>
                        <td style="text-align: right; font-weight:light">{{$alumno['domicilio']}}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Localidad:</th>
                        <td style="text-align: right; font-weight:light">{{$alumno['local']}}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Teléfono de casa:</th>
                        <td style="text-align: right; font-weight:light">{{$alumno['telefono']}}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Celular:</th>
                        <td style="text-align: right; font-weight:light">{{$alumno['celular']}}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Email:</th>
                        <td style="text-align: right; font-weight:light">{{Auth::user()->email}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <div style="font-size:13px; height:.4cm"> c.c.p. 	Lic. Carlos González Zacarias.- Coordinador de Estudios Terminales</div>
        <div style="font-size:13px; height:.4cm; padding-left:.8cm"> Directores</div>
        <div style="font-size:13px; height:.4cm; padding-left:.8cm"> Profesor de Asignatura</div>
        <div style="font-size:13px; height:.4cm; padding-left:.8cm"> Estudiantes</div>
    </footer>
</body>
</html>