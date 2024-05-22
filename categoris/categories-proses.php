<?php 
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // Check if no file was uploaded
    if ($error === 4) {
        echo "<script>
                alert('Gambar Harus Diisi');
                window.location = 'categories-entry.php';
              </script>";
        return false;
    }

    // Check if the uploaded file is an image
    $validImageExtensions = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $namaFile);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtensions)) {
        echo "<script>
                alert('File Harus Berupa Gambar');
                window.location = 'categories-entry.php';
              </script>";
        return null;
    }

    // Passed all checks, upload the image
    $newFileName = uniqid() . '.' . $imageExtension;
    move_uploaded_file($tmpName, '../img_food/' . $newFileName);
    return $newFileName;
}

if (isset($_POST['simpan'])) {
    $nama_makanan = $_POST['nama_makanan'];
    $calories = $_POST['calories'];
    $protein = $_POST['protein'];
    $carbs = $_POST['carbs'];
    $fat = $_POST['fat'];
    $fiber = $_POST['fiber'];
    $photo = upload();

    if (!$photo) {
        return false;
    }

    if (empty($nama_makanan) || empty($calories) || empty($protein) || empty($carbs) || empty($fat) || empty($fiber)) {
        echo "<script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'categories-entry.php';
              </script>";
    } else {
        $sql = "INSERT INTO tb_food (nama_makanan, calories, protein, carbs, fat, fiber, photo) 
                VALUES ('$nama_makanan', '$calories', '$protein', '$carbs', '$fat', '$fiber', '$photo')";

        if (mysqli_query($koneksi, $sql)) {
            echo "<script>
                    alert('Data Makanan Berhasil Ditambahkan');
                    window.location = 'categories.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi Kesalahan');
                    window.location = 'categories-entry.php';
                  </script>";
        }
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_food WHERE id = '$id'";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Data Makanan Berhasil Dihapus');
                window.location = 'categories.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location = 'categories.php';
              </script>";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $calories = $_POST['calories'];
    $protein = $_POST['protein'];
    $carbs = $_POST['carbs'];
    $fat = $_POST['fat'];
    $fiber = $_POST['fiber'];

    if ($_FILES['photo']['error'] === 4) {
        $photo = $_POST['photo_lama'];
    } else {
        $photo = upload();
        if (!$photo) {
            return false;
        }
    }

    $sql = "UPDATE tb_food SET nama_makanan='$nama_makanan', calories='$calories', protein='$protein', carbs='$carbs', fat='$fat', fiber='$fiber', photo='$photo' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Data Makanan Berhasil Diubah');
                window.location = 'categories.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-edit.php?id=$id';
              </script>";
    }
}
?>
