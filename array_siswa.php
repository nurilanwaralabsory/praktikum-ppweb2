<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 1</title>
</head>

<body>
    <h3>Daftar nilai siswa</h3>
    <table border="1" cellpadding='10' cellspacing='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomer = 1;
            foreach ($ar_nilai as $ar) {
                echo '<tr><td>' . $nomer . '</td>';
                echo '<td>' . $ar['nim'] . '</td>';
                echo '<td>' . $ar['uts'] . '</td>';
                echo '<td>' . $ar['uas'] . '</td>';
                echo '<td>' . $ar['tugas'] . '</td>';
                $nilai_akhir = ($ar['uts'] + $ar['uas'] + $ar['tugas']) / 3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                echo '<tr/>';
                $nomer++;
            }
            ?>
        </tbody>
    </table>

</body>

</html>