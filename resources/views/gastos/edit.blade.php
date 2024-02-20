<form action="{{ route('gastos.update', $gastos->id) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="Gastos">Gastos</label>
        <input type="number" class="form-control" id="Gastos_v" name="Gastos_v" value="{{ $gastos->Gastos_v }}" required>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
