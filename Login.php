<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" href="assets/icon.png" />
		<title>Login</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	</head>
	<body>
	<center>
        <div class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php">about us</a>
        <a href="index.php">Service</a>
        <a href="Login.php">Login</a>
        
    </div>
        <main>
            <div class="logo Login">
                <img src="img/logo.jpg" alt="" width="100" height="60" />
            </div>
            <div class="form-login">
                <h3>Login</h3>
                <form action="login-proses.php" method="post">
                <input class="input" type="text" name="username"
			    placeholder="Username" />
	         <input class="input" type="password" name="password"
			    placeholder="Password" />
		   <button type="submit" class="button" name="login"  
                      id="login"> Login
                    <!-- <button type="button" onclick="submitFormlogin()">Login</button> -->
                </form>
             <a href="registrasi.php">No Account? Register Here</a>
		    </div>
		</main>
		<footer>
			<h4>&copy; 2024 NutriTrack. All rights reserved.</h4>
		</footer>
        <script>
    //    async function submitFormlogin() {
    //         var username = document.getElementById("Username").value;
    //         var password = document.getElementById("Password").value;
            
    //         if (username.trim() === "" || password.trim() === "") {
    //             alert("Periksa kembali isi pada setaip kolom!");
    //             return;
    //         }
           
    //         Menggunakan PopUp Box untuk memberikan pesan kepada pengguna
    //         var confirmation = confirm("Apakah Anda yakin ingin melakukan login?");
    //         if (confirmation) {
                
    //             await new Promise(resolve => setTimeout(resolve, 2000));
    //             alert("Login berhasil!"); 
    //             Simpan data pengguna ke dalam localStorage
    //             localStorage.setItem("Username", Username);
               
    //             window.location.href = "admin.php";
    //         }

    //     }
        <?php
       // Start session
        session_start();

       // Jika formulir telah dikirimkan
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Ambil nilai dari formulir
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];

            // Simpan data dalam session
            $_SESSION['Username'] = $Username;

            // Set cookie dengan username
            setcookie('Username', $Username, time() + (86400 * 30), "/");

            // pengalihan ke halaman beranda setelah login berhasil
            header("Location: admin.php"); //kembali ke home
            exit;
        }
        ?>


        // </script>
	</center>
	</body>
</html>