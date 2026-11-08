<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - SIMPUL SDN 2 Kadipiro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#014BAA',
                        'primary-dark': '#00367A',
                        cream: '#F8F3F0',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-cream min-h-screen flex">

    <!-- Sidebar Admin (Background Putih & Aksen Blue) -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col justify-between p-5 min-h-screen shrink-0">
        <div>
            <!-- Logo Brand -->
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-10 h-10 bg-primary text-white font-bold rounded-xl flex items-center justify-center text-lg shadow-md shadow-primary/20">
                    S
                </div>
                <div>
                    <h2 class="font-bold text-gray-900 text-base leading-tight">SIMPUL</h2>
                    <p class="text-xs text-gray-400">SDN 2 Kadipiro System</p>
                </div>
            </div>

            <!-- Mode Banner Admin -->
            <div class="bg-purple-50 border border-purple-100 rounded-xl p-3 mb-6 flex items-center space-x-2">
                <span class="text-xs">🛡️</span>
                <div class="text-xs">
                    <p class="text-gray-400 text-[10px] uppercase font-semibold">Mode Sekarang:</p>
                    <p class="font-bold text-purple-700">Administrator / TU</p>
                </div>
            </div>

            <!-- Menu Navigation Admin -->
            <div class="space-y-1">
                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider px-3 mb-2">Menu Utama Admin</p>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-primary text-white font-semibold text-sm shadow-md shadow-primary/20 transition">
                    <span>📊</span>
                    <span>Dashboard Admin</span>
                </a>
                <a href="{{ route('users.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 hover:text-primary font-medium text-sm transition">
                    <span>👤</span>
                    <span>Kelola Akun Guru</span>
                </a>
                <a href="{{ route('students.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 hover:text-primary font-medium text-sm transition">
                    <span>👨‍🎓</span>
                    <span>Master Data Siswa</span>
                </a>
                <a href="{{ route('classrooms.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-gray-50 hover:text-primary font-medium text-sm transition">
                    <span>🏫</span>
                    <span>Master Data Kelas</span>
                </a>
            </div>
        </div>

        <!-- User Profile Card Bottom -->
        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
            <div class="flex items-center space-x-3 overflow-hidden">
                <div class="w-9 h-9 rounded-full bg-primary/10 text-primary font-bold flex items-center justify-center text-sm shrink-0">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="truncate">
                    <p class="text-xs font-bold text-gray-800 truncate">{{ Auth::user()->name }}</p>
                    <p class="text-[10px] text-gray-400">Admin Utama TU</p>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="shrink-0">
                @csrf
                <button type="submit" title="Logout" class="text-gray-400 hover:text-red-500 p-1 transition">
                    🚪
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 p-8 overflow-y-auto">
        <!-- Top Navigation Status Bar -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Dashboard Panel Administrator</h1>
                <p class="text-sm text-gray-400 mt-0.5">Kelola akun pengajar, data kelas, dan master data siswa SDN 2 Kadipiro.</p>
            </div>
            <div class="bg-white border border-gray-200 px-4 py-2 rounded-xl text-xs font-semibold text-gray-600 shadow-sm flex items-center space-x-2">
                <span>📅</span>
                <span>{{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</span>
            </div>
        </div>

        @yield('content')
    </main>

</body>
</html>