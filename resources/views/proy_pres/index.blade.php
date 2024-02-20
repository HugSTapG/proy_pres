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
        @foreach ($proy_pres_t as $proy_pres)
            <ul>
                <a href="{{ route('proy_pres.show', $proy_pres->id) }}">
                    <p><strong>{{$proy_pres->Ingresos}}</strong></p>
                </a>
                <p>{{$proy_pres->Gastos}}</p>
            </ul>
            <a href="{{ route('proy_pres.edit',  $proy_pres->id)}}"><button type="submit">Editar</button></a>
            <form action="{{ route('proy_pres.destroy', $proy_pres->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
            </form>
        @endforeach
    </body>
</html>