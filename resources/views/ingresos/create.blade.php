
    
        
        
   



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
    <h1>Crear Nuevo Registro de Ingreso</h1>

        <form action="{{ route('ingresos.store') }}" method="post"> 
            @csrf
            <div class="form-group">
                <label for="Ingresos_v">Ingresos</label>
                <input type="text" class="form-control" id="Ingresos_v" name="Ingresos_v" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
</body>
</html>
