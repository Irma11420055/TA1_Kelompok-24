<div style="padding-top: 1%;">
    <div class="container px-4 py-2" style="font-size:14px;background-color: white;margin-top:-15px;"> 
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>ID :</strong> {{ $cddvd->id }}</p>
                <p class="card-text"><strong>Subjek :</strong> {{ $cddvd->subjek }}</p>
                <p class="card-text"><strong>Judul :</strong> {{ $cddvd->judul }}</p>
                <p class="card-text"><strong>Tahun :</strong> {{ $cddvd->tahun }}</p>
                <p class="card-text"><strong>Pengarang :</strong> {{ $cddvd->pengarang }}</p>
                <p class="card-text"><strong>Program Studi :</strong> {{ $cddvd->prodi }}</p>
                <p class="card-text"><strong>Sumber :</strong> {{ $cddvd->sumber }}</p>
                <p class="card-text"><strong>Deskripsi :</strong> {{ $cddvd->deskripsi }}</p>
                <p class="card-text"><strong>Jenis Koleksi :</strong> {{ $cddvd->jenis_koleksi }}</p>
                <p class="card-text"><strong>Gambar :</strong> {{ $cddvd->gambar }}</p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>            
            </div>
        </div>
    </div>
</div>