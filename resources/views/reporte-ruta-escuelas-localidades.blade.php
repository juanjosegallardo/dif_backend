<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teporte de rutas de las escuelas en las localidades</title>

    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }


        td
        {
            vertical-align:  top;

        }


        table
        {
            border-stye: solid;
            

        }
        table.borde, table.borde tr th,  table.borde tr td  {
            border: 1px solid black;   
            border-collapse: collapse;
        }   
    </style>
</head>
<body>  

    <table>
        <tr>
            <th>RUTAS</th>
            <th>ID</th>
            <th>MUNICIPIO</th>
            <th>LOCALIDAD</th>
            <th>ESCUELA</th>
            <th>CLAVE</th>
            <th>BENEFICIARIOS</th>
        </tr>
        @foreach($rutas as $ruta)
            <tr>
                <td>
                    {{$ruta["nombre"]}}
                </td>
                @foreach($ruta["localidades"] as $localidad)
                    <td>
                        {{$localidad["id_interno"]}}
                    </td>
                    <td>
                        PÉNJAMO
                    </td>
                    <td>
                        {{$localidad["nombre"]}}
                    </td>
                @endforeach
            </tr>
        @endforeach

    </table>
</body>
</html>