<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/perusahaan.css') }}">
  <title>Tambah Perusahaan</title>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Payroll <span>BCA</span></h2>
    <nav>
      <ul>
        <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
      </ul>
    </nav>
    <div class="footer">
      <a href="{{ route('logout') }}">Logout</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <header>
      <h1>Tambah Perusahaan</h1>
      <p>Halo, Admin | Super Admin</p>
    </header>
    <div class="content">
      <h2>Form Tambah Perusahaan</h2>
      <div class="form-container">
        <form action="{{ route('perusahaan.store') }}" method="POST">
          @csrf
          
          <div class="form-group">
            <label for="nama">Nama Perusahaan</label>
            <input type="text" id="nama" name="nama" required>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" id="telepon" name="telepon" required>
          </div>

          <div class="form-group">
            <label for="jumlah_karyawan">Jumlah Karyawan</label>
            <input type="number" id="jumlah_karyawan" name="jumlah_karyawan" required>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('perusahaan') }}" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
