<form action="{{ url('/admin/bahanpustaka/buku') }}" method="post">
  @csrf
    <div class="form-group">
      <label for="judul">Judul Buku :</label>
      <select class="form-control" id="judul" name="id_judul">
        @foreach($data_judul_buku as $judul)
          <option value="{{ $judul->id }}">{{ $judul->judul_buku }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="kode_buku">Kode Buku :</label>
      <input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="Kode Buku" required>
    </div>
    <div class="form-group">
      <label for="bahasa">Bahasa :</label>
      <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="Bahasa" required>
    </div>
    <div class="form-group">
      <label for="subjek">Subjek :</label>
      <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subjek" required>
    </div>
    <div class="form-group">
      <label for="edisi">Edisi :</label>
      <input type="text" class="form-control" id="edisi" name="edisi" placeholder="Edisi" required>
    </div>
    <div class="form-group">
      <label for="pengarang">Pengarang :</label>
      <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang" required>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi :</label>
      <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required></textarea>
    </div>
    <div class="form-group">
      <label for="jenis">Jenis :</label>
      <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis" required>
    </div>
    <div class="form-group">
      <label for="penerbit">Penerbit :</label>
      <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit" required>
    </div>
    <div class="form-group">
      <label for="klasifikasi">Klasifikasi :</label>
      <input type="text" class="form-control" id="klasifikasi" name="klasifikasi" placeholder="Klasifikasi" required>
    </div>
    <div class="form-group">
      <label for="lokasi">Lokasi :</label>
      <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi" required>
    </div>
    <div class="form-group">
      <label for="isbn">ISBN :</label>
      <input type="text" class="form-control" id="isbn" name="ISBN" placeholder="ISBN" required>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun :</label>
      <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required>
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <input type="text" class="form-control" id="status" name="status" value="{{ $status_judul_buku }}">
    </div>
    <div class="form-group">
      <label for="cp_or">CP / OR:</label>
      <input type="text" class="form-control" id="cp_or" name="CP/OR" placeholder="CP/OR" required>
    </div>
    <div class="form-group">
      <label for="gambar">Gambar:</label>
      <input type="file" id="gambar" name="gambar" accept="image/*" required>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>