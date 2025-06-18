<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen my-0 py-0">

    <div class="w-64 h-full-screen bg-[#0F4696] text-white p-5 flex flex-col space-y-3">
        <h3 class="text-2xl font-bold mb-6 text-white">Dcode Hub Student Management</h3>
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-white/20">Dashboard</a>
        {{-- <a href="{{ route('students.show') }}" class="block px-4 py-2 rounded hover:bg-white/20">Add Students</a> --}}
    </div>

    <div class="flex-1 p-5">
        @yield('content')
    </div>
</body>
</html>
