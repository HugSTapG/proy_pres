<html>
    <body>
        <h1>Crear Nuevo Registro</h1>

        <form action="{{ route('proy_pres.store') }}" method="post"> 
            @csrf
            <div class="form-group">
                <label for="Ingresos">Ingresos</label>
                <input type="text" class="form-control" id="Ingresos" name="Ingresos" required>
            </div>
            <div class="form-group">
                <label for="Gastos">Gastos</label>
                <textarea class="form-control" id="Gastos" name="Gastos" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        
    </body>
</html>
