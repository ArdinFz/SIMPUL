@extends('backend.layout.main')

@section('content')
<!-- 4 Card Statistik Admin (Presisi Prototipe) -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-6">

    <!-- Card 1: Total Pengguna/Guru -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Total Akun Guru</p>
            <h3 class="text-2xl font-bold text-gray-900 mt-1">6 Guru</h3>
            <p class="text-[11px] font-semibold text-emerald-600 mt-1">✓ Aktif Mengajar</p>
        </div>
        <div class="w-10 h-10 bg-blue-50 text-primary rounded-xl flex items-center justify-center font-bold">
            👤
        </div>
    </div>

    <!-- Card 2: Master Siswa -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Total Master Siswa</p>
            <h3 class="text-2xl font-bold text-gray-900 mt-1">168 Siswa</h3>
            <p class="text-[11px] text-gray-400 mt-1">Terdaftar di Sistem</p>
        </div>
        <div class="w-10 h-10 bg-emerald-50 text-emerald-500 rounded-xl flex items-center justify-center font-bold">
            👨‍🎓
        </div>
    </div>

    <!-- Card 3: Rombongan Belajar / Kelas -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Rombongan Belajar</p>
            <h3 class="text-2xl font-bold text-gray-900 mt-1">6 Kelas</h3>
            <p class="text-[11px] font-semibold text-primary mt-1">Kelas 1 s/d Kelas 6</p>
        </div>
        <div class="w-10 h-10 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center font-bold">
            🏫
        </div>
    </div>

    <!-- Card 4: Status Sistem -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Status Database</p>
            <h3 class="text-2xl font-bold text-emerald-600 mt-1">Normal</h3>
            <p class="text-[11px] font-semibold text-gray-400 mt-1">Terhubung MySQL</p>
        </div>
        <div class="w-10 h-10 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center font-bold">
            ⚡
        </div>
    </div>

</div>

<!-- Table Container & Quick Action -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h3 class="text-base font-bold text-gray-800">Daftar Akun Pengajar (Guru)</h3>
            <p class="text-xs text-gray-400">Guru yang memiliki hak akses login ke portal akademik SIMPUL</p>
        </div>
        <a href="{{ route('users.create') }}" class="bg-primary text-white text-xs font-semibold px-4 py-2.5 rounded-xl hover:bg-blue-800 transition shadow-md shadow-primary/20">
            Tambah Akun Guru Baru +
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-600">
            <thead class="bg-gray-50 text-xs uppercase font-semibold text-gray-500">
                <tr>
                    <th class="px-4 py-3 rounded-l-xl">Nama Pengajar</th>
                    <th class="px-4 py-3">Email Access</th>
                    <th class="px-4 py-3">Hak Akses (Role)</th>
                    <th class="px-4 py-3 rounded-r-xl">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr>
                    <td class="px-4 py-3 font-semibold text-gray-800">Budi Santoso, S.Pd.</td>
                    <td class="px-4 py-3">guru@sdn2kadipiro.sch.id</td>
                    <td class="px-4 py-3"><span class="bg-blue-100 text-primary text-xs font-bold px-3 py-1 rounded-full">Guru Class</span></td>
                    <td class="px-4 py-3">
                        <button class="text-xs text-gray-500 hover:text-primary font-semibold mr-2">Edit</button>
                        <button class="text-xs text-red-500 hover:text-red-700 font-semibold">Reset Password</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection