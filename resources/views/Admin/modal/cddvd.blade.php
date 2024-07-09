<form action="{{ url('/admin/bahanpustaka/cddvd') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="judul" class="col-form-label">Judul :</label>
      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
    </div>
    <div class="form-group">
        <label for="subjek" class="col-form-label">Subjek :</label>
        <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subjek" required>
    </div>
    <div class="form-group">
        <label for="tahun" class="col-form-label">Tahun :</label>
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required>
    </div>
    <div class="form-group">
        <label for="pengarang" class="col-form-label">Pengarang :</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang" required>
    </div>
    <div class="form-group">
        <label for="prodi" class="col-form-label">Program Studi :</label>
        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Program Studi" required>
      </div>

      <div class="form-group">
        <label for="sumber" class="col-form-label">Sumber :</label>
        <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Sumber" required>
      </div>

    <div class="form-group">
        <label for="deskripsi" class="col-form-label">Deskripsi :</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required></textarea>
    </div>
    <div class="form-group">
    <label for="jenis_koleksi" class="col-form-label">Jenis Koleksi :</label>
        <input type="text" class="form-control" id="jenis_koleksi" name="jenis_koleksi" placeholder="Jenis Koleksi" required>
      </div>
    <div class="form-group">
    <label for="gambar" class="col-form-label">Gambar :</label>
    <input type="file" class="form-control-file" id="gambar" name="gambar" placeholder="Gambar" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
