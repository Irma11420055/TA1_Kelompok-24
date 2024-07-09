<form action="{{ url('/admin/tentangperpus/peraturanperpustakaan') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="id_jenis">Jenis :</label>
        <select class="form-control" id="id_jenis" name="id_jenis">
          @foreach($data_jenis as $jenis)
            <option value="{{ $jenis->id }}">{{ $jenis->jenis }}</option>
          @endforeach
        </select>
      </div>  
    <div class="form-group">
        <label for="judul" class="col-form-label">Judul :</label>
        <input class="form-control" id="judul" name="judul" placeholder="Judul">
    </div>
    <div class="form-group">
        <label for="fileUpload" class="col-form-label">File :</label>
        <input type="file" class="form-control" id="fileUpload" name="file">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>