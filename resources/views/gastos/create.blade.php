<html>
    <body>
        <h1>Crear Nuevo Registro</h1>

        <form action="{{ route('gastos.store') }}" method="post"> 
            @csrf
            <div class="form-group">
                <label for="Gastos_v">Gastos</label>
                <input type="text" class="form-control" id="Gastos_v" name="Gastos_v" required>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        
    </body>
</html>
