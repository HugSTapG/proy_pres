<html>
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
        <ul>
            @foreach ($ingresos_t as $ingreso)
                <li>{{ $ingreso->Ingresos_v }}</li>
            @endforeach
        </ul>
        
        <h2>Gastos:</h2>
        <ul>
            @foreach ($gastos_t as $gasto)
                <li>{{ $gasto->Gastos_v }}</li>
            @endforeach
        </ul>
    </body>
</html>
