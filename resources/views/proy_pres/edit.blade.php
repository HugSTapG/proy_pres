<form action="{{ route('proy_pres.update', $proy_pres->id) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Ingresos</label>
        <input type="text" class="form-control" id="Ingresos" name="Ingresos" value="{{ $proy_pres->Ingresos }}" required>
    </div>
    <div class="form-group">
        <label for="body">Gastos</label>
        <textarea class="form-control" id="Gastos" name="Gastos" rows="3" required>{{ $proy_pres->Gastos }}</textarea>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
