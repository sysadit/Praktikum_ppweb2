<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kunjungan Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <?php
    require_once("jenisKunjungan.php");
    $jenis_kunjungan = JenisKunjungan::getAll();
    ?>
    
    <div class="container mt-5">
        <h2>Selamat Datang di Perpustakaan STT Terpadu Nurul Fikri</h2>
        <p>Silakan isi data kunjungan kamu pada form berikut</p>
        <hr/>

        <form method="POST" action="proses.php">
            <div class="form-group row">
                <label for="fullname" class="col-3 col-form-label">Nama Lengkap</label>
                <div class="col-9">
                    <input id="fullname" name="fullname" type="text" class="form-control" aria-describedby="fullnameHelp" required>
                    <small id="fullnameHelp" class="form-text text-muted">Masukkan nama lengkap kamu.</small>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-3 col-form-label">Email</label>
                <div class="col-9">
                    <input id="email" name="email" type="email" class="form-control" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">Gunakan email aktif yang bisa dihubungi.</small>
                </div>
            </div>

            <div class="form-group row">
                <label for="jenis_kunjungan_id" class="col-3 col-form-label">Jenis Kunjungan</label>
                <div class="col-9">
                    <select id="jenis_kunjungan_id" name="jenis_kunjungan_id" class="custom-select" required>
                        <?php foreach ($jenis_kunjungan as $jenis): ?>
                            <option value="<?= htmlspecialchars($jenis->id) ?>">
                                <?= htmlspecialchars($jenis->display_name) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <small id="jenisKunjunganBlock" class="form-text text-muted">Pilih jenis kunjungan kamu.</small>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-3 col-9">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
