<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="assets/icon.png" />
	<link rel="stylesheet" href="css/admin.css" />
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Nutritrack Admin</title>
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
					<span class="links_name">Nutrient Intake</span>
				</a>
			</li>
			<li>
				<a href="logout.php">
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
			<h2 id="text"></h2>
			<div id="date" style="margin-bottom: 20px;"></div>
			<div class="cardBox">
			<div class="card">
					<div>
						<div class="numbers">1,042</div>
						<div class="cardName">Food</div>
					</div>
					<div class="iconBx">
						<i class="bx bx-dish"></i>
					</div>
				</div>
				<div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Nutrient Intake</div>
                    </div>
                    <div class="iconBx">
                        <i class="bx bx-dish"></i>
                    </div>
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

		function myFunction() {
			
			let date = new Date();
			jam = date.getHours();
			tanggal = date.getDate();
			hari = days[date.getDay()];
			bulan = months[date.getMonth()];
			tahun = date.getFullYear();
			let m = date.getMinutes();
			let s = date.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
			requestAnimationFrame(myFunction);
		}

		function checkTime(i) {
			if (i < 10) {
				i = "0" + i;
			}
			return i;
		}
		window.onload = function() {
			let date = new Date();
			jam = date.getHours();
			if (jam >= 4 && jam <= 10) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi");
			} else if (jam >= 11 && jam <= 14) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang");
			} else if (jam >= 15 && jam <= 18) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore");
			} else {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam");
			}
			myFunction();
			getWeather();
		};

	
	</script>
	<style>
		.cardBox {
			position: relative;
			width: 100%;
			padding: 20px;
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-gap: 50px;
		}

		.cardBox .card {
			position: relative;
			padding: 20px;
			border-radius: 20px;
			display: flex;
			justify-content: space-between;
			cursor: pointer;
			box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
		}

		.cardBox .card .numbers {
			position: relative;
			font-weight: 500;
			font-size: 2.5rem;
		}

		.cardBox .card .cardName {
			font-size: 1.3rem;
			margin-top: 5px;
		}

		.cardBox .card .iconBx {
			font-size: 4.5rem;
			color: darkslateblue;
		}

		.cardBox .card:hover {
			background: #c7c0e9;
		}
	</style>

</body>

</html>
