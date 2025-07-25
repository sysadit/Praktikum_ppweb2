<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Form Nilai SiswA</title>

  <style>
    @media (min-width: 426px) {
      form {
        width: 65%;
      }
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Sistem Penilaian</a>
      </div>
    </nav>
  </header>

  <main role="main" class="container mt-3">
    <h3>Form Penilaian Siswa</h3>
    <hr />
    <form class="mx-auto" action="nilai_mahasiswa.php" method="POST">
      <div class="form-group row">
        <label for="nama" class="col-5 col-form-label font-weight-bold text-right">Nama Lengkap</label>
        <div class="col-7">
          <input id="nama" name="nama" placeholder="Contoh: Adit Hermansyah" type="text" required class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-5 col-form-label font-weight-bold text-right">Mata Kuliah</label>
        <div class="col-7">
          <select id="matkul" name="matkul" class="custom-select" required>
            <option value="BD1">Basis Data I</option>
            <option value="WEB1">Pemrograman Web 1</option>
            <option value="DDP">Dasar Dasar Pemrograman</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uts" class="col-5 col-form-label font-weight-bold text-right">Nilai UTS</label>
        <div class="col-7">
          <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required min="0" max="100">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-5 col-form-label font-weight-bold text-right">Nilai UAS</label>
        <div class="col-7">
          <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required min="0" max="100">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_tugas" class="col-5 col-form-label font-weight-bold text-right">Nilai Tugas/Praktikum</label>
        <div class="col-7">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required min="0" max="100">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-5 col-7">
          <button type="submit" name="proses" class="btn btn-primary" value="Simpan">Simpan</button>
        </div>
      </div>
    </form>
  </main>

  <footer class="mt-5" style="bottom: 0; left: 0; right: 0; position: fixed;">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Developed by @sysadit &copy;<?= date("Y") ?></a>
      </div>
    </nav>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>
