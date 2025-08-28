<form action="{{ route('angi.update',$schoolClass) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label for="name">Ангийн нэр</label>
        <input type="text" name="name" id="name" value="{{ old('name', $schoolClass->name) }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Хадгалах</button>
    <a href="{{ route('angi.index') }}" class="btn btn-secondary">Буцах</a>
</form>
