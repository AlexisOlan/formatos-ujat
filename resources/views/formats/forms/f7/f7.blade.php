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
        F7: Solicitud de Jurado
        <div class="header">
            {{$year}}
        </div>
    </header>
    <main>
        <div class="fecha">
            Cunduacán, Tabasco., a {{$day}} de {{$month}} del {{$year}}.
        </div>
        <div class="asunto" style="left:14.5cm!important;">
            Asunto: Solicitud de Jurado
        </div>
        <div class="destinatario">
            <span class="nombre" style="font-weight:bold;">Lic. Oscar González González </span><br>
            Director de la DACyTI <br>
            Presente
        </div>
        <div class="contenido">
            Por este medio nos permitimos informarle que el trabajo recepcional: 

            “{{$alumno['trabajo']}}”, bajo la modalidad de

            {{$alumno['modalidad']}}, ha sido liberado por nuestros directores: {{$alumno['maestro1']}} y <br><br>

            {{$alumno['maestro2']}}, por lo que en atención a ello nos dirigimos a usted con la <br><br>

            finalidad de solicitarle tenga a bien nombrar al jurado para que  evalúe el citado trabajo. <br><br><br>

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
            {{-- <div class="table-l">
                <table>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Licenciatura:</th>
                        <td style="text-align: right; font-weight:light"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Matrícula:</th>
                        <td style="text-align: right; font-weight:light"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Domicilio:</th>
                        <td style="text-align: right; font-weight:light"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Localidad:</th>
                        <td style="text-align: right; font-weight:light"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Teléfono de casa:</th>
                        <td style="text-align: right; font-weight:light"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Celular:</th>
                        <td style="text-align: right; font-weight:light"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding-right:1cm;">Email:</th>
                        <td style="text-align: right; font-weight:light"></td>
                    </tr>
                </table>
            </div> --}}
        </div>
    </main>
    <footer>
        <div style="font-size:13px; height:.4cm"> c.c.p. 	Lic. Carlos González Zacarias.- Coordinador de Estudios Terminales</div>
        <div style="font-size:13px; height:.4cm; padding-left:.8cm"> Estudiantes</div>
    </footer>
</body>
</html>