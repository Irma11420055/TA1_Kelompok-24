<form action="{{ route('bahanpustaka.update', $buku->id) }}" method="post">
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
        <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="{{ $buku->kode_buku }}" placeholder="Kode Buku" required>
    </div>
      <div class="form-group">
        <label for="bahasa">Bahasa :</label>
        <input type="text" class="form-control" id="bahasa" name="bahasa" value="{{ $buku->bahasa }}" placeholder="Bahasa" required>
      </div>
      <div class="form-group">
        <label for="subjek">Subjek :</label>
        <input type="text" class="form-control" id="subjek" name="subjek" value="{{ $buku->subjek }}" placeholder="Subjek" required>
      </div>
      <div class="form-group">
        <label for="edisi">Edisi :</label>
        <input type="text" class="form-control" id="edisi" name="edisi" value="{{ $buku->edisi }}" placeholder="Edisi" required>
      </div>
      <div class="form-group">
        <label for="pengarang">Pengarang :</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}" placeholder="Pengarang" required>
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi :</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required>{{ $buku->deskripsi }}</textarea>
      </div>
      <div class="form-group">
        <label for="jenis">Jenis :</label>
        <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $buku->jenis }}" placeholder="Jenis" required>
      </div>
      <div class="form-group">
        <label for="penerbit">Penerbit :</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" placeholder="Penerbit" required>
      </div>
      <div class="form-group">
        <label for="klasifikasi">Klasifikasi :</label>
        <input type="text" class="form-control" id="klasifikasi" name="klasifikasi" value={{ $buku->klasifikasi }} placeholder="Klasifikasi" required>
      </div>
      <div class="form-group">
        <label for="lokasi">Lokasi :</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $buku->lokasi }}" placeholder="Lokasi" required>
      </div>
      <div class="form-group">
        <label for="isbn">ISBN :</label>
        <input type="text" class="form-control" id="isbn" name="ISBN" value="{{ $buku->ISBN }}" placeholder="ISBN" required>
      </div>
      <div class="form-group">
        <label for="tahun">Tahun :</label>
        <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $buku->tahun }}" placeholder="Tahun" required>
      </div>
      <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $status_judul_buku }}">
      </div>
      <div class="form-group">
        <label for="cp_or">CP / OR:</label>
        <input type="text" class="form-control" id="cp_or" name="cp_or" value="{{ $buku->cp_or }}" placeholder="CP/OR" required>
      </div>
      <div class="form-group">
        <label for="gambar">Gambar:</label>
        <img src="{{ asset($buku->gambar) }}" alt="Gambar" width="150">
        <input type="file" id="gambar" name="gambar" accept="image/*" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
</div>
</div>
</div>
</div>
</div>