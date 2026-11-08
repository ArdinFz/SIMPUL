@extends('frontend.layout.main')

@section('content')
<!-- 4 Card Statistik (Presisi Prototipe) -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-6">

    <!-- Card 1: Total Siswa -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Total Siswa Kelas</p>
            <h3 class="text-2xl font-bold text-gray-900 mt-1">28 Siswa</h3>
            <p class="text-[11px] font-semibold text-emerald-600 mt-1">✓ 15 Laki-laki / 13 Perempuan</p>
        </div>
        <div class="w-10 h-10 bg-blue-50 text-primary rounded-xl flex items-center justify-center font-bold">
            👥
        </div>
    </div>

    <!-- Card 2: Kehadiran Hari Ini -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Kehadiran Hari Ini</p>
            <h3 class="text-2xl font-bold text-gray-900 mt-1">92.8%</h3>
            <p class="text-[11px] text-gray-400 mt-1">26 Siswa Hadir di Sekolah</p>
        </div>
        <div class="w-10 h-10 bg-emerald-50 text-emerald-500 rounded-xl flex items-center justify-center font-bold">
            🙋‍♂️
        </div>
    </div>

    <!-- Card 3: Izin / Sakit -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Izin / Sakit</p>
            <h3 class="text-2xl font-bold text-gray-900 mt-1">2 Siswa</h3>
            <p class="text-[11px] font-semibold text-amber-500 mt-1">1 Sakit, 1 Izin</p>
        </div>
        <div class="w-10 h-10 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center font-bold">
            ⚠️
        </div>
    </div>

    <!-- Card 4: Input Nilai Rapor -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Input Nilai Rapor</p>
            <h3 class="text-2xl font-bold text-gray-900 mt-1">100%</h3>
            <p class="text-[11px] font-semibold text-emerald-600 mt-1">Terhitung Otomatis</p>
        </div>
        <div class="w-10 h-10 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center font-bold">
            🏅
        </div>
    </div>

</div>

<!-- Row Visualisasi Grafik -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- Chart Tren Kehadiran -->
    <div class="lg:col-span-2 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-base font-bold text-gray-800">Grafik Tren Kehadiran Siswa</h3>
                <p class="text-xs text-gray-400">Persentase kehadiran bulanan (Semester Ganjil 2026)</p>
            </div>
            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-lg text-xs font-semibold">Kelas 4A</span>
        </div>
        <div class="h-64">
            <canvas id="attendanceLineChart"></canvas>
        </div>
    </div>

    <!-- Donut Chart Status Absensi -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between">
        <div>
            <h3 class="text-base font-bold text-gray-800">Status Absensi Hari Ini</h3>
            <p class="text-xs text-gray-400 mb-4">Rekapitulasi status siswa per hari ini</p>
            <div class="h-48 flex justify-center">
                <canvas id="attendanceDonutChart"></canvas>
            </div>
        </div>
        
        <!-- Legend Stat Custom -->
        <div class="grid grid-cols-2 gap-2 text-xs font-medium pt-4 border-t border-gray-100 mt-4">
            <div class="flex items-center space-x-2">
                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                <span class="text-gray-600">Hadir: <b>26</b></span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                <span class="text-gray-600">Sakit: <b>1</b></span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="w-3 h-3 rounded-full bg-blue-400"></span>
                <span class="text-gray-600">Izin: <b>1</b></span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                <span class="text-gray-600">Alpa: <b>0</b></span>
            </div>
        </div>
    </div>

</div>

<!-- Script Render Chart.js -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Line Chart Tren Kehadiran
        const ctxLine = document.getElementById('attendanceLineChart').getContext('2d');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['Juli', 'Agustus', 'September', 'Oktober', 'November'],
                datasets: [{
                    label: 'Persentase Kehadiran (%)',
                    data: [94, 96, 91, 95, 93],
                    borderColor: '#014BAA',
                    backgroundColor: 'rgba(1, 75, 170, 0.05)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 5,
                    pointBackgroundColor: '#014BAA'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { min: 80, max: 100 }
                }
            }
        });

        // Donut Chart Status Absensi
        const ctxDonut = document.getElementById('attendanceDonutChart').getContext('2d');
        new Chart(ctxDonut, {
            type: 'doughnut',
            data: {
                labels: ['Hadir', 'Sakit', 'Izin', 'Alpa'],
                datasets: [{
                    data: [26, 1, 1, 0],
                    backgroundColor: ['#10B981', '#FBBF24', '#60A5FA', '#F43F5E'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                cutout: '75%'
            }
        });
    });
</script>
@endsection