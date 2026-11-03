<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AgriStock</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-emerald-900 flex items-center justify-center min-h-screen px-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-2xl overflow-hidden p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-slate-800">AgriStock</h1>
            <p class="text-slate-500 text-sm mt-1">Sistem Pengelolaan Komoditas Pertanian</p>
        </div>

        <form action="{{ route('login.process') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-slate-700 mb-1">Username / Nama</label>
                <input type="text" id="username" name="username" required placeholder="Masukkan nama kamu..."
                    class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
            </div>


            <button type="submit" 
                class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 rounded-lg transition duration-200 shadow-md">
                Masuk ke Dashboard
            </button>
        </form>
    </div>
</body>
</html>