<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Nutritrack Admin | Transaction</title>
</head>

<body>
   <div class="sidebar">
   <div class="logo-details">
			<i class="bx bx-category"></i>
			<span class="logo_name">NutriTrack</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="#" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="categoris/categories.php">
					<i class="bx bx-box"></i>
					<span class="links_name">Food</span>
				</a>
			</li>
			<li>
				<a href="trancation/nutrient_intake.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">nutrient_intake</span>
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
            <span class="admin_name">Nutritrack Admin</span>
         </div>
      </nav>
      
      <div class="home-content">
			<h3>nutrient intake</h3>
			<button type="button" class="btn btn-tambah">
				<a href="nutrient_intake-entry.php">Tambah Data</a>
			</button>
			<button type="button" class="btn btn-render">
				<a href="nutrient_intake-cetak.php">Cetak Data</a>
			</button>
         <table class="table-data">
            <thead>
               <tr>
               <th scope="col" style="width: 20%">total calories</th>
                        <th scope="col" style="width: 20%">total protein</th>
						<th scope="col" style="width: 30%">total carbohydrates</th>
						<th scope="col" style="width: 15%">total fat</th>
                        <th scope="col" style="width: 15%">total fiber</th>
						<th scope="col" style="width: 30%">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               include '../koneksi.php';
               $sql = "SELECT * FROM nutrient_intake";
               $result = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($result) == 0) {
                  echo "
                  <tr>
                  <td colspan='6' align='center'>
                                 Data Kosong
                              </td>
                  </tr>
               ";
               } else {
                  while ($data = mysqli_fetch_assoc($result)) {
                     echo "
                     <tr>
                         <td>$data[total_calories]</td>
                         <td>$data[total_protein]</td>
                         <td>$data[total_carbohydrates]</td>
                         <td>$data[total_fat]</td>
                         <td>$data[total_fiber]</td>
                         <td>
                         <a class='btn-edit' href=nutrient_intake-edit.php?id=$data[id]>
                         Edit
                  </a> | 
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
      sidebarBtn.onclick = function() {
         sidebar.classList.toggle("active");
         if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
         } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };

      function showDetails(total_calories, total_protein, total_carbohydrates,total_fat, total_fiber) {
         alert(`total_calories: ${total_calories}\ntotal_protein: ${total_protein}\ntotal_carbohydrates: ${total_carbohydrates}\ntotal_fat: ${total_fat}\ntotal_fiber: ${total_fiber}`);
      }
   </script>


</body>

</html>
