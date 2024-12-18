<form action="{{ route('kelolaKasir.update', $kelolaKasir->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" />
        <img src="{{ asset('storage/'.$kelolaKasir->image) }}" alt="Kasir Image" width="100" />
    </div>

    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $kelolaKasir->nama) }}" id="nama" required />
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email', $kelolaKasir->email) }}" id="email" required />
    </div>

    <div>
        <label for="no_handphone">No Handphone</label>
        <input type="text" name="no_handphone" value="{{ old('no_handphone', $kelolaKasir->no_handphone) }}" id="no_handphone" required />
    </div>

    <div>
        <button type="submit">Update</button>
    </div>
</form>
