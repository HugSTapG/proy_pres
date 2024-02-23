




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
    <form action="{{ route('gastos.update', $gastos->id) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="body">Gastos</label>
        <textarea class="form-control" id="Gastos" name="Gastos" rows="3" required>{{ $gastos->Gastos }}</textarea>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update Gasto</button>
</form>
</body>
</html>