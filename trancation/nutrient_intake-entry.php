<?php 
session_start();
if($_SESSION['username'] == null) {
    header('location:../Login.php');
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
    <title>NutriTrack Admin | Categories Entry</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">NutriTracks</span>
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
            <h3>Input data nutrient intake</h3>
            <div class="form-login">
                <form action="nutrient_intake-proses.php" method="post" enctype="multipart/form-data">
                    <label for="total_calories">total calories</label>
                    <input class="input" type="text" name="total_calories" id="total_calories" placeholder="total calories" required />
                    <label for="total_protein">total protein</label>
                    <input class="input" type="text" name="total_protein" id="total_protein" placeholder="total protein" required />
                    <label for="total_carbohydratesn">total carbohydrates</label>
                    <input class="input" type="text" name="total_carbohydrates" id="total_carbohydrates" placeholder="total carbohydrates" required />
                    <label for="total_fat">Fat</label>
                    <input class="input" type="text" name="total_fat" id="total_fat" placeholder="total fat" required />
                    <label for="total_fiber">Fiber</label>
                    <input class="input" type="text" name="total_fiber" id="total_fiber" placeholder="total Fiber" required />
                    <button type="submit" class="btn btn-simpan" name="simpan">
                        Simpan
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
            } else {
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        };
    </script>
</body>
</html>

