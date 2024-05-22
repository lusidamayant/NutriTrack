<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'categories.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_food WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>NutriTrack Admin | Categories Entry</title>
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
	   <div class="form-login">
		<form
              action="categories-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
               <input type="hidden" name="id" value="<?= $data['id'] ?>">
               <input type="hidden" name="photoLama" value="<?= $data['photo'] ?>">
               <label for="nama_makanan">Nama makanan</label>
               <input
                 class="input"
                 type="text"
                 name="nama_makanan"
                 id="nama_makanan"
                 placeholder="nama makanan"
                 value="<?= $data['nama_makanan'] ?>"
               />
               <label for="calories">kalori</label>
               <input
                 class="input"
                 type="text"
                 name="calories"
                 id="calories"
                 placeholder="kalori"
                 value="<?= $data['calories']?>"
               />
                <label for="protein">protein</label>
                <input
                  class="input"
                  type="text"
                  name="protein"
                  id="protein"
                  placeholder="protein"
                  value="<?= $data['protein']?>"
                />
                <label for="protein">protein</label>
                <input
                  class="input"
                  type="text"
                  name="protein"
                  id="protein"
                  placeholder="protein"
                  value="<?= $data['protein']?>"
                />
                <label for="fat">fat</label>
                <input
                  class="input"
                  type="text"
                  name="fat"
                  id="fat"
                  placeholder="fat"
                  value="<?= $data['fat']?>"
                />
                <label for="carbs">Karbohifrat</label>
                <input
                  class="input"
                  type="text"
                  name="carbs"
                  id="carbs"
                  placeholder="carbs"
                  value="<?= $data['carbs']?>"
                />
                <label for="fiber">fiber</label>
                <input
                  class="input"
                  type="text"
                  name="fiber"
                  id="fiber"
                  placeholder="fiber"
                  value="<?= $data['fiber']?>"
                />
               <label for="photo">Photo</label>
               <img src="../img_categories/<?= $data['photo'] ?>" alt="" width="200px">
               <input
                 type="file"
                 name="photo"
                 id="photo"
                 style="margin-bottom: 20px"
               />
               <button type="submit" class="btn btn-simpan" name="edit">
                 Edit
               </button>
          </form>
	   </div>
    </div>
  </section>
  <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function () {
	   sidebar.classList.toggle("active");
	   if (sidebar.classList.contains("active")) {
		sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
	   } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
	   };
   </script>
</body>
</html>
