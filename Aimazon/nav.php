<nav>
    <ul>
        <img src="AimazonLogoBackground/aimlogo.png" alt="Aimazon Logo" class="logo">
        <li><a href="index.php?category=pistol" class="nav-link <?php echo (isset($category) && $category === 'pistol') ? 'active' : ''; ?>">Pistol</a></li>
        <li><a href="index.php?category=revolver" class="nav-link <?php echo (isset($category) && $category === 'revolver') ? 'active' : ''; ?>">Revolver</a></li>
        <li><a href="index.php?category=shotgun" class="nav-link <?php echo (isset($category) && $category === 'shotgun') ? 'active' : ''; ?>">Shotgun</a></li>
        <li><a href="index.php?category=rifle" class="nav-link <?php echo (isset($category) && $category === 'rifle') ? 'active' : ''; ?>">Rifle</a></li>
        <li><a href="index.php?category=utilities" class="nav-link <?php echo (isset($category) && $category === 'utilities') ? 'active' : ''; ?>">Utilities</a></li>
    </ul>
</nav>


<style>
    
    header {
        background: linear-gradient(135deg, #2a4055);
        color: white;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 100;
        }

    .header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    padding: 0 40px; 
    }


    .logo {
        position: absolute;
        left: 20px;
		width:150px;
	    height: 90spx;
        }

    header nav {
        margin: 0 auto;
        display: flex;
        justify-content: center;
        }

    nav ul {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        gap: 1.5rem;
        padding: 0;
        margin: 0;
        }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem 0.8rem;
        border-radius: 4px;
        transition: background-color 0.3s;
        }

    nav a:hover,
    nav a.active {
        background-color: rgba(255, 255, 255, 0.2);
        }

    .header-content aside {
        position: absolute;
        right: 10px;
        display: flex;
        align-items: center;
        gap: 1rem;
        }

</style>
