<div style="padding-top: 1%;">
    <div class="container px-4 py-2" style="font-size:14px;background-color: white;margin-top:-15px;"> 
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Judul :</strong> {{ $pengumuman->judul }}</p>
                <p class="card-text"><strong>Isi :</strong> {{ $pengumuman->isi }}</p>
                <p class="card-text"><strong>Gambar :</strong> {{ $pengumuman->gambar }}</p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>            
            </div>
        </div>
    </div>
</div>