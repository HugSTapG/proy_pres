<form action="{{ route('gastos.update', $gastos->id) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="body">Gastos</label>
        <textarea class="form-control" id="Gastos" name="Gastos" rows="3" required>{{ $gastos->Gastos }}</textarea>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
