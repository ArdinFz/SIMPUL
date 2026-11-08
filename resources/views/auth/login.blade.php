<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIMPUL SDN 2 Kadipiro</title>
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#014BAA',
                        cream: '#F8F3F0',
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-cream min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl border border-blue-50 overflow-hidden p-8">
        <!-- Header Branding -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">SIMPUL</h1>
            <p class="text-xs font-semibold tracking-wider text-primary uppercase mt-1">SDN 2 Kadipiro</p>
            <p class="text-sm text-gray-500 mt-2">Sistem Informasi Manajemen Pusat Unit Layanan Sekolah</p>
        </div>

        <!-- Alert Error -->
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST" class="space-y-5">
         @csrf
            <div>
                <label for="email" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">Email Sekolah</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required 
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition duration-200 text-sm"
                    placeholder="nama@sdn2kadipiro.sch.id">
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">Kata Sandi</label>
                <input type="password" name="password" id="password" required 
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition duration-200 text-sm"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full bg-primary hover:bg-blue-800 text-white font-semibold py-3 px-4 rounded-xl shadow-lg shadow-primary/20 hover:shadow-primary/40 transition duration-200 text-sm">
                Masuk ke Sistem
            </button>
        </form>

        <!-- Footer Info -->
        <div class="mt-8 text-center text-xs text-gray-400">
            <p>© 2026 SDN 2 Kadipiro. Digital Kreatif UBSI.</p>
        </div>
    </div>

</body>
</html>