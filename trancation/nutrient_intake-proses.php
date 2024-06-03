<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $total_calories = $_POST['total_calories'];
    $total_protein = $_POST['total_protein'];
    $total_carbohydrates = $_POST['total_carbohydrates'];
    $total_fat = $_POST['total_fat'];
    $total_fiber = $_POST['total_fiber'];

    $sql = "INSERT INTO nutrient_intake VALUES(NULL, '$total_calories', '$total_protein', '$total_carbohydrates','$total_fat', '$total_fiber')";

    if(empty($total_calories) || empty($total_protein)|| empty($total_carbohydrates) || empty($total_fat) || empty($total_fiber)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'nutrient_intake-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Artist Berhasil Ditambahkan');
                window.location = 'nutrient_intake.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'nutrient_intake.php'
            </script>
        ";
    }
}else {
    header('location: nutrient_intake.php');
}