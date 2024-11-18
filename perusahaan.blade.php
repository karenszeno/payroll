<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/perusahaan.css') }}">
  <title>@yield('title', 'Payroll App')</title>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Payroll <span>BCA</span></h2>
    <nav>
      <ul>
        <li><a href="/perusahaan">Perusahaan</a></li> <!-- Gunakan URL langsung -->
      </ul>
    </nav>
    <div class="footer">
      <a href="/logout">Logout</a> <!-- Gunakan URL langsung -->
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <header>
      <h1>@yield('header', 'Halaman Utama')</h1>
      <p>Halo, Admin | Super Admin</p>
    </header>
    <div class="content">
      <h2>Daftar Perusahaan</h2>
      <div class="data-actions">
        <a href="/perusahaan/create" class="btn btn-primary">Tambah Perusahaan</a> <!-- Gunakan URL langsung -->
      </div>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Perusahaan</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Jumlah Karyawan</th>
              <th>Tanggal Buat</th>
              <th>Tanggal Update</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($perusahaan as $item) <!-- Ubah iterasi sesuai dengan nama baru -->
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->jumlah_karyawan }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                  <!-- Tombol Edit -->
                  <a href="/perusahaan/{{ $item->id }}/edit" class="btn btn-warning">Edit</a> <!-- Gunakan URL langsung -->
                  
                  <!-- Tombol Hapus -->
                  <form action="/perusahaan/{{ $item->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus perusahaan ini?')">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
