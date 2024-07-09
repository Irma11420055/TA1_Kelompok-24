<form action="{{ route('link.update', $data->id) }}" method="post">
    @csrf
    <div class="form-group">
      <label for="nama" class="col-form-label">Nama :</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" placeholder="Nama" required>
    </div>
    <div class="form-group">
        <label for="link" class="col-form-label">Link :</label>
        <input type="text" class="form-control" id="link" name="link" value="{{ $data->link }}" placeholder="Subjek" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
</form>
