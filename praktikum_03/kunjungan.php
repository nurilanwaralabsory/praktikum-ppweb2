<?php
require_once('BukuTamu.php');
session_start();

// session ini bentuknya array assosiatif
if (!isset($_SESSION['bukutamu'])) {
    // ini akan membuat session bukutamu tidak ada isinya karena session bukutamu tidak ada
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    $bukutamu = new BukuTamu();
    $bukutamu->timestamp = date('Y-m-d H:i:s');
    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    // menambahkan object $bukutamu ke dalam session buku tamu
    array_push($_SESSION['bukutamu'], $bukutamu);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kunjungan</title>
</head>

<body>
    <table border="1" cellpadding='10'>
        <tbody>
            <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
                <tr>
                    <td><?php echo htmlspecialchars($entry->timestamp) ?></td>
                    <td><?php echo htmlspecialchars($entry->fullname) ?></td>
                    <td><?php echo htmlspecialchars($entry->email) ?></td>
                    <td><?php echo htmlspecialchars($entry->message) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php">Kembali</a>
</body>

</html>