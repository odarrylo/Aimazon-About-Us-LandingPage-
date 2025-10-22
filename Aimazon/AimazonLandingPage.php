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
	<?php include 'AimazonHeader.php'; ?>
	
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
                <a href="product1.php"><img src="AimazonProducts/ak47.png" alt="Best Seller Gun 1"></a>
                <a href="product2.php"><img src="AimazonProducts/remington.png" alt="Best Seller Gun 2"></a>
                <a href="product3.php"><img src="AimazonProducts/ssig.png" alt="Best Seller Gun 3"></a>
            </div>
        </div>
    </div>
	
	<?php include('AimazonFooter.php'); ?>

    <?php
    // When user clicks "Enter Site"
    if (isset($_POST['enter'])) {
        echo '<style>body { animation: fadeOut 1.5s forwards; }</style>';
        echo '<meta http-equiv="refresh" content="1.5;url=login.php">';
    }
    ?>
</body>
</html>