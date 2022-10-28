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
        @foreach($escuelas as $escuela)
            <tr>
                @foreach($escuela["localidad"]["rutas"] as $ruta)
                    <td>
                        {{$ruta["nombre"]}}
                    </td>
                @endforeach

                <td>
                    {{$escuela["localidad"]["id_interno"]}}
                </td>
                <td>
                    PÉNJAMO
                </td>
                <td>
                    {{$escuela["localidad"]["nombre"]}}
                </td>
                <td>
                    {{$escuela["plantel"]}}
                </td>
                <td>
                    {{$escuela["cct"]}}
                </td> 
            </tr>
        @endforeach

    </table>
</body>
</html>