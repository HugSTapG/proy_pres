<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body class="principal">

        <div class="secundario">

            <h1>Practica</h1>
            <div class="button-container">
                <div class="button-wrapper">
                    <a href="{{ route('ingresos.create') }}">Crear Ingresos</a>
                </div>
                <div class="button-wrapper">
                    <a href="{{ route('gastos.create') }}">Crear Gastos</a>
                </div>
            </div>
            
            <div class="data-container">
                <div class="data-wrapper">
                    <h2>Ingresos:</h2>
                    <ul class="list-wrapper">
                        @foreach ($ingresos_t as $ingresos)
                            <ul class="list-wrapper_c">
                                {{ $ingresos->Ingresos_v }}
                                <a href="{{ route('ingresos.edit', $ingresos->id) }}"><button type="submit">E</button></a>
                                <form action="{{ route('ingresos.destroy', $ingresos->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">D</button>
                                </form>
                            </ul>
                    @endforeach
                </div>
                <div class="data-wrapper">
                    <h2>Gastos:</h2>
                    <ul class="list-wrapper">
                        @foreach ($gastos_t as $gastos)
                            <ul class="list-wrapper_c">
                                {{ $gastos->Gastos_v }}
                                <a href="{{ route('gastos.edit', $gastos->id) }}"><button type="submit">E</button></a>
                                <form action="{{ route('gastos.destroy', $gastos->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">D</button>
                                </form>
                            </ul>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
