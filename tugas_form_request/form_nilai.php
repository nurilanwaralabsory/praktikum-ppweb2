<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Form Nilai Siswa</title>

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
        <form class="mx-auto" action="form_nilai.php" method="POST">
            <div class="form-group row">
                <label for="nama" class="col-5 col-form-label font-weight-bold text-right">Nama Lengkap</label>
                <div class="col-7">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-5 col-form-label font-weight-bold text-right">Mata Kuliah</label>
                <div class="col-7">
                    <select id="matkul" class="custom-select" required="required" name="matkul">
                        <option>Dasar Dasar Pemrograman</option>
                        <option>Basis Data I</option>
                        <option>Pemrograman Web 1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-5 col-form-label font-weight-bold text-right">Nilai UTS</label>
                <div class="col-7">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required="required" min="0" max="100">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-5 col-form-label font-weight-bold text-right">Nilai UAS</label>
                <div class="col-7">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required="required" min="0" max="100">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-5 col-form-label font-weight-bold text-right">Nilai Tugas/Praktikum</label>
                <div class="col-7">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required="required" min="0" max="100">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-5 col-7">
                    <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
                </div>
            </div>
        </form>
        <?php
        $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : "";
        $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : "";
        $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
        $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
        $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas']  : "";
        $nilai_total = round(($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35), 2);

        if ($nilai_total >= 85 && $nilai_total == 100) {
            $grade = 'A';
            $predikat = 'Sangat Memuaskan';
        } elseif ($nilai_total >= 70) {
            $grade = 'B';
            $predikat = 'Memuaskan';
        } elseif ($nilai_total >= 56) {
            $grade = 'C';
            $predikat = 'Cukup';
        } elseif ($nilai_total >= 36) {
            $grade = 'D';
            $predikat = 'Kurang';
        } elseif ($nilai_total >= 0) {
            $grade = 'E';
            $predikat = 'Sangat Kurang';
        } else {
            $grade = 'I';
            $predikat = 'Tidak Ada';
        }

        if ($nilai_total > 55) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        if (isset($_POST['proses'])) {
            echo "<br/>Nama : " . $nama_siswa;
            echo "<br/>Mata Kuliah : " . $mata_kuliah;
            echo "<br/>Nilai UTS : " . $nilai_uts;
            echo "<br/>Nilai UAS : " . $nilai_uas;
            echo "<br/>Nilai Tugas Praktikum : " . $nilai_tugas;
            echo "<br/>Nilai Total : " . $nilai_total;
            echo "<br/>Grade : " . $grade;
            echo "<br/>Predikat : " . $predikat;
            echo "<br/>Status : "  . $status;
        }
        ?>
    </main>



    <footer class="mt-5">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="https://instagram.com/al.absory/">&copy;<?= date("Y") ?> <span style="color: blue;">@al.absory</span> </a>
            </div>
        </nav>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>