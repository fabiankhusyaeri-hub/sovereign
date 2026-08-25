<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Concierge Dashboard — SOVEREIGN</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --gold: #c4a062;
      --gold-light: #e2c992;
      --bg-dark: #0a0a0a;
      --card-bg: #141414;
      --border-color: #262626;
      --text-muted: #888888;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Montserrat', sans-serif; }
    body { background-color: var(--bg-dark); color: #e0e0e0; padding: 32px; }
    h1, h2, h3 { font-family: 'Cinzel', serif; letter-spacing: 0.1em; }

    .header { display: flex; justify-content: space-between; align-items: center; padding-bottom: 24px; border-bottom: 1px solid var(--border-color); margin-bottom: 32px; }
    .brand-title { font-size: 24px; color: var(--gold); }
    .brand-sub { font-size: 11px; letter-spacing: 0.3em; color: var(--text-muted); text-transform: uppercase; }

    .btn-back { color: var(--gold); text-decoration: none; font-size: 12px; letter-spacing: 0.1em; border: 1px solid var(--gold); padding: 10px 20px; transition: all 0.3s ease; }
    .btn-back:hover { background: var(--gold); color: #000; }

    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 32px; }
    .stat-card { background: var(--card-bg); border: 1px solid var(--border-color); padding: 20px; }
    .stat-card h4 { font-size: 11px; letter-spacing: 0.2em; color: var(--text-muted); text-transform: uppercase; margin-bottom: 10px; }
    .stat-card .value { font-size: 28px; color: var(--gold); font-weight: 600; }

    .table-container { background: var(--card-bg); border: 1px solid var(--border-color); overflow-x: auto; }
    table { width: 100%; border-collapse: collapse; text-align: left; font-size: 13px; }
    th { background: #1a1a1a; color: var(--gold); font-family: 'Cinzel', serif; font-weight: 600; letter-spacing: 0.1em; padding: 16px; border-bottom: 1px solid var(--border-color); text-transform: uppercase; font-size: 11px; }
    td { padding: 16px; border-bottom: 1px solid var(--border-color); vertical-align: middle; }
    tr:hover { background: rgba(196, 160, 98, 0.03); }

    .badge { display: inline-block; padding: 4px 10px; font-size: 10px; letter-spacing: 0.1em; text-transform: uppercase; font-weight: 600; border-radius: 2px; }
    .badge-pending { background: rgba(255, 193, 7, 0.15); color: #ffc107; border: 1px solid #ffc107; }
    .badge-approved { background: rgba(40, 167, 69, 0.15); color: #28a745; border: 1px solid #28a745; }
    .badge-completed { background: rgba(23, 162, 184, 0.15); color: #17a2b8; border: 1px solid #17a2b8; }
    .badge-cancelled { background: rgba(220, 53, 69, 0.15); color: #dc3545; border: 1px solid #dc3545; }

    select.status-select { background: #111; color: #fff; border: 1px solid #333; padding: 6px 10px; font-size: 11px; cursor: pointer; }
    .btn-delete { background: none; border: 1px solid #dc3545; color: #dc3545; padding: 6px 12px; font-size: 11px; cursor: pointer; transition: all 0.3s ease; }
    .btn-delete:hover { background: #dc3545; color: #fff; }

    .alert-success { background: rgba(196,160,98,0.15); border: 1px solid var(--gold); color: var(--gold); padding: 14px 20px; margin-bottom: 24px; font-size: 13px; }
  </style>
</head>
<body>

  <div class="header">
    <div>
      <h1 class="brand-title">SOVEREIGN</h1>
      <p class="brand-sub">Concierge Appointment Management</p>
    </div>
    <a href="{{ url('/') }}" class="btn-back">&larr; KEMBALI KE WEBSITE</a>
  </div>

  @if(session('success'))
    <div class="alert-success">
      {{ session('success') }}
    </div>
  @endif

  <!-- Ringkasan Statistik -->
  <div class="stats-grid">
    <div class="stat-card">
      <h4>Total Permohonan</h4>
      <div class="value">{{ count($appointments) }}</div>
    </div>
    <div class="stat-card">
      <h4>Status Pending</h4>
      <div class="value" style="color: #ffc107;">{{ $totalPending }}</div>
    </div>
    <div class="stat-card">
      <h4>Status Approved</h4>
      <div class="value" style="color: #28a745;">{{ $totalApproved }}</div>
    </div>
    <div class="stat-card">
      <h4>Selesai (Completed)</h4>
      <div class="value" style="color: #17a2b8;">{{ $totalCompleted }}</div>
    </div>
  </div>

  <!-- Tabel Data Appointments -->
  <h3 style="margin-bottom: 16px; font-size: 16px; color: var(--gold);">DAFTAR JANJI TEMU & PRE-ORDER</h3>
  
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Lengkap</th>
          <th>Kontak</th>
          <th>Model Jam</th>
          <th>Showroom</th>
          <th>Tanggal & Waktu</th>
          <th>Status</th>
          <th>Aksi Status</th>
          <th>Hapus</th>
        </tr>
      </thead>
      <tbody>
        @forelse($appointments as $app)
          <tr>
            <td>#{{ $app->id }}</td>
            <td><strong>{{ $app->full_name }}</strong></td>
            <td>
              <div>{{ $app->email }}</div>
              <small style="color: var(--text-muted);">{{ $app->phone }}</small>
            </td>
            <td style="color: var(--gold);">{{ $app->watch_model }}</td>
            <td>{{ $app->showroom_location }}</td>
            <td>
              <div>{{ date('d M Y', strtotime($app->appointment_date)) }}</div>
              <small style="color: var(--text-muted);">{{ $app->appointment_time }}</small>
            </td>
            <td>
              @if($app->status == 'Pending')
                <span class="badge badge-pending">Pending</span>
              @elseif($app->status == 'Approved')
                <span class="badge badge-approved">Approved</span>
              @elseif($app->status == 'Completed')
                <span class="badge badge-completed">Completed</span>
              @else
                <span class="badge badge-cancelled">Cancelled</span>
              @endif
            </td>
            <td>
              <form action="{{ route('admin.appointments.updateStatus', $app->id) }}" method="POST" style="display: flex; gap: 6px;">
                @csrf
                @method('PATCH')
                <select name="status" class="status-select" onchange="this.form.submit()">
                  <option value="Pending" {{ $app->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                  <option value="Approved" {{ $app->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                  <option value="Completed" {{ $app->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                  <option value="Cancelled" {{ $app->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
              </form>
            </td>
            <td>
              <form action="{{ route('admin.appointments.destroy', $app->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="9" style="text-align: center; color: var(--text-muted); padding: 32px;">
              Belum ada data permohonan janji temu.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

</body>
</html>