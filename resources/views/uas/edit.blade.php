<form method="post" action="/mahasiswa/update/{{ $mahasiswa->id }}">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Npm</label>
        <input type="number" name="npm" value="{{ $mahasiswa->npm }}" class="form-control">
    </div>
    <!-- Sisipkan input untuk nama dan alamat juga -->

    <button type="submit" class=" btn btn-primary">Simpan Perubahan</button>
</form>
