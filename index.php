<!DOCTYPE html>
<html en="lang">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/nav-style.css">
        <link rel="stylesheet" href="assets/css/video-background-style.css">
        <script rel="text/javascript" src="assets/js/script.js" defer></script>
        <title>Galaari | Welcome to the official Galaari website</title>
    </head>
    <body>
	<header class="game-navbar">
    		<div class="nav-container">
        		<a href="index.php" class="nav-logo">
           		 Galaa<span class="highlight">ri</span>
        		</a>

        	<div class="menu-toggle" id="mobile-menu">
            		<span class="bar"></span>
            		<span class="bar"></span>
			<span class="bar"></span>
        	</div>

        	<nav class="nav-menu">
            			<ul>
                			<li><a href="index.php" class="nav-link active">Home</a></li>
                			<li><a href="games.php" class="nav-link">Games</a></li>
					<li><a href="submit.php" class="nav-link">Advertise</a></li>
					<li><a href="admin.php" class="nav-link">Admin</a></li>
                			<li><a href="about.php" class="nav-link">About Us</a></li>
                			<li><a href="contact.php" class="nav-link">Contact</a></li>
                			<li><a href="login.php" class="nav-link btn-login">Login</a></li>
					<li><a href="register.php" class="nav-link btn-signup">Sing Up</a></li>
            			</ul>
        		</nav>
   		 </div>
	</header>
	</header>

	<script>
    		const menuToggle = document.getElementById('mobile-menu');
    		const navMenu = document.querySelector('.nav-menu');

    		menuToggle.addEventListener('click', () => {
        	menuToggle.classList.toggle('is-active');
        	navMenu.classList.toggle('active');
    		});
	</script>
	
        <main>
            <section class="hero">
		<div class="hero-video-bg">
        		<video autoplay muted loop playsinline>
            		<source src="assets/videos/game-clip.mp4" type="video/mp4">
        		</video>
        	<div class="video-overlay"></div>

    		</div>
                <h2>Promote Your Game to the World</h2>
                <p>Discover, advertise, and explore the best indie and AAA games</p>
                <a class="btn" href="submit.php">Advertise Your Game</a>   
            </section>
            <section class="featured">
                <h2 class="featured-h2">Featured Games</h2>
                <div class="game-grid">
                    <div class="game-card">
                        <img src="assets/images/tactical-ops-one.webp" alt="Tactical Ops" loading="lazy">
                        <div class="game-info">
                            <h3 class="game-title">Tactical Ops</h3>
                            <p class="game-genre">Action | SinglePlayer | MultiPlayer | Sci-fi</p>
                        </div>
                        <div class="game-footer">
                            <span class="game-price">$19.99</span>
                            <a href="games.php" class="view-btn">View</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="assets/images/turbobine-one.webp" alt="Turbobine" loading="lazy">
                        <div class="game-info">
                            <h3 class="game-title">Turbobine</h3>
                            <p class="game-genre">Racing | SinglePlayer</p>
                        </div>
                        <div class="game-footer">
                            <span class="game-price">$24.99</span>
                            <a href="games.php" class="view-btn">View</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="assets/images/one-hour.webp" alt="One Hour" loading="lazy">
                        <div class="game-info">
                            <h3 class="game-title">One Hour</h3>
                            <p class="game-genre">Psychological horror</p>
                        </div>
                        <div class="game-footer">
                            <span class="game-price">$12.99</span>
                            <a href="games.php" class="view-btn">View</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="assets/images/drowning-dessert.webp" alt="Drownning Dessert" loading="lazy">
                        <div class="game-info">
                            <h3 class="game-title">Drwonning Dessert</h3>
                            <p class="game-genre">3rd Person | Action | SinglePlayer</p>
                        </div>
                        <div class="game-footer">
                            <span class="game-price">$35.99</span>
                            <a href="games.php" class="view-btn">View</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="assets/images/dead-by-now.webp" alt="Dead By Now" loading="lazy">
                        <div class="game-info">
                            <h3 class="game-title">Dead By Now</h3>
                            <p class="game-genre">FPS | Action | Survival | Horror</p>
                        </div>
                        <div class="game-footer">
                            <span class="game-price">$40.99</span>
                            <a href="games.php" class="view-btn">View</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="assets/images/turbobine-two.webp" alt="Turbobine 2" loading="lazy">
                        <div class="game-info">
                            <h3 class="game-title">Turbobine 2</h3>
                            <p class="game-genre">Racing | SinglePlayer | MultiPlayer</p>
                        </div>
                        <div class="game-footer">
                            <span class="game-price">$35.99</span>
                            <a href="games.php" class="view-btn">View</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="assets/images/empty.webp" alt="Empty" loading="lazy">
                        <div class="game-info">
                            <h3 class="game-title">Empty</h3>
                            <p class="game-genre">Horror | Stratergy | SinglePlayer</p>
                        </div>
                        <div class="game-footer">
                            <span class="game-price">$40.99</span>
                            <a href="games.php" class="view-btn">View</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="categories">
                <h2>Browse By Genre</h2>
                <div class="category-grid">
                    <div class="category-card action">Action</div>
                    <div class="category-card rpg">RPG</div>
                    <div class="category-card strategy">Strategy</div>
                    <div class="category-card racing">Racing</div>
                    <div class="category-card horror">Horror</div>
                    <div class="category-card indie">Indie</div>
                </div>
            </section>
            <section class="cta">
                <h2>Have a Game to Promote?</h2>
                <p>Reach thousands of gamers by advertising your game today.</p>
                <a href="submit.php" class="cta-btn">Advertise Your Game</a>
            </section>
        </main>
        <footer>
            <p>2026 Galaari. All rights reserved.</p>
        </footer>
    </body>
</html>