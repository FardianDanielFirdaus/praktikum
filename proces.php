<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $agama = $_POST["agama"];
    $status_menikah = $_POST["status_menikah"];
    $jumlah_anak = $_POST["jumlah_anak"];

    if ($status_menikah == "Menikah") {
        if ($jumlah_anak < 1) {
            echo "Jumlah anak tidak boleh kurang dari 1.";
        } else {
            echo "Nama: $nama<br>";
            echo "Jabatan: $jabatan<br>";
            echo "Agama: $agama<br>";
            echo "Status Menikah: $status_menikah<br>";
            echo "Jumlah Anak: $jumlah_anak<br>";
        }
    } else {
        echo "Nama: $nama<br>";
        echo "Jabatan: $jabatan<br>";
        echo "Agama: $agama<br>";
        echo "Status Menikah: $status_menikah<br>";
    }
}
?>