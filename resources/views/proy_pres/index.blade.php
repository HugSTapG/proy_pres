
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Practica</title>
</head>
<body>
        <h1>Practica</h1>
        <div class="button-container">
            <div class="button-wrapper">
                <a href="{{ route('ingresos.create') }}">Crear Ingresos</a>
            </div>
            <div class="button-wrapper">
                <a href="{{ route('gastos.create') }}">Crear Gastos</a>
            </div>
        </div>
        
        <h2>Ingresos:</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Ingreso</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($ingresos_t as $ingresos)
                <tr>
                    <td>{{ $ingresos->id }}</td>
                    <td>{{ $ingresos->Ingresos_v }}</td>
                    <td>
                        <a href="{{route('ingresos.update', ['ingresos' => $ingresos->id])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('ingresos.destroy', ['ingresos' => $ingresos->id])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <br/> 
        <h2>Gastos:</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Gasto</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($gastos_t as $gastos)
                <tr>
                    <td>{{ $gastos->id }}</td>
                    <td>{{ $gastos->Gastos_v }}</td>
                    <td>
                        <a href="">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('gastos.destroy', ['gastos' => $gastos->id])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>


































