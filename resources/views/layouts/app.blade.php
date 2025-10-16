<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'BioMahasiswa' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Layout dasar */
        /* Layout dasar */
body {
    background: url("{{ asset('images/back 1.jpg') }}") no-repeat center center fixed;
    background-size: cover; /* biar gambar menyesuaikan layar */
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Navbar dengan gambar back1 */
.navbar { 
    background-color: #EFE4D2 !important; 
}
.navbar-brand {
    font-weight: bold;
    color: #5C4033 !important;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
}
.navbar .btn {
    background-color: rgba(224, 197, 147, 0.8);
    border: none;
}

/* Footer */
.footer {
    background-color: #EFE4D2;
    color: #5C4033;
    margin-top: auto;
}

    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="container mt-4">
        @yield('content')
    </main>
    
    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
