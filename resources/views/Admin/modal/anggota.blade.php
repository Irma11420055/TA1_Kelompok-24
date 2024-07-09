 <form action="{{ url('/admin/anggota') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
  </div>
  <div class="form-group">
    <label for="role">Role :</label>
    <select class="form-control" id="id_role" name="id_role">
      @foreach($batas_buku as $batas)
        <option value="{{ $batas->nama }}">{{ $batas->nama }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="no_anggota" class="form-label">No Anggota</label>
    <input type="text" class="form-control" id="no_anggota" name="no_anggota" placeholder="No Anggota" required>
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select name="jurusan" id="jurusan" class="form-control">
        <option value="S1 Program Studi Informatika">S1 Program Studi Informatika</option>
        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
        <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
        <option value="D4 Teknologi Rekayasa Perangkat Lunak">D4 Teknologi Rekayasa Perangkat Lunak</option>
        <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
        <option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
        <option value="S1 Teknik Bioproses">S1 Teknik Bioproses</option>
        <option value="S1 Manajemen Rekayasa">S1 Manajemen Rekayasa</option>
        <option value="S1 Teknik Metalurgi">S1 Teknik Metalurgi</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
  </div>
  <div class="form-group">
    <label for="no_hp" class="form-label">Nomor HP</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP">
  </div>
  <div class="form-group">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
  </div>
  <div class="form-group">
    <label for="peran" class="form-label">Peran</label>
    <input type="text" class="form-control" id="peran" name="peran" placeholder="Peran">
  </div>
  <div class="form-group">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
      <option value="aktif">aktif</option>
      <option value="tidak aktif">tidak Aktif</option>
    </select>
  </div>
  <div class="form-group">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>    
</form>