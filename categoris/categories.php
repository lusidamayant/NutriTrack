<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../Login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../css/admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NutriTrack Admin | Categories</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">NutriTrack</span>
        </div>
		<ul class="nav-links">
			<li>
				<a href="../admin.php" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../categories/categories.php">
					<i class="bx bx-box"></i>
					<span class="links_name">Food</span>
				</a>
			</li>
			<li>
				<a href="../transaction/meals.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">meals</span>
				</a>
			</li>
			<li>
				<a href="../transaction/mealsfood.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">meals food</span>
				</a>
			</li>
			<li>
				<a href="../logout.php">
					<i class="bx bx-log-out"></i>
					<span class="links_name">Log out</span>
				</a>
			</li>
		</ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">NutriTrack Admin</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Input data makanan bergizi program diet</h3>
            <button type="button" class="btn btn-tambah">
                <a href="categories-entry.php">Tambah Data</a>
            </button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th>Nama Makanan</th>
                        <th>Calories</th>
                        <th>Protein</th>
                        <th>Carbs</th>
                        <th>Fat</th>
                        <th>Fiber</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM tb_food";
                    $result = mysqli_query($koneksi, $sql);
                    if (mysqli_num_rows($result) == 0) {
                        echo "
                        <tr>
                            <td colspan='8' align='center'>Data Kosong</td>
                        </tr>
                        ";
                    } else {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr>
                                <td>{$data['nama_makanan']}</td>
                                <td>{$data['calories']}</td>
                                <td>{$data['protein']}</td>
                                <td>{$data['carbs']}</td>
                                <td>{$data['fat']}</td>
                                <td>{$data['fiber']}</td>
                                <td><img src='../img_food/{$data['photo']}' width='200px'></td>
                                <td>
                                    <a class='btn-edit' href='categories-edit.php?id={$data['id']}'>Edit</a> | 
                                    <a class='btn-delete' href='categories-hapus.php?id={$data['id']}'>Hapus</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        };
    </script>
</body>
</html>
