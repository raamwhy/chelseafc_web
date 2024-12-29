<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All About Chelsea</title>
    <link rel="icon" href="img/1668.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <div class="logo-title">
            <img src="img/cfclogo.png" alt="Logo Chelsea FC">
            <h1>Chelsea FC</h1>
        </div>
        <nav class="navbar">
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="burger-menu">&#9776;</label>
            <div class="navbar-links">
                <a href="#home">Home</a>
                <a href="#squad-list">Squad List</a>
                <a href="#fixtures">Fixtures & Results</a>
                <a href="#about">About Chelsea</a>
                <a href="#" id="logoutButton">Logout</a>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="hero-section">
            <h2>Keep The Blue Flag Flying High</h2>
            <p><em>London is blue</em></p>
        </section>

        <section id="gallery" class="card-section">
            <h2 style="color: #08148c;">Latest News</h2>
            <div class="card-container">
                <div class="card">
                    <img src="img/fifa.jpg" alt="Berita 1">
                    <div class="card-content">
                        <p class="card-title">Chelsea FC Top Ratings</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/palmer.jpg" alt="Berita 2">
                    <div class="card-content">
                        <p class="card-title">Cole Palmer is the PFA Young Player of the year</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/palmer_gotm.jpg" alt="Berita 3">
                    <div class="card-content">
                        <p class="card-title">Cole Palmer wins goal of the month award</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/homekits.jpg" alt="Berita 4">
                    <div class="card-content">
                        <p class="card-title">Chelsea FC Home Kits 2024-2025</p>
                    </div>
                </div>
                <div class="card">
                    <span class="card-badge">New</span>
                    <img src="img/palmer2.jpg" alt="Berita 5">
                    <div class="card-content">
                        <p class="card-title">Cole Palmer has been nominated for the 2024 Men's Ballon d'Or</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="squad-list" class="info-section">
            <h2>Chelsea FC 2024/2025 Squad List</h2>
            <ol>
                <li>Robert Sanchez - Goalkeeper</li>
                <li>Axel Disasi - Centre-back</li>
                <li>Marc Cucurella - Left-back</li>
                <li>Tosin Adarabioyo - Centre-back</li>
                <li>Benoit Badiashile - Centre-back</li>
                <li>Levi Colwill - Centre-back</li>
                <li>Pedro Neto - Winger</li>
                <li>Enzo Fernandez - Midfielder</li>
                <li>-</li>
                <li>Mykhailo Mudryk - Winger</li>
                <li>Noni Madueke - Winger</li>
                <li>Filip Jorgensen - Goalkeeper</li>
                <li>Marcus Bettinelli - Goalkeeper</li>
                <li>Joao Felix - Forward</li>
                <li>Nicolas Jackson - Striker</li>
                <li>-</li>
                <li>Carney Chukwuemeka - Midfielder</li>
                <li>Christopher Nkunku - Striker</li>
                <li>Jadon Sancho - Winger</li>
                <li>Cole Palmer - Midfielder/Winger</li>
                <li>Ben Chilwell - Left-back</li>
                <li>Kiernan Dewsbury-Hall - Midfielder</li>
                <li>-</li>
                <li>Reece James - Right-back</li>
                <li>Moises Caicedo - Midfielder</li>
                <li>-</li>
                <li>Malo Gusto - Right-back</li>
                <li>-</li>
                <li>Wesley Fofana - Centre-back</li>
                <li>-</li>
                <li>Cesare Casadei - Midfielder</li>
                <li>Tyrique George - Winger</li>
                <li>-</li>
                <li>Josh Acheampong - Right-back</li>
                <li>-</li>
                <li>Deivid Washington - Striker</li>
                <li>Omari Kellyman - Midfielder</li>
                <li>Marc Guiu - Striker</li>
                <li>-</li>
                <li>Renato Veiga - Left-back</li>
                <li>-</li>
                <li>-</li>
                <li>-</li>
                <li>-</li>
                <li>Romeo Lavia - Midfielder</li>
                <li>-</li>
                <li>Lucas Bergstrom - Goalkeeper</li>
            </ol>
        </section>
        
        <section id="staff-list" class="info-section">
            <h2>Chelsea FC Staff List</h2>
            <ul>
                <li>Enzo Maresca - Head coach</li>
                <li>Willy Caballero - Assistant coach</li>
                <li>Danny Walker - Coach</li>
                <li>Roberto Vitiello - Coach</li>
                <li>Michele De Bernardin - Goalkeeper coach</li>
                <li>Marcos Alvarez - Fitness coach</li>
                <li>Javi Molina - Analyst</li>
                <li>Bernardo Cueva - Technical analyst</li>
                <li>Henrique Hilario - Goalkeeper coach</li>
                <li>James Russell - Assistant goalkeeper coach</li>
                <li>Carlo Cudicini - Loan technical coach/Club ambassador</li>
                <li>Ben Roberts - Head of global goalkeeping</li>
            </ul>
        </section>

        <section id="fixtures" class="info-section">
            <h2>Fixtures & Results</h2>
            <table>
                <thead>
                    <tr>
                        <th>Dates</th>
                        <th>Home/Away</th>
                        <th>Match</th>
                        <th>Competitions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sun 18 Aug 2024</td>
                        <td>Home</td>
                        <td>Chelsea 0-2 Man City</td>
                        <td>Premier League</td>
                    </tr>
                    <tr>
                        <td>Thu 22 Aug 2024</td>
                        <td>Home</td>
                        <td>Chelsea 2-0 Servette </td>
                        <td>UECL Qualifier</td>
                    </tr>
                    <tr>
                        <td>Sun 25 Aug 2024</td>
                        <td>Away</td>
                        <td>Wolves 2-6 Chelsea</td>
                        <td>Premier League</td>
                    </tr>
                    <tr>
                        <td>Thu 29 Aug 2024</td>
                        <td>Away</td>
                        <td>Servette 2-1 Chelsea</td>
                        <td>UECL Qualifier</td>
                    </tr>
                    <tr>
                        <td>Sat 14 Sep 2024</td>
                        <td>Away</td>
                        <td>Bournemouth vs Chelsea</td>
                        <td>Premier League</td>
                    </tr>
                    <tr>
                        <td>Sat 21 Sep 2024</td>
                        <td>Away</td>
                        <td>West Ham vs Chelsea</td>
                        <td>Premier League</td>
                    </tr>
                    <tr>
                        <td>Tue 24 Sep 2024</td>
                        <td>Home</td>
                        <td>Chelsea vs Barrow</td>
                        <td>Carabao Cup</td>
                    </tr>
                    <tr>
                        <td>Sat 28 Sep 2024</td>
                        <td>Home</td>
                        <td>Chelsea vs Brighton</td>
                        <td>Premier League</td>
                    </tr>
                    <tr>
                        <td>Thu 3 Oct 2024</td>
                        <td>Home</td>
                        <td>Chelsea vs KAA Gent</td>
                        <td>UECL</td>
                    </tr>
                </tbody>
            </table>
            <p>For the full and up to date fixtures, visit <a href="https://www.chelseafc.com/en/matches/mens-fixtures-and-results" target="_blank">(Official Chelsea FC fixtures page)</a></p>
        </section>

        <section id="about" class="info-section">
            <h2>The Story of Chelsea</h2>
            <p style="text-align: justify;">Beginnings Chelsea FC was founded with big ambitions by Henry Augustus Mears and Frederick Parker. The new team and stadium immediately captured the public’s imagination. Important figures include a giant goalkeeper and influential leaders, with roots that could have started even earlier.

                Aiming for the Stars Between the World Wars, Chelsea drew large crowds and spent heavily on top players, including Hughie Gallacher. Celebrities and even royalty showed interest in the club, but the search for trophies continued.
                
                Seeds of Success Chelsea’s first league title arrived under a modernizing manager. Earlier, innovative youth programs produced stars like Jimmy Greaves. Hollywood actor and fan Steve McQueen also became enamored with the club.
                
                Swinging London Chelsea flourished in the 1960s and ‘70s, with star players like Peter Osgood and Chopper Harris. They won silverware and became synonymous with flair and success, captivating a record TV audience and fans at home and abroad.
                
                The Rollercoaster Despite aiming high, Chelsea struggled financially in the 1970s. A new stand was built, and Ray Wilkins emerged as a young captain, but the club faced hardships as the founding family lost control of the club.
                
                A New Era In the 1980s, Chelsea faced their lowest point but started to rebound. New ownership breathed life into the club, which began signing high-profile players and adapting to the new Premier League, though challenges remained.
                
                Continental Success With Stamford Bridge secure, Chelsea signed star players and thrived domestically and in Europe, earning a place in the Champions League. Fan numbers grew, and the club forged new rivalries on the European stage.
                
                The Roman Era Under new owner Roman Abramovich, Chelsea became a football superpower, winning major domestic and international trophies. The club’s rise was marked by great players and significant achievements, though there were both successes and setbacks.
                
                The Holy Grail Chelsea’s golden generation finally won the Champions League in a dramatic 2012 final in Munich. They would later claim another European title, cementing their status as one of London’s and Europe’s top clubs.</p>
        </section>

    </main>

    <!-- Media Partners Section -->
    <section class="media-partners">
        <h2></h2>
        <div class="partners-logos">
            <img src="img/bingx.webp" alt="Bingx">
            <img src="img/nike.png" alt="Nike">
            <img src="img/fever.png" alt="Fever">
        </div>
    </section>

    <!-- Fixed logo -->
    <div class="fixed-logo">
        <img src="img/cfclogo.png" alt="Chelsea FC Logo">
    </div>

    <footer>
        <p style="color: #08148c; font-weight: bold;" >&copy; 3337230033 - Ramdhan Wijaya</p>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! <button id="logoutButton" class="btn btn-danger">Logout</button></p>
    </footer>

    <script src="logout.js"></script>
</body>
</html>
