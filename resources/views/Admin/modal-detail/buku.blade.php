<div style="padding-top: 1%;">
    <div class="container px-4 py-2" style="font-size:14px;background-color: white;margin-top:-15px;"> 
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Judul :</strong> {{ $buku->judul_buku->judul_buku }}</p>
                <p class="card-text"><strong>Kode Buku :</strong> {{ $buku->kode_buku }}</p>
                <p class="card-text"><strong>Bahasa :</strong> {{ $buku->bahasa }}</p>
                <p class="card-text"><strong>Subjek :</strong> {{ $buku->subjek }}</p>
                <p class="card-text"><strong>Edisi :</strong> {{ $buku->edisi }}</p>
                <p class="card-text"><strong>Pengarang :</strong> {{ $buku->pengarang }}</p>
                <p class="card-text"><strong>Penerbit :</strong> {{ $buku->penerbit }}</p>
                <p class="card-text"><strong>Deskripsi :</strong> {{ $buku->deskripsi }}</p>
                <p class="card-text"><strong>Jenis :</strong> {{ $buku->jenis }}</p>
                <p class="card-text"><strong>Klasifikasi :</strong> {{ $buku->klasifikasi }}</p>
                <p class="card-text"><strong>Lokasi :</strong> {{ $buku->lokasi }}</p>
                <p class="card-text"><strong>ISBN :</strong> {{ $buku->isbn }}</p>
                <p class="card-text"><strong>Tahun :</strong> {{ $buku->tahun }}</p>
                <p class="card-text"><strong>Status :</strong> {{ $buku->status }}</p>
                <p class="card-text"><strong>CP/OR :</strong> {{ $buku->cp_or }}</p>
                <p class="card-text"><strong>Gambar :</strong></p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>            
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>