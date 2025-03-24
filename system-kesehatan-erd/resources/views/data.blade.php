<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sistem Kesehatan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Base styles for single-view layout */
        :root {
            --card-bg: #ffffff;
            --card-border: #E5E7EB;
            --text-primary: #1D1D1F;
            --text-secondary: #86868B;
            --accent-blue: #0071E3;
            --accent-purple: #5856D6;
            --accent-green: #34C759;
            --accent-orange: #FF9500;
            --accent-red: #FF2D55;
        }
        
        body {
            background-color: #F5F5F7;
            font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Text', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100vh;
            color: var(--text-primary);
        }
        
        .dashboard-container {
            height: 100vh;
            padding: 16px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }
        
        .dashboard-header {
            display: flex;
            justify-content: center;
            gap: 16px;
            align-items: center;
            margin-bottom: 16px;
        }
        
        .dashboard-title {
            font-size: 20px;
            font-weight: 600;
            margin: 0;
        }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(10, minmax(0, 1fr));
            gap: 12px;
            flex: 1;
            overflow: hidden;
        }
        
        .card {
            background-color: var(--card-bg);
            border-radius: 12px;
            border: 1px solid var(--card-border);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .card-header {
            display: flex;
            align-items: center;
            padding: 10px 12px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .card-title {
            font-size: 14px;
            font-weight: 600;
            margin: 0;
            margin-left: 6px;
        }
        
        .card-body {
            padding: 10px 12px;
            flex: 1;
            overflow: auto;
        }
        
        .card-body::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }
        
        .card-body::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }
        
        .card-icon {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }
        
        .stat-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }
        
        .stat-label {
            font-size: 12px;
            color: var(--text-secondary);
        }
        
        .stat-value {
            font-size: 16px;
            font-weight: 600;
        }
        
        .stat-small {
            font-size: 14px;
            font-weight: 600;
        }
        
        .grid-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .grid-table th {
            text-align: left;
            font-size: 11px;
            font-weight: 500;
            color: var(--text-secondary);
            padding: 6px 8px;
        }
        
        .grid-table td {
            font-size: 12px;
            padding: 6px 8px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .grid-table tr:hover td {
            background-color: rgba(0, 0, 0, 0.02);
        }
        
        .badge {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 500;
        }
        
        .badge-blue {
            background-color: rgba(0, 113, 227, 0.1);
            color: var(--accent-blue);
        }
        
        .badge-green {
            background-color: rgba(52, 199, 89, 0.1);
            color: var(--accent-green);
        }
        
        .badge-purple {
            background-color: rgba(88, 86, 214, 0.1);
            color: var(--accent-purple);
        }
        
        .badge-orange {
            background-color: rgba(255, 149, 0, 0.1);
            color: var(--accent-orange);
        }
        
        .badge-red {
            background-color: rgba(255, 45, 85, 0.1);
            color: var(--accent-red);
        }
        
        .med-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 8px;
        }
        
        .med-item {
            background-color: rgba(0, 0, 0, 0.02);
            border-radius: 8px;
            padding: 8px;
            text-align: center;
            font-size: 11px;
        }
        
        .med-name {
            font-weight: 500;
            margin-bottom: 2px;
        }
        
        .med-price {
            color: var(--text-secondary);
            font-size: 10px;
        }
        
        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .text-right {
            text-align: right;
        }
        
        .text-center {
            text-align: center;
        }
        
        .text-blue {
            color: var(--accent-blue);
        }
        
        .text-green {
            color: var(--accent-green);
        }
        
        .text-purple {
            color: var(--accent-purple);
        }
        
        .text-orange {
            color: var(--accent-orange);
        }
        
        .text-red {
            color: var(--accent-red);
        }
        
        .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .mt-auto {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Data Sistem Kesehatan</h1>
            <div>
                <span class="badge badge-blue">Versi 1.0</span>
            </div>
        </div>
        
        <div class="dashboard-grid">
            <!-- Summary Card - Top left -->
            <div class="card" style="grid-column: span 3; grid-row: span 3;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#0071E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                    </svg>
                    <h2 class="card-title">Ringkasan</h2>
                </div>
                <div class="card-body">
                    <div class="stat-row">
                        <span class="stat-label">Dokter</span>
                        <span class="stat-value text-blue">{{ $users->where('role', 'dokter')->count() }}</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Pasien</span>
                        <span class="stat-value text-green">{{ $users->where('role', 'pasien')->count() }}</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Jenis Obat</span>
                        <span class="stat-value text-purple">{{ $obats->count() }}</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Total Pemeriksaan</span>
                        <span class="stat-value text-orange">{{ $periksas->count() }}</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Total Resep</span>
                        <span class="stat-value text-red">{{ $detailPeriksas->count() }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Transactions Card - Top center -->
            <div class="card" style="grid-column: span 5; grid-row: span 3;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#0071E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                    <h2 class="card-title">Transaksi Periksa</h2>
                </div>
                <div class="card-body">
                    <div class="stat-row">
                        <div>
                            <span class="stat-label">Total Pemeriksaan</span>
                            <div class="stat-value text-blue">{{ $periksas->count() }}</div>
                        </div>
                        <div class="text-right">
                            <span class="stat-label">Total Pendapatan</span>
                            <div class="stat-value text-green">Rp{{ number_format($periksas->sum('biaya_periksa'), 0, ',', '.') }}</div>
                        </div>
                    </div>
                    <table class="grid-table mt-auto">
                        <thead>
                            <tr>
                                <th>Pasien</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th class="text-right">Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($periksas->take(3) as $periksa)
                                @php
                                    $pasien = $users->firstWhere('id', $periksa->id_pasien);
                                    $dokter = $users->firstWhere('id', $periksa->id_dokter);
                                    $tgl = new DateTime($periksa->tgl_periksa);
                                @endphp
                                <tr>
                                    <td>{{ $pasien->nama }}</td>
                                    <td>{{ $dokter->nama }}</td>
                                    <td>{{ $tgl->format('d/m/y H:i') }}</td>
                                    <td class="text-right">Rp{{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Doctors Card - Top right -->
            <div class="card" style="grid-column: span 4; grid-row: span 3;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#34C759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9"></path>
                        <path d="M13 11v4"></path>
                        <path d="M16 13H10"></path>
                    </svg>
                    <h2 class="card-title">Dokter</h2>
                </div>
                <div class="card-body">
                    <table class="grid-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th class="text-center">Pemeriksaan</th>
                                <th class="text-right">Pendapatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $dokters = $users->where('role', 'dokter');
                            @endphp
                            @foreach($dokters as $dokter)
                                @php
                                    $dokterPeriksas = $periksas->where('id_dokter', $dokter->id);
                                    $totalPendapatan = $dokterPeriksas->sum('biaya_periksa');
                                @endphp
                                <tr>
                                    <td>{{ $dokter->nama }}</td>
                                    <td class="text-center">{{ $dokterPeriksas->count() }}</td>
                                    <td class="text-right">Rp{{ number_format($totalPendapatan, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Users Table - Middle left -->
            <div class="card" style="grid-column: span 6; grid-row: span 4;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#0071E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <h2 class="card-title">Data Pengguna</h2>
                </div>
                <div class="card-body">
                    <table class="grid-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th class="text-center">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users->take(8) as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td class="truncate" style="max-width: 120px;">{{ $user->email }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td class="text-center">
                                        <span class="badge {{ $user->role == 'dokter' ? 'badge-green' : 'badge-blue' }}">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Medications Table - Middle right -->
            <div class="card" style="grid-column: span 6; grid-row: span 4;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#5856D6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path>
                        <path d="m8.5 8.5 7 7"></path>
                    </svg>
                    <h2 class="card-title">Data Obat</h2>
                </div>
                <div class="card-body">
                    <div class="stat-row">
                        <div>
                            <span class="stat-label">Total Jenis Obat</span>
                            <div class="stat-small text-purple">{{ $obats->count() }}</div>
                        </div>
                        <div class="text-right">
                            <span class="stat-label">Rata-rata Harga</span>
                            <div class="stat-small text-purple">Rp{{ number_format($obats->avg('harga'), 0, ',', '.') }}</div>
                        </div>
                    </div>
                    
                    @php
                        $obatCounts = [];
                        foreach($detailPeriksas as $detail) {
                            if(!isset($obatCounts[$detail->id_obat])) {
                                $obatCounts[$detail->id_obat] = 0;
                            }
                            $obatCounts[$detail->id_obat]++;
                        }
                        
                        $mostUsedObatId = array_key_exists(1, $obatCounts) ? max(array_keys($obatCounts, max($obatCounts))) : null;
                        $mostUsedObat = $mostUsedObatId ? $obats->firstWhere('id', $mostUsedObatId) : null;
                    @endphp
                    
                    <div class="stat-row">
                        <div>
                            <span class="stat-label">Obat Terlaris</span>
                            <div class="stat-small text-orange">
                                @if($mostUsedObat)
                                    {{ $mostUsedObat->nama_obat }} ({{ max($obatCounts) }}x)
                                @else
                                    Tidak Ada Data
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <table class="grid-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Obat</th>
                                <th>Kemasan</th>
                                <th class="text-right">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($obats->take(6) as $obat)
                                <tr>
                                    <td>{{ $obat->id }}</td>
                                    <td>{{ $obat->nama_obat }}</td>
                                    <td>{{ $obat->kemasan }}</td>
                                    <td class="text-right">Rp{{ number_format($obat->harga, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Examination Details - Bottom left -->
            <div class="card" style="grid-column: span 4; grid-row: span 4;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#FF2D55" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <h2 class="card-title">Detail Periksa</h2>
                </div>
                <div class="card-body">
                    <div class="stat-row">
                        <span class="stat-label">Total Resep Obat</span>
                        <span class="stat-value text-red">{{ $detailPeriksas->count() }}</span>
                    </div>
                    
                    <table class="grid-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Periksa</th>
                                <th>Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($detailPeriksas->take(10) as $detail)
                                @php
                                    $obat = $obats->firstWhere('id', $detail->id_obat);
                                @endphp
                                <tr>
                                    <td>{{ $detail->id }}</td>
                                    <td>{{ $detail->id_periksa }}</td>
                                    <td>{{ $obat ? $obat->nama_obat : $detail->id_obat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Medications Grid - Bottom center -->
            <div class="card" style="grid-column: span 5; grid-row: span 4;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#5856D6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="3" y1="9" x2="21" y2="9"></line>
                        <line x1="9" y1="21" x2="9" y2="9"></line>
                    </svg>
                    <h2 class="card-title">Daftar Obat Tersedia</h2>
                </div>
                <div class="card-body">
                    <div class="med-grid">
                        @foreach($obats as $obat)
                            <div class="med-item">
                                <div class="med-name">{{ $obat->nama_obat }}</div>
                                <div class="med-price">Rp{{ number_format($obat->harga, 0, ',', '.') }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Stats Card - Bottom right -->
            <div class="card" style="grid-column: span 3; grid-row: span 4;">
                <div class="card-header">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#FF9500" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20V10"></path>
                        <path d="M18 20V4"></path>
                        <path d="M6 20v-6"></path>
                    </svg>
                    <h2 class="card-title">Statistik</h2>
                </div>
                <div class="card-body">
                    @php
                        $pasienVisitCounts = [];
                        foreach($periksas as $periksa) {
                            if(!isset($pasienVisitCounts[$periksa->id_pasien])) {
                                $pasienVisitCounts[$periksa->id_pasien] = 0;
                            }
                            $pasienVisitCounts[$periksa->id_pasien]++;
                        }
                        
                        $mostVisitsPasienId = !empty($pasienVisitCounts) ? array_keys($pasienVisitCounts, max($pasienVisitCounts))[0] : null;
                        $mostVisitsPasien = $mostVisitsPasienId ? $users->firstWhere('id', $mostVisitsPasienId) : null;
                    @endphp
                    
                    <div class="stat-row">
                        <span class="stat-label">Pasien Terbanyak</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-small text-blue">
                            @if($mostVisitsPasien)
                                {{ $mostVisitsPasien->nama }}
                            @else
                                Tidak Ada Data
                            @endif
                        </span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Kunjungan</span>
                        <span class="stat-small text-blue">
                            @if($mostVisitsPasien)
                                {{ max($pasienVisitCounts) }}x
                            @else
                                -
                            @endif
                        </span>
                    </div>
                    
                    <div class="stat-row" style="margin-top: 16px;">
                        <span class="stat-label">Diagnosa Umum</span>
                    </div>
                    <div class="stat-row">
                        @php
                            $diagnosaCount = 0;
                            $diagnosaText = "";
                            
                            if(strpos(strtolower($periksas[0]->catatan), 'demam') !== false) {
                                $diagnosaCount++;
                                $diagnosaText = "Demam";
                            }
                            
                            if(strpos(strtolower($periksas[1]->catatan), 'alergi') !== false) {
                                $diagnosaCount++;
                                $diagnosaText = $diagnosaText ? $diagnosaText . " & Alergi" : "Alergi";
                            }
                        @endphp
                        <span class="stat-small text-orange">{{ $diagnosaText }}</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Kasus</span>
                        <span class="stat-small text-orange">{{ $periksas->count() }}</span>
                    </div>
                    
                    <div class="flex-center mt-auto">
                        <svg class="w-6 h-6 text-blue-500 mb-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#0071E3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <span class="text-xs text-secondary">Data Aman</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>