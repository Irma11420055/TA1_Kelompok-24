<div style="padding-top: 1%;">
    <div class="container px-4 py-2" style="font-size:14px;background-color: white;margin-top:-15px;"> 
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Nomor Anggota :</strong> {{ $anggota->no_anggota }}</p>
                <p class="card-text"><strong>Role :</strong> {{ $anggota->batas_buku->nama }}</p>
                <p class="card-text"><strong>Nama :</strong> {{ $anggota->nama }}</p>
                <p class="card-text"><strong>Email :</strong> {{ $anggota->email }}</p>
                <p class="card-text"><strong>Alamat :</strong> {{ $anggota->alamat }}</p>
                <p class="card-text"><strong>Nomor HP :</strong> {{ $anggota->no_hp }}</p>
                <p class="card-text"><strong>Jabatan :</strong> {{ $anggota->jabatan }}</p>
                <p class="card-text"><strong>Peran :</strong> {{ $anggota->peran }}</p>
                <p class="card-text"><strong>Jurusan :</strong> {{ $anggota->jurusan }}</p>
                <p class="card-text"><strong>Status :</strong> {{ $anggota->status }}</p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>            
            </div>
        </div>
    </div>
</div>