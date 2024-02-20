<html>
    <body>
        <h1>Crear Nuevo Registro</h1>

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
