<?php
// landing_intro.php — Landing Page Intro before login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aimazon | Welcome</title>
    <link rel="stylesheet" href="AimazonLandingPage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="content">
        <!-- Intro Section -->
        <div class="intro">
            <h1>Welcome to Aimazon</h1>
            <p>Your trusted online armory — quality, safety, and precision.</p>
            <form method="post">
                <input type="submit" name="enter" value="Enter Site">
            </form>
        </div>

        <!-- Best Seller Guns Section -->
        <div class="bestsellers">
            <h2>Best Seller Guns</h2>
            <div class="gallery">
                <a href="product1.php"><img src="ak47.png" alt="Best Seller Gun 1"></a>
                <a href="product2.php"><img src="remington.png" alt="Best Seller Gun 2"></a>
                <a href="product3.php"><img src="ssig.png" alt="Best Seller Gun 3"></a>
            </div>
        </div>
    </div>
	
	<footer>
        <div class="footer-links">
			
			<div class="social-link">
				<h3>Connect With Our Journey!</h3>
				<p>Follow our project development and updates on social media.</p>
				<a href="https://facebook.com/AimAzonProject" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/AimAzonDev" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/AimAzonIT" target="_blank" aria-label="X (Twitter)"><i class="fab fa-twitter"></i></a>
			
			</div>
			<br>
            <div class="policies">
                <a href="AimazonPrivacyPolicy.php">Privacy Policy</a>
				
				<br>
                <a href="AimazonTermsAndConditions.php">Terms of Service</a>
            </div>
        </div>

        <div class="disclaimer">
            Educational Disclaimer:

				Aimazon is not a real gun shop.
				This is a student web project created to fulfill academic requirements and demonstrate skills in web development, HTML, CSS, PHP, and database design.
				No real sales, orders, or transactions take place on this website.
				All firearm images or product names are sample data only.
				
			

        </div>
		<div class="footer-links">
			
			<p>All rights reserved 2025.</p>
			
         
        </div>
    </footer>

    <?php
    // When user clicks "Enter Site"
    if (isset($_POST['enter'])) {
        echo '<style>body { animation: fadeOut 1.5s forwards; }</style>';
        echo '<meta http-equiv="refresh" content="1.5;url=login.php">';
    }
    ?>
</body>
</html>