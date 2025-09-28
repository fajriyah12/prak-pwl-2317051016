@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Buat Pengguna Baru</h1>

    <form action="{{ route('user.store') }}" method="POST">
             @csrf

            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control">

            <label for="npm" class="form-label">NPM:</label>
            <input type="text" id="npm" name="npm" class="form-control">
      
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-select">
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select><br><br>
       
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
