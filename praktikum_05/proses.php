<?php
require_once("kunjungan.php");
session_start();

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    $kunjungan = new Kunjungan();
    $kunjungan->fullname = $_POST['fullname'];
    $kunjungan->email = $_POST['email'];
    $kunjungan->jenis_kunjungan_id = $_POST['jenis_kunjungan_id'];
    array_push($_SESSION['bukutamu'], $kunjungan);
    $kunjungan->save();
}

$daftar_kunjungan = Kunjungan::getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Timestamp</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Jenis</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar_kunjungan as $entry): ?>
                <tr>
                    <td><?php echo htmlspecialchars($entry->id); ?></td>
                    <td><?php echo htmlspecialchars($entry->timestamp); ?></td>
                    <td><?php echo htmlspecialchars($entry->fullname); ?></td>
                    <td><?php echo htmlspecialchars($entry->email); ?></td>
                    <td><?php echo htmlspecialchars($entry->jenis_kunjungan_id); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="index.php">&lt;&lt;&lt; Kembali</a>

</body>

</html>