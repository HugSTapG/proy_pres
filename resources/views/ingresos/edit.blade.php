<form action="{{ route('ingresos.update', $ingresos->id) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Ingresos</label>
        <input type="text" class="form-control" id="Ingresos" name="Ingresos" value="{{ $ingresos->Ingresos }}" required>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
