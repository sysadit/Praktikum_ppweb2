<?php
require_once("bukuTamu.php");
session_start();

//inisialisasi kalau sesi blum ada
if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}
//confrm kalau form disubmit
if (isset($_POST['submit'])) {
    $bukutamu = new BukuTamu();
    $bukutamu->timestamp = date('Y-m-d H:i:s');
    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    $_SESSION['bukutamu'][] = $bukutamu;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Riwayat Kunjungan</h2>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Waktu</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Keperluan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($entry->timestamp); ?></td>
                        <td><?php echo htmlspecialchars($entry->fullname); ?></td>
                        <td><?php echo htmlspecialchars($entry->email); ?></td>
                        <td><?php echo htmlspecialchars($entry->message); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="index.php" class="btn btn-secondary mt-3">Kembali ke Form</a>
        <p class="text-muted mt-3">Halaman ini dikelola oleh sysadit</p>
    </div>
</body>
</html>
