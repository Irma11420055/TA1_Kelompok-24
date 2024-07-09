<div style="padding-top: 1%;">
    <div class="container px-4 py-2" style="font-size:14px;background-color: white;margin-top:-15px;"> 
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Judul :</strong> {{ $artikel->judul }}</p>
                <p class="card-text"><strong>Isi :</strong> {{ $artikel->isi }}</p>
                <p class="card-text"><strong>Gambar :</strong> {{ $artikel->gambar }}</p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>            
            </div>
        </div>
    </div>
</div>