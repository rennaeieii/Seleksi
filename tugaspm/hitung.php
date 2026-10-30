<?php
if(isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    $rata = ($nilai1 + $nilai2) / 2;

    if ($nilai3 >= 80) {
        if ($rata >= 90) {
            $status = "LULUS";
            $kategori = "Grade A";
        } elseif ($rata >= 80) {
            $status = "LULUS";
            $kategori = "Grade B";
        } elseif ($rata >= 70) {
            $status = "LULUS";
            $kategori = "Grade C";
        } else {
            $status = "TIDAK LULUS";
            $kategori = "Grade D";
        }
    } else {
        $status = "TIDAK LULUS";
        $kategori = "Tidak Memenuhi Syarat";
    }
    
    if ($status == "LULUS") {
        $warna = "green";
    } else {
        $warna = "red";
    }

    echo "
    <h2>Hasil Seleksi</h2>
    <table>
        <tr>
            <td><b>Nama Kandidat</b></td>
            <td>: $nama</td>
        </tr>
        <tr>
            <td><b>Presentase Kehadiran</b></td>
            <td>: $nilai3%</td>
        </tr>
        <tr>
            <td><b>Rata-rata</b></td>
            <td>: $rata</td>
        </tr>
        <tr>
            <td><b>Kategori</b></td>
            <td>: $kategori</td>
        </tr>
        <tr>
            <td><b>Status</b></td>
            <td>: <b style='color: $warna;'>$status</b></td>
        </tr>
    </table>
    ";
}
?>