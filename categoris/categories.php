<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href="../css/admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Nutrisi Admin | Categories</title>
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
				<a href="categoris/categories.php">
					<i class="bx bx-box"></i>
					<span class="links_name">Categories</span>
				</a>
			</li>
			<li>
				<a href="trancation/Trancation.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">Transaction</span>
				</a>
			</li>
				<a href="#">
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
			<h3>Categories</h3>
			<button type="button" class="btn btn-tambah">
				<a href="categories-entry.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Photo</th>
						<th>Categories</th>
						<th scope="col" style="width: 20%">Description</th>
						<th scope="col" style="width: 15%">Keluhan</th>
						<th scope="col" style="width: 30%">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img src="img/fitcgipa.jpeg" width="100" height="100"></td>
						<td>Makanan DIet</td>
						<td>Fitbar merupakan snack bar yang dikemas secara individu sebagai camilan yang lebih sehat karena mengandung serat tinggi dan nggak mengandung pemanis buatan.</td>
						<td>Obesitas
						</td>
						<td>
							<button class="btn-edit" onclick="editCategory()">Edit</button>
							<button class="btn-delete" onclick="deleteCategory()">Hapus</button>
						</td>
					</tr>
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
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script>
</body>

</html>
