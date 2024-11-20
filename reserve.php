<!DOCTYPE html>
<html>
    <head>
        <title>
            RESERVATION
        </title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <header class="header">
            <nav class="navbar">
                <div class="logo">
                    <span class="number-logo">12</span>
                </div>
                <ul class="nav-links">
                    <li><a href="nav.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Reservation</a></li>
                </ul>
            </nav>
            <div class="web-banner">
                <p class="experience-text">Experience</p>
                <h2 class="banner-title">12 COCKTAIL BAR</h2>
                <p class="sub-heading">HOME TO AWARD WINNING BARWOMEN AND BARMEN.</p>
               
                
            </div>
            
            </header>


            <section class="form-section">
                <div class="form-container">
                    <h2>Reservation Form</h2>
                    <form action="reservation.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" placeholder="Enter your age">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                                <option value="prefer_not_to_say">Prefer not to say</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reservation_date">Reservation Date:</label>
                            <input type="date" id="reservation_date" name="reservation_date">
                        </div>
                        <div class="form-group">
                            <label for="reservation_time">Preferred Time:</label>
                            <input type="time" id="reservation_time" name="reservation_time">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="special_requests">Special Requests:</label>
                            <textarea id="special_requests" name="special_requests" rows="4" placeholder="Any special requests or requirements?"></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Reserve</button>
                    </form>
                </div>
                <div class="right-poster">
                    <img src="img/cocktail2.jpg" alt="Poster Image" />
                </div>
            </section>
            <footer class="footer">
                <div class="footer-content">
                    <div class="footer-logo">
                        <span class="number-logo">12</span>
                    </div>
                    <div class="footer-socials">
                        <a href="#" class="social-icon">
                            <img src="img/facebook.svg" alt="Facebook">
                        </a>
                        <a href="#" class="social-icon">
                            <img src="img/instagram.png" alt="Instagram">
                        </a>
                        <a href="#" class="social-icon">
                            <img src="img/X.svg" alt="Twitter">
                        </a>
                        <a href="#" class="social-icon">
                            <img src="img/youtube.png" alt="YouTube">
                        </a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2024 12 Cocktail Bar. All rights reserved.</p>
                </div>
            </footer>
        
    </body>
</html>