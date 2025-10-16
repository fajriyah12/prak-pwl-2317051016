<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/user') }}">Data Mahasiswa</a>
        <div>
            <a href="{{ url('/user') }}" class="btn btn-sm">Daftar Mahasiswa</a>
            <a href="{{ url('/user/create') }}" class="btn btn-sm">Input Baru</a>
            <a href="{{ url('/matakuliah') }}" class="btn btn-sm">Daftar Mata Kuliah</a>
             <a href="{{ url('/matakuliah/create') }}" class="btn btn-sm">Tambah Mata Kuliah</a>
        </div>
    </div>
</nav>
