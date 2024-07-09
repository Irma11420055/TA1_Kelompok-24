<form action="{{ url('/admin/pengumuman') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="judul" class="col-form-label">Judul :</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
    </div>
    <div class="form-group">
        <label for="isi" class="col-form-label">Isi :</label>
        <textarea class="form-control" id="isi" name="isi" placeholder="Isi"></textarea>
    </div>
    <div class="form-group">
        <label for="gambar" class="col-form-label">Gambar :</label>
        <input type="file" class="form-control-file" id="gambar" name="gambar">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>      