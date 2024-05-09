<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="icon" href="assets/icon.png" />
		<title>Home</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
	</head>
	<body>
		
            <div class="navbar">
                    <a href="home.php">Home</a></li>
                    <a href="about.php">about us</a></li>
                    <a href="service.php">Service</a></li>
                    <a href="Login.php">Login</a></li>
                    </div>
                    
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="img/slide1.jpg"style="widht:100%" height="50%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="img/Slide2.png" style="width:100%">
                        
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="img/Slide3.jpg" style="width:100%">
                        </div>
                        
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        
                        </div>
                        <br>
                        
                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
                        
                        <script>
                        let slideIndex = 1;
                        showSlides(slideIndex);
                        
                        function plusSlides(n) {
                          showSlides(slideIndex += n);
                        }
                        
                        function currentSlide(n) {
                          showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                          let i;
                          let slides = document.getElementsByClassName("mySlides");
                          let dots = document.getElementsByClassName("dot");
                          if (n > slides.length) {slideIndex = 1}    
                          if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                          }
                          for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                        }
                        function Konsultasi() {
                            
                            alert("Terima kasih telah menggunakan layanan konsultasi NutriTrack!");
                        }
                        </script>
                        
                    <center>

        
                    <div class="content">
                        <h3>Selamat datang di NutriTrack </h3>
                        <p>NutriTrack menyediakan layanan konsultasi gizi yang terpercaya dan disesuaikan dengan kebutuhan individu. Dengan tim ahli gizi yang berpengalaman, kami membantu Anda mencapai tujuan kesehatan Anda melalui konsultasi langsung dan fitur interaktif. Temukan informasi gizi terbaru dan resep makanan sehat untuk gaya hidup yang lebih baik. Bergabunglah dengan NutriTrack untuk mendapatkan dukungan komprehensif dalam perjalanan menuju kesehatan optimal.</p>
                    <p>Dengan fokus pada pendekatan holistik terhadap kesehatan, NutriTrack juga menawarkan konten edukatif yang bermanfaat, mulai dari artikel-artikel gizi terkini hingga resep-resep makanan sehat yang lezat.
                         Kami percaya bahwa pemahaman yang baik tentang gizi dan kebiasaan makan yang sehat merupakan kunci bagi gaya hidup yang berkelanjutan. Melalui kombinasi teknologi canggih dan keahlian gizi yang mendalam, NutriTrack siap membantu Anda dalam mencapai tujuan kesehatan Anda secara holistik dan menyeluruh.</p>
                    </div>

                    <div id="document">
                        <h1 class="text-center"></h1>
                        <div class="container">
                            <div class="clear-content">
                                <img src="img/HE.png" alt="Logo" width="300" height="300"/>
                                <div class="content">
                                    <p>Layanan Gizi Terpercaya di Indonesia!
                                        <p>rofesional dalam bekerja</p>
                                        <p> Tulus dan prima dalam melayani</p>
                                        <p>Terkini dalam informasi</p>
                                    </p>
                                    <div class="btn">
                                        <input
                                            type="button"
                                            class="button"
                                            name="Konsultasi"
                                            value="Konsultasi"
                                            onClick="Konsultasi()"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
			
			<main>
                <section>
                   
                </section> 
                
        
            </main>
        
            <footer> <p>&copy; 2024 NutriTrack. All rights reserved.</p> </footer>
		</center>
	</body>
</html>