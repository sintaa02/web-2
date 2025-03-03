<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Penilaian</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h3 style="text-align: left;">Form Nilai Siswa</h3><hr/>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form method="POST" action="nilai_mahasiswa.php">
            <!-- Nama Lengkap -->
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
              </div>
            </div>
            <!-- Matkul -->
            <div class="form-group row">
              <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required>
                  <option value="DDP">Dasar Dasar Pemrograman</option>
                  <option value="BD1">Basis Data</option>
                  <option value="WEB1">Pemrograman Web</option>
                </select>
              </div>
            </div>
            <!-- Nilai UTS -->
            <div class="form-group row">
              <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
              <div class="col-4">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required>
              </div>
            </div>
            <!-- Nilai UAS -->
            <div class="form-group row">
              <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
              <div class="col-4">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required>
              </div>
            </div>
            <!-- Nilai Tugas -->
            <div class="form-group row">
              <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
              <div class="col-4">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required>
              </div>
            </div> 
            <!-- Simpan -->
            <div class="form-group row">
              <div  class="offset-4 col-8"> <!-- Menengahkan tombol -->
                <button type="submit" class="btn btn-primary" value="Simpan" name="proses">Simpan</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  </fieldset>
</body>
</html>