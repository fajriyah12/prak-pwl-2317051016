@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <form action="{{ route('user.store') }}" method="POST" style="width: 350px;">
        @csrf
        <h2 class="text-center" style="color: #5C4033;">Buat Pengguna Baru</h2>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NPM:</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-select" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn text-white" style="background-color:#5C4033; border-color:#EFE4D2;">
                <i class="bi bi-save"></i> Submit
            </button>
        </div>
    </form>
</div>
@endsection
