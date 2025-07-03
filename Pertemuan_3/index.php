<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kunjungan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Selamat Datang di Perpustakaan STT-NF</h2>
        <p>Silakan isi data kunjungan pada form di bawah ini</p>
        <hr />

        <form method="POST" action="kunjungan.php">
            <div class="form-group row">
                <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input name="fullname" type="text" class="form-control" aria-describedby="fullnameHelp" required>
                    <small id="fullnameHelp" class="form-text text-muted">Tulis nama lengkap kamu</small>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input name="email" type="email" class="form-control" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">Masukkan email aktif kamu</small>
                </div>
            </div>

            <div class="form-group row">
                <label for="message" class="col-4 col-form-label">Keperluan</label>
                <div class="col-8">
                    <textarea name="message" cols="40" rows="5" class="form-control" aria-describedby="messageHelp" required></textarea>
                    <small id="messageHelp" class="form-text text-muted">Jelaskan keperluan kamu datang ke perpustakaan</small>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <div class="text-center mt-4">
            <small>Developed by @sysadit</small>
        </div>
    </div>
</body>

</html>
