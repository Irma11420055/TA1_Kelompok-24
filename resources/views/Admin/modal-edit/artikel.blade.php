<form action="{{ route('bahanpustaka.update', $artikel->id) }}" method="post">
    @csrf
    <div class="form-group">
      <label for="judul" class="col-form-label">Judul :</label>
      <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}" placeholder="Judul" required>
    </div>
    <div class="form-group">
        <label for="isi" class="col-form-label">Isi :</label>
        <input type="text" class="form-control" id="isi" name="isi" value="{{ $artikel->isi }}" placeholder="Subjek" required>
    </div>
    <div class="form-group">
        <label for="gambar" class="col-form-label">Gambar :</label>
        <img src="{{ asset($artikel->gambar) }}" alt="Gambar" width="150">
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
