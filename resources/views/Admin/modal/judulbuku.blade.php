<!-- Modal Tambah Judul -->
<div class="modal fade" id="tambahJudulModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Judul Buku Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formTambahJudulBaru">
            <div class="form-group">
              <label for="judul_baru">Judul Buku Baru :</label>
              <input type="text" class="form-control" id="judul_baru" name="judul_baru" placeholder="Judul Buku Baru">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" id="simpanJudulBtn">Simpan</button>
        </div>
      </div>
    </div>
  </div>