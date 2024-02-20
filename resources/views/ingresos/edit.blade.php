<form action="{{ route('ingresos.update', $ingresos->id) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="Ingresos">Ingresos</label>
        <input type="number" class="form-control" id="Ingresos_v" name="Ingresos_v" value="{{ $ingresos->Ingresos_v }}" required>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
